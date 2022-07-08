<?php namespace yxorP\snag;

use Composer\CaBundle\CaBundle;
use JetBrains\PhpStorm\Pure;
use yxorP\proxy\ClientInterface;
use yxorP\snag\Breadcrumbs\Breadcrumb;
use yxorP\snag\Breadcrumbs\Recorder;
use yxorP\snag\Callbacks\GlobalMetaData;
use yxorP\snag\Callbacks\RequestContext;
use yxorP\snag\Callbacks\RequestMetaData;
use yxorP\snag\Callbacks\RequestSession;
use yxorP\snag\Callbacks\RequestUser;
use yxorP\snag\Internal\ProxyCompat;
use yxorP\snag\Middleware\BreadcrumbData;
use yxorP\snag\Middleware\CallbackBridge;
use yxorP\snag\Middleware\DiscardClasses;
use yxorP\snag\Middleware\NotificationSkipper;
use yxorP\snag\Middleware\SessionData;
use yxorP\snag\Request\BasicResolver;
use yxorP\snag\Request\ResolverInterface;
use yxorP\snag\Shutdown\PhpShutdownStrategy;
use yxorP\snag\Shutdown\ShutdownStrategyInterface;

class Client
{
    const ENDPOINT = Configuration::NOTIFY_ENDPOINT;
    const DEFAULT_TIMEOUT_S = 15.0;
    private Configuration $config;
    private ResolverInterface|BasicResolver $resolver;
    private Recorder $recorder;
    private Pipeline $pipeline;
    private HttpClient $http;
    private SessionTracker $sessionTracker;

    public function __construct(Configuration $config, ResolverInterface $resolver = null, yxorP\proxy\ClientInterface $proxy = null, ShutdownStrategyInterface $shutdownStrategy = null)
    {
        $proxy = $proxy ?: self::makeProxy();
        $this->syncNotifyEndpointWithProxyBaseUri($config, $proxy);
        $this->config = $config;
        $this->resolver = $resolver ?: new BasicResolver();
        $this->recorder = new Recorder();
        $this->pipeline = new Pipeline();
        $this->http = new HttpClient($config, $proxy);
        $this->sessionTracker = new SessionTracker($config, $this->http);
        $this->registerMiddleware(new NotificationSkipper($config));
        $this->registerMiddleware(new DiscardClasses($config));
        $this->registerMiddleware(new BreadcrumbData($this->recorder));
        $this->registerMiddleware(new SessionData($this));
        $shutdownStrategy = $shutdownStrategy ?: new PhpShutdownStrategy();
        $shutdownStrategy->registerShutdownStrategy($this);
    }

    public static function makeProxy($base = null, array $options = []): yxorP\proxy\Client
    {
        $options = self::resolveProxyOptions($base, $options);
        return new yxorP\proxy\Client($options);
    }

    private static function resolveProxyOptions($base, array $options): array
    {
        $key = ProxyCompat::getBaseUriOptionName();
        $options[$key] = $base ?: Configuration::NOTIFY_ENDPOINT;
        $path = static::getCaBundlePath();
        if ($path) {
            $options['verify'] = $path;
        }
        return ProxyCompat::applyRequestOptions($options, ['timeout' => self::DEFAULT_TIMEOUT_S, 'connect_timeout' => self::DEFAULT_TIMEOUT_S,]);
    }

    protected static function getCaBundlePath(): bool|string
    {
        if (version_compare(PHP_VERSION, '5.6.0') >= 0 || !class_exists(CaBundle::class)) {
            return false;
        }
        return realpath(CaBundle::getSystemCaRootBundlePath());
    }

    private function syncNotifyEndpointWithProxyBaseUri(Configuration $configuration, yxorP\proxy\ClientInterface $proxy)
    {
        if ($configuration->getNotifyEndpoint() !== Configuration::NOTIFY_ENDPOINT) {
            return;
        }
        $base = ProxyCompat::getBaseUri($proxy);
        if (is_string($base) || (is_object($base) && method_exists($base, '__toString'))) {
            $configuration->setNotifyEndpoint((string)$base);
        }
    }

    public function registerMiddleware(callable $middleware): static
    {
        $this->pipeline->pipe($middleware);
        return $this;
    }

