<?php namespace yxorP\snag;

use InvalidArgumentException;
use ProxyHttp\ClientInterface;

class Configuration
{
    const NOTIFY_ENDPOINT = 'https://notify.bugsnag.com';
    const SESSION_ENDPOINT = 'https://sessions.bugsnag.com';
    const BUILD_ENDPOINT = 'https://build.bugsnag.com';
    private string $apiKey;
    private bool $batchSending = true;
    private $notifyReleaseStages;
    private array $filters = ['password', 'cookie', 'authorization', 'php-auth-user', 'php-auth-pw', 'php-auth-digest',];
    private $projectRootRegex;
    private $stripPathRegex;
    private bool $sendCode = true;
    private array $notifier = ['name' => 'Snag PHP (Official)', 'version' => '3.27.0', 'url' => 'https://bugsnag.com',];
    private string|false $fallbackType;
    private array $appData = [];
    private array $deviceData = [];
    private array $metaData = [];
    private $errorReportingLevel;
    private bool $autoCaptureSessions = false;
    private ClientInterface|\ProxyHttp\Client $sessionClient;
    private string $notifyEndpoint = self::NOTIFY_ENDPOINT;
    private string $sessionEndpoint = self::SESSION_ENDPOINT;
    private string $buildEndpoint = self::BUILD_ENDPOINT;
    private int $memoryLimitIncrease = 5242880;
    private array $discardClasses = [];
    private array $redactedKeys = [];

    public function __construct($apiKey)
    {
        if (!is_string($apiKey)) {
            throw new InvalidArgumentException('Invalid API key');
        }
        $this->apiKey = $apiKey;
        $this->fallbackType = php_sapi_name();
        $this->mergeDeviceData(['runtimeVersions' => ['php' => phpversion()]]);
    }

