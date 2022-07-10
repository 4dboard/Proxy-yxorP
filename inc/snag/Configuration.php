<?php namespace yxorP\inc\snag;

use InvalidArgumentException;

class Configuration
{
    const NOTIFY_ENDPOINT = 'https://notify.bugsnag.com';
    const SESSION_ENDPOINT = 'https://sessions.bugsnag.com';
    const BUILD_ENDPOINT = 'https://build.bugsnag.com';
    protected $apiKey;
    protected $batchSending = true;
    protected $notifyReleaseStages;
    protected $filters = ['password', 'cookie', 'authorization', 'php-auth-user', 'php-auth-pw', 'php-auth-digest',];
    protected $projectRootRegex;
    protected $stripPathRegex;
    protected $sendCode = true;
    protected $notifier = ['name' => 'Snag PHP (Official)', 'version' => '3.27.0', 'url' => 'https://bugsnag.com',];
    protected $fallbackType;
    protected $appData = [];
    protected $deviceData = [];
    protected $metaData = [];
    protected $errorReportingLevel;
    protected $autoCaptureSessions = false;
    protected $sessionClient;
    protected $notifyEndpoint = self::NOTIFY_ENDPOINT;
    protected $sessionEndpoint = self::SESSION_ENDPOINT;
    protected $buildEndpoint = self::BUILD_ENDPOINT;
    protected $memoryLimitIncrease = 5242880;
    protected $discardClasses = [];
    protected $redactedKeys = [];

    public function __construct($apiKey)
    {
        if (!is_string($apiKey)) {
            throw new InvalidArgumentException('Invalid API key');
        }
        $this->apiKey = $apiKey;
        $this->fallbackType = php_sapi_name();
        $this->mergeDeviceData(['runtimeVersions' => ['php' => phpversion()]]);
    }

    public function mergeDeviceData($data)
    {
        $this->deviceData = array_merge_recursive($this->deviceData, $data);
        return $this;
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function isBatchSending()
    {
        return $this->batchSending;
    }

    public function setBatchSending($batchSending)
    {
        $this->batchSending = $batchSending;
        return $this;
    }

    public function setNotifyReleaseStages(array $notifyReleaseStages = null)
    {
        $this->notifyReleaseStages = $notifyReleaseStages;
        return $this;
    }

    public function shouldNotify()
    {
        if (!$this->notifyReleaseStages) {
            return true;
        }
        return in_array($this->getAppData()['releaseStage'], $this->notifyReleaseStages, true);
    }

    public function getAppData()
    {
        return array_merge(array_filter(['type' => $this->fallbackType, 'releaseStage' => 'production']), array_filter($this->appData));
    }

    public function getFilters()
    {
        return $this->filters;
    }

    public function setFilters(array $filters)
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

    public function isInProject($file)
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

    public function setSendCode($sendCode)
    {
        $this->sendCode = $sendCode;
        return $this;
    }

    public function shouldSendCode()
    {
        return $this->sendCode;
    }

    public function getNotifier()
    {
        return $this->notifier;
    }

    public function setNotifier(array $notifier)
    {
        $this->notifier = $notifier;
        return $this;
    }

    public function setAppVersion($appVersion)
    {
        $this->appData['version'] = $appVersion;
        return $this;
    }

    public function setReleaseStage($releaseStage)
    {
        $this->appData['releaseStage'] = $releaseStage;
        return $this;
    }

    public function setAppType($type)
    {
        $this->appData['type'] = $type;
        return $this;
    }

    public function setFallbackType($type)
    {
        $this->fallbackType = $type;
        return $this;
    }

    public function setHostname($hostname)
    {
        $this->deviceData['hostname'] = $hostname;
        return $this;
    }

    public function getDeviceData()
    {
        return array_merge($this->getHostname(), array_filter($this->deviceData));
    }

    protected function getHostname()
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

    public function getMetaData()
    {
        return $this->metaData;
    }

    public function setMetaData(array $metaData, $merge = true)
    {
        $this->metaData = $merge ? array_merge_recursive($this->metaData, $metaData) : $metaData;
        return $this;
    }

    public function setErrorReportingLevel($errorReportingLevel)
    {
        if (!$this->isSubsetOfErrorReporting($errorReportingLevel)) {
            $missingLevels = implode(', ', $this->getMissingErrorLevelNames($errorReportingLevel));
            $message = 'Snag Warning: errorReportingLevel cannot contain values that are not in error_reporting. ' . "Any errors of these levels will be ignored: {$missingLevels}.";
            error_log($message);
        }
        $this->errorReportingLevel = $errorReportingLevel;
        return $this;
    }

    private function isSubsetOfErrorReporting($level)
    {
        if (!is_int($level)) {
            return true;
        }
        $errorReporting = error_reporting();
        return ($errorReporting | $level) === $errorReporting;
    }

    private function getMissingErrorLevelNames($level)
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

    public function shouldIgnoreErrorCode($code)
    {
        if (!(error_reporting() & $code)) {
            return true;
        }
        if (isset($this->errorReportingLevel)) {
            return !($this->errorReportingLevel & $code);
        }
        return false;
    }

    public function getNotifyEndpoint()
    {
        return $this->notifyEndpoint;
    }

    public function setNotifyEndpoint($endpoint)
    {
        $this->notifyEndpoint = $endpoint;
        return $this;
    }

    public function getSessionEndpoint()
    {
        return $this->sessionEndpoint;
    }

    public function setSessionEndpoint($endpoint)
    {
        $this->sessionEndpoint = $endpoint;
        return $this;
    }

    public function getBuildEndpoint()
    {
        return $this->buildEndpoint;
    }

    public function setBuildEndpoint($endpoint)
    {
        $this->buildEndpoint = $endpoint;
        return $this;
    }

    public function setAutoCaptureSessions($track)
    {
        $this->autoCaptureSessions = $track;
        return $this;
    }

    public function shouldCaptureSessions()
    {
        return $this->autoCaptureSessions;
    }

    public function getSessionClient()
    {
        if (is_null($this->sessionClient)) {
            $this->sessionClient = Client::makeproxy($this->sessionEndpoint);
        }
        return $this->sessionClient;
    }

    public function getMemoryLimitIncrease()
    {
        return $this->memoryLimitIncrease;
    }

    public function setMemoryLimitIncrease($value)
    {
        $this->memoryLimitIncrease = $value;
        return $this;
    }

    public function getDiscardClasses()
    {
        return $this->discardClasses;
    }

    public function setDiscardClasses(array $discardClasses)
    {
        $this->discardClasses = $discardClasses;
        return $this;
    }

    public function getRedactedKeys()
    {
        return $this->redactedKeys;
    }

    public function setRedactedKeys(array $redactedKeys)
    {
        $this->redactedKeys = $redactedKeys;
        return $this;
    }
}