    public static function make($apiKey = null, $notifyEndpoint = null, $defaults = true): static
    {
        $env = new Env();
        $config = new Configuration($apiKey ?: $env->get('SNAG_API_KEY'));
        $proxy = static::makeProxy($notifyEndpoint ?: $env->get('SNAG_ENDPOINT'));
        $client = new static($config, null, $proxy);
        if ($defaults) {
            $client->registerDefaultCallbacks();
        }
        return $client;
    }

    public function registerDefaultCallbacks(): static
    {
        $this->registerCallback(new GlobalMetaData($this->config))->registerCallback(new RequestMetaData($this->resolver))->registerCallback(new RequestSession($this->resolver))->registerCallback(new RequestUser($this->resolver))->registerCallback(new RequestContext($this->resolver));
        return $this;
    }

    public function registerCallback(callable $callback): static
    {
        $this->registerMiddleware(new CallbackBridge($callback));
        return $this;
    }

    public function getConfig(): Configuration
    {
        return $this->config;
    }

    public function getPipeline(): Pipeline
    {
        return $this->pipeline;
    }

    public function clearBreadcrumbs()
    {
        $this->recorder->clear();
    }

    public function notifyException($throwable, callable $callback = null)
    {
        $report = Report::fromPHPThrowable($this->config, $throwable);
        $this->notify($report, $callback);
    }

    public function notify(Report $report, callable $callback = null)
    {
        $this->pipeline->execute($report, function ($report) use ($callback) {
            if ($callback) {
                $resolvedReport = null;
                $bridge = new CallbackBridge($callback);
                $bridge($report, function ($report) use (&$resolvedReport) {
                    $resolvedReport = $report;
                });
                if ($resolvedReport) {
                    $report = $resolvedReport;
                } else {
                    return;
                }
            }
            $this->http->queue($report);
        });
        $this->leaveBreadcrumb($report->getName(), Breadcrumb::ERROR_TYPE, $report->getSummary());
        if (!$this->config->isBatchSending()) {
            $this->flush();
        }
    }

    public function leaveBreadcrumb($name, $type = null, array $metaData = [])
    {
        $type = in_array($type, Breadcrumb::getTypes(), true) ? $type : Breadcrumb::MANUAL_TYPE;
        $this->recorder->record(new Breadcrumb($name, $type, $metaData));
    }

    public function flush()
    {
        $this->http->sendEvents();
    }

    public function notifyError($name, $message, callable $callback = null)
    {
        $report = Report::fromNamedError($this->config, $name, $message);
        $this->notify($report, $callback);
    }

    public function deploy($repository = null, $branch = null, $revision = null)
    {
        $this->build($repository, $revision);
    }

    public function build($repository = null, $revision = null, $provider = null, $builderName = null)
    {
        $data = [];
        if ($repository) {
            $data['repository'] = $repository;
        }
        if ($revision) {
            $data['revision'] = $revision;
        }
        if ($provider) {
            $data['provider'] = $provider;
        }
        if ($builderName) {
            $data['builder'] = $builderName;
        }
        $this->http->sendBuildReport($data);
    }

    public function startSession()
    {
        $this->sessionTracker->startSession();
    }

    public function getSessionTracker(): SessionTracker
    {
        return $this->sessionTracker;
    }

    #[Pure] public function getApiKey(): string
    {
        return $this->config->getApiKey();
    }

    public function setBatchSending($batchSending): static
    {
        $this->config->setBatchSending($batchSending);
        return $this;
    }

    #[Pure] public function isBatchSending(): bool
    {
        return $this->config->isBatchSending();
    }

    public function setNotifyReleaseStages(array $notifyReleaseStages = null): static
    {
        $this->config->setNotifyReleaseStages($notifyReleaseStages);
        return $this;
    }

    public function shouldNotify(): bool
    {
        return $this->config->shouldNotify();
    }

    public function setFilters(array $filters): static
    {
        $this->config->setFilters($filters);
        return $this;
    }

    #[Pure] public function getFilters(): array
    {
        return $this->config->getFilters();
    }

    public function setProjectRoot($projectRoot)
    {
        $this->config->setProjectRoot($projectRoot);
    }