    public function mergeDeviceData($data): static
    {
        $this->deviceData = array_merge_recursive($this->deviceData, $data);
        return $this;
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    public function isBatchSending(): bool
    {
        return $this->batchSending;
    }

    public function setBatchSending($batchSending): static
    {
        $this->batchSending = $batchSending;
        return $this;
    }

    public function setNotifyReleaseStages(array $notifyReleaseStages = null): static
    {
        $this->notifyReleaseStages = $notifyReleaseStages;
        return $this;
    }

    public function shouldNotify(): bool
    {
        if (!$this->notifyReleaseStages) {
            return true;
        }
        return in_array($this->getAppData()['releaseStage'], $this->notifyReleaseStages, true);
    }

    public function getAppData(): array
    {
        return array_merge(array_filter(['type' => $this->fallbackType, 'releaseStage' => 'production']), array_filter($this->appData));
    }

    public function getFilters(): array
    {
        return $this->filters;
    }

    public function setFilters(array $filters): static
    {
        $this->filters = $filters;
        return $this;
    }

    public function setProjectRoot($projectRoot)
    {
        $projectRootRegex = $projectRoot ? '/^' . preg_quote($projectRoot, '/') . '[\\/]?/i' : null;
        $this->setProjectRootRegex($projectRootRegex);
    }

    public function setProjectRootRegex($projectRootRegex)
    {
        if ($projectRootRegex && @preg_match($projectRootRegex, '') === false) {
            throw new InvalidArgumentException('Invalid project root regex: ' . $projectRootRegex);
        }
        $this->projectRootRegex = $projectRootRegex;
        $this->setStripPathRegex($projectRootRegex);
    }

    public function setStripPathRegex($stripPathRegex)
    {
        if ($stripPathRegex && @preg_match($stripPathRegex, '') === false) {
            throw new InvalidArgumentException('Invalid strip path regex: ' . $stripPathRegex);
        }
        $this->stripPathRegex = $stripPathRegex;
    }

    public function isInProject($file): bool
    {
        return $this->projectRootRegex && preg_match($this->projectRootRegex, $file);
    }

    public function setStripPath($stripPath)
    {
        $stripPathRegex = $stripPath ? '/^' . preg_quote($stripPath, '/') . '[\\/]?/i' : null;
        $this->setStripPathRegex($stripPathRegex);
    }

    public function getStrippedFilePath($file)
    {
        return $this->stripPathRegex ? preg_replace($this->stripPathRegex, '', $file) : $file;
    }

    public function setSendCode($sendCode): static
    {
        $this->sendCode = $sendCode;
        return $this;
    }

    public function shouldSendCode(): bool
    {
        return $this->sendCode;
    }

    public function getNotifier(): array
    {
        return $this->notifier;
    }

    public function setNotifier(array $notifier): static
    {
        $this->notifier = $notifier;
        return $this;
    }

    public function setAppVersion($appVersion): static
    {
        $this->appData['version'] = $appVersion;
        return $this;
    }

    public function setReleaseStage($releaseStage): static
    {
        $this->appData['releaseStage'] = $releaseStage;
        return $this;
    }

    public function setAppType($type): static
    {
        $this->appData['type'] = $type;
        return $this;
    }

    public function setFallbackType($type): static
    {
        $this->fallbackType = $type;
        return $this;
    }

    public function setHostname($hostname): static
    {
        $this->deviceData['hostname'] = $hostname;
        return $this;
    }

    public function getDeviceData(): array
    {
        return array_merge($this->getHostname(), array_filter($this->deviceData));
    }

    protected function getHostname(): array
    {
        $disabled = explode(',', ini_get('disable_functions'));
        if (function_exists('php_uname') && !in_array('php_uname', $disabled, true)) {
            return ['hostname' => php_uname('n')];
        }
        if (function_exists('gethostname') && !in_array('gethostname', $disabled, true)) {
            return ['hostname' => gethostname()];
        }
        return [];
    }

    public function getMetaData(): array
    {
        return $this->metaData;
    }

    public function setMetaData(array $metaData, $merge = true): static
    {
        $this->metaData = $merge ? array_merge_recursive($this->metaData, $metaData) : $metaData;
        return $this;
    }

    public function setErrorReportingLevel($errorReportingLevel): static
    {
        if (!$this->isSubsetOfErrorReporting($errorReportingLevel)) {
            $missingLevels = implode(', ', $this->getMissingErrorLevelNames($errorReportingLevel));
            $message = 'Snag Warning: errorReportingLevel cannot contain values that are not in error_reporting. ' . "Any errors of these levels will be ignored: {$missingLevels}.";
            error_log($message);
        }
        $this->errorReportingLevel = $errorReportingLevel;
        return $this;
    }

    private function isSubsetOfErrorReporting($level): bool
    {
        if (!is_int($level)) {
            return true;
        }
        $errorReporting = error_reporting();
        return ($errorReporting | $level) === $errorReporting;
    }

    private function getMissingErrorLevelNames($level): array
    {
        $missingLevels = [];
        $errorReporting = error_reporting();
        foreach (ErrorTypes::getAllCodes() as $code) {
            if (($code & $level) && !($code & $errorReporting)) {
                $missingLevels[] = ErrorTypes::codeToString($code);
            }
        }
        return $missingLevels;
    }

    public function shouldIgnoreErrorCode($code): bool
    {
        if (!(error_reporting() & $code)) {
            return true;
        }
        if (isset($this->errorReportingLevel)) {
            return !($this->errorReportingLevel & $code);
        }
        return false;
    }

    public function getNotifyEndpoint(): string
    {
        return $this->notifyEndpoint;
    }

    public function setNotifyEndpoint($endpoint): static
    {
        $this->notifyEndpoint = $endpoint;
        return $this;
    }

    public function getSessionEndpoint(): string
    {
        return $this->sessionEndpoint;
    }

    public function setSessionEndpoint($endpoint): static
    {
        $this->sessionEndpoint = $endpoint;
        return $this;
    }

    public function getBuildEndpoint(): string
    {
        return $this->buildEndpoint;
    }

    public function setBuildEndpoint($endpoint): static
    {
        $this->buildEndpoint = $endpoint;
        return $this;
    }

    public function setAutoCaptureSessions($track): static
    {
        $this->autoCaptureSessions = $track;
        return $this;
    }

    public function shouldCaptureSessions(): bool
    {
        return $this->autoCaptureSessions;
    }

    public function getSessionClient(): \ProxyHttp\Client|ClientInterface
    {
        if (is_null($this->sessionClient)) {
            $this->sessionClient = Client::makeProxy($this->sessionEndpoint);
        }
        return $this->sessionClient;
    }

    public function getMemoryLimitIncrease(): int
    {
        return $this->memoryLimitIncrease;
    }

    public function setMemoryLimitIncrease($value): static
    {
        $this->memoryLimitIncrease = $value;
        return $this;
    }

    public function getDiscardClasses(): array
    {
        return $this->discardClasses;
    }

    public function setDiscardClasses(array $discardClasses): static
    {
        $this->discardClasses = $discardClasses;
        return $this;
    }

    public function getRedactedKeys(): array
    {
        return $this->redactedKeys;
    }

    public function setRedactedKeys(array $redactedKeys): static
    {
        $this->redactedKeys = $redactedKeys;
        return $this;
    }
}