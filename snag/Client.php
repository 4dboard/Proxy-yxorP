<?php namespace yxorP\snag;

use Composer\CaBundle\CaBundle;
use yxorP\proxy\ClientInterface;
use yxorP\snag\Breadcrumbs\Breadcrumb;
use yxorP\snag\Breadcrumbs\Recorder;
use yxorP\snag\Callbacks\GlobalMetaData;
use yxorP\snag\Callbacks\RequestContext;
use yxorP\snag\Callbacks\RequestMetaData;
use yxorP\snag\Callbacks\RequestSession;
use yxorP\snag\Callbacks\RequestUser;
use yxorP\snag\Internal\proxyCompat;
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
    protected $config;
    protected $resolver;
    protected $recorder;
    protected $pipeline;
    protected $http;
    protected $sessionTracker;

    public function __construct(Configuration $config, ResolverInterface $resolver = null, ClientInterface $proxy = null, ShutdownStrategyInterface $shutdownStrategy = null)
    {
        $proxy = $proxy ?: self::makeproxy();
        $this->syncNotifyEndpointWithproxyBaseUri($config, $proxy);
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

    public static function makeproxy($base = null, array $options = [])
    {
        $options = self::resolveproxyOptions($base, $options);
        return new \yxorP\proxy\Client($options);
    }

    private static function resolveproxyOptions($base, array $options)
    {
        $key = proxyCompat::getBaseUriOptionName();
        $options[$key] = $base ?: Configuration::NOTIFY_ENDPOINT;
        $path = static::getCaBundlePath();
        if ($path) {
            $options['verify'] = $path;
        }
        return proxyCompat::applyRequestOptions($options, ['timeout' => self::DEFAULT_TIMEOUT_S, 'connect_timeout' => self::DEFAULT_TIMEOUT_S,]);
    }

    protected static function getCaBundlePath()
    {
        if (version_compare(PHP_VERSION, '5.6.0') >= 0 || !class_exists(CaBundle::class)) {
            return false;
        }
        return realpath(CaBundle::getSystemCaRootBundlePath());
    }

    private function syncNotifyEndpointWithproxyBaseUri(Configuration $configuration, ClientInterface $proxy)
    {
        if ($configuration->getNotifyEndpoint() !== Configuration::NOTIFY_ENDPOINT) {
            return;
        }
        $base = proxyCompat::getBaseUri($proxy);
        if (is_string($base) || (is_object($base) && method_exists($base, '__toString'))) {
            $configuration->setNotifyEndpoint((string)$base);
        }
    }

    public function registerMiddleware(callable $middleware)
    {
        $this->pipeline->pipe($middleware);
        return $this;
    }

    public static function make($apiKey = null, $notifyEndpoint = null, $defaults = true)
    {

        $env = new Env();
        $config = new Configuration($apiKey ?: $env->get('SNAG_API_KEY'));
        $proxy = static::makeproxy($notifyEndpoint ?: $env->get('SNAG_ENDPOINT'));
        $client = new static($config, null, $proxy);
        if ($defaults) {
            $client->registerDefaultCallbacks();
        }
        return $client;
    }

    public function registerDefaultCallbacks()
    {
        $this->registerCallback(new GlobalMetaData($this->config))->registerCallback(new RequestMetaData($this->resolver))->registerCallback(new RequestSession($this->resolver))->registerCallback(new RequestUser($this->resolver))->registerCallback(new RequestContext($this->resolver));
        return $this;
    }

    public function registerCallback(callable $callback)
    {
        $this->registerMiddleware(new CallbackBridge($callback));
        return $this;
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function getPipeline()
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

    public function getSessionTracker()
    {
        return $this->sessionTracker;
    }

    public function getApiKey()
    {
        return $this->config->getApiKey();
    }

    public function setBatchSending($batchSending)
    {
        $this->config->setBatchSending($batchSending);
        return $this;
    }

    public function isBatchSending()
    {
        return $this->config->isBatchSending();
    }

    public function setNotifyReleaseStages(array $notifyReleaseStages = null)
    {
        $this->config->setNotifyReleaseStages($notifyReleaseStages);
        return $this;
    }

    public function shouldNotify()
    {
        return $this->config->shouldNotify();
    }

    public function setFilters(array $filters)
    {
        $this->config->setFilters($filters);
        return $this;
    }

    public function getFilters()
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

    public function isInProject($file)
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

    public function setSendCode($sendCode)
    {
        $this->config->setSendCode($sendCode);
        return $this;
    }

    public function shouldSendCode()
    {
        return $this->config->shouldSendCode();
    }

    public function setNotifier(array $notifier)
    {
        $this->config->setNotifier($notifier);
        return $this;
    }

    public function getNotifier()
    {
        return $this->config->getNotifier();
    }

    public function setAppVersion($appVersion)
    {
        $this->config->setAppVersion($appVersion);
        return $this;
    }

    public function setReleaseStage($releaseStage)
    {
        $this->config->setReleaseStage($releaseStage);
        return $this;
    }

    public function setAppType($type)
    {
        $this->config->setAppType($type);
        return $this;
    }

    public function setFallbackType($type)
    {
        $this->config->setFallbackType($type);
        return $this;
    }

    public function getAppData()
    {
        return $this->config->getAppData();
    }

    public function setHostname($hostname)
    {
        $this->config->setHostname($hostname);
        return $this;
    }

    public function getDeviceData()
    {
        return $this->config->getDeviceData();
    }

    public function setMetaData(array $metaData, $merge = true)
    {
        $this->config->setMetaData($metaData, $merge);
        return $this;
    }

    public function getMetaData()
    {
        return $this->config->getMetaData();
    }

    public function setErrorReportingLevel($errorReportingLevel)
    {
        $this->config->setErrorReportingLevel($errorReportingLevel);
        return $this;
    }

    public function shouldIgnoreErrorCode($code)
    {
        return $this->config->shouldIgnoreErrorCode($code);
    }

    public function setNotifyEndpoint($endpoint)
    {
        $this->config->setNotifyEndpoint($endpoint);
        return $this;
    }

    public function getNotifyEndpoint()
    {
        return $this->config->getNotifyEndpoint();
    }

    public function setSessionEndpoint($endpoint)
    {
        $this->config->setSessionEndpoint($endpoint);
        return $this;
    }

    public function getSessionEndpoint()
    {
        return $this->config->getSessionEndpoint();
    }

    public function setBuildEndpoint($endpoint)
    {
        $this->config->setBuildEndpoint($endpoint);
        return $this;
    }

    public function getBuildEndpoint()
    {
        return $this->config->getBuildEndpoint();
    }

    public function setAutoCaptureSessions($track)
    {
        $this->config->setAutoCaptureSessions($track);
        return $this;
    }

    public function shouldCaptureSessions()
    {
        return $this->config->shouldCaptureSessions();
    }

    public function getSessionClient()
    {
        return $this->config->getSessionClient();
    }

    public function setMemoryLimitIncrease($value)
    {
        return $this->config->setMemoryLimitIncrease($value);
    }

    public function getMemoryLimitIncrease()
    {
        return $this->config->getMemoryLimitIncrease();
    }

    public function setDiscardClasses(array $discardClasses)
    {
        $this->config->setDiscardClasses($discardClasses);
        return $this;
    }

    public function getDiscardClasses()
    {
        return $this->config->getDiscardClasses();
    }

    public function setRedactedKeys(array $redactedKeys)
    {
        $this->config->setRedactedKeys($redactedKeys);
        return $this;
    }

    public function getRedactedKeys()
    {
        return $this->config->getRedactedKeys();
    }
}