    public function setProjectRootRegex($projectRootRegex)
    {
        $this->config->setProjectRootRegex($projectRootRegex);
    }

    public function isInProject($file): bool
    {
        return $this->config->isInProject($file);
    }

    public function setStripPath($stripPath)
    {
        $this->config->setStripPath($stripPath);
    }

    public function setStripPathRegex($stripPathRegex)
    {
        $this->config->setStripPathRegex($stripPathRegex);
    }

    public function getStrippedFilePath($file)
    {
        return $this->config->getStrippedFilePath($file);
    }

    public function setSendCode($sendCode): static
    {
        $this->config->setSendCode($sendCode);
        return $this;
    }

    #[Pure] public function shouldSendCode(): bool
    {
        return $this->config->shouldSendCode();
    }

    public function setNotifier(array $notifier): static
    {
        $this->config->setNotifier($notifier);
        return $this;
    }

    #[Pure] public function getNotifier(): array
    {
        return $this->config->getNotifier();
    }

    public function setAppVersion($appVersion): static
    {
        $this->config->setAppVersion($appVersion);
        return $this;
    }

    public function setReleaseStage($releaseStage): static
    {
        $this->config->setReleaseStage($releaseStage);
        return $this;
    }

    public function setAppType($type): static
    {
        $this->config->setAppType($type);
        return $this;
    }

    public function setFallbackType($type): static
    {
        $this->config->setFallbackType($type);
        return $this;
    }

    public function getAppData(): array
    {
        return $this->config->getAppData();
    }

    public function setHostname($hostname): static
    {
        $this->config->setHostname($hostname);
        return $this;
    }

    public function getDeviceData(): array
    {
        return $this->config->getDeviceData();
    }

    public function setMetaData(array $metaData, $merge = true): static
    {
        $this->config->setMetaData($metaData, $merge);
        return $this;
    }

    #[Pure] public function getMetaData(): array
    {
        return $this->config->getMetaData();
    }

    public function setErrorReportingLevel($errorReportingLevel): static
    {
        $this->config->setErrorReportingLevel($errorReportingLevel);
        return $this;
    }

    public function shouldIgnoreErrorCode($code): bool
    {
        return $this->config->shouldIgnoreErrorCode($code);
    }

    public function setNotifyEndpoint($endpoint): static
    {
        $this->config->setNotifyEndpoint($endpoint);
        return $this;
    }

    #[Pure] public function getNotifyEndpoint(): string
    {
        return $this->config->getNotifyEndpoint();
    }

    public function setSessionEndpoint($endpoint): static
    {
        $this->config->setSessionEndpoint($endpoint);
        return $this;
    }

    #[Pure] public function getSessionEndpoint(): string
    {
        return $this->config->getSessionEndpoint();
    }

    public function setBuildEndpoint($endpoint): static
    {
        $this->config->setBuildEndpoint($endpoint);
        return $this;
    }

    #[Pure] public function getBuildEndpoint(): string
    {
        return $this->config->getBuildEndpoint();
    }

    public function setAutoCaptureSessions($track): static
    {
        $this->config->setAutoCaptureSessions($track);
        return $this;
    }

    #[Pure] public function shouldCaptureSessions(): bool
    {
        return $this->config->shouldCaptureSessions();
    }

    public function getSessionClient(): \yxorP\proxy\Client|ClientInterface
    {
        return $this->config->getSessionClient();
    }

    public function setMemoryLimitIncrease($value): Configuration
    {
        return $this->config->setMemoryLimitIncrease($value);
    }

    #[Pure] public function getMemoryLimitIncrease(): ?int
    {
        return $this->config->getMemoryLimitIncrease();
    }

    public function setDiscardClasses(array $discardClasses): static
    {
        $this->config->setDiscardClasses($discardClasses);
        return $this;
    }

    #[Pure] public function getDiscardClasses(): array
    {
        return $this->config->getDiscardClasses();
    }

    public function setRedactedKeys(array $redactedKeys): static
    {
        $this->config->setRedactedKeys($redactedKeys);
        return $this;
    }

    #[Pure] public function getRedactedKeys(): array
    {
        return $this->config->getRedactedKeys();
    }
}