<?php namespace yxorP\snag;

use Exception;
use JetBrains\PhpStorm\ArrayShape;
use RuntimeException;
use yxorP\proxy\ClientInterface;
use yxorP\snag\DateTime\Date;
use yxorP\snag\Internal\ProxyCompat;

class HttpClient
{
    const MAX_SIZE = 1048576;
    const NOTIFY_PAYLOAD_VERSION = '4.0';
    const SESSION_PAYLOAD_VERSION = '1.0';
    const PAYLOAD_VERSION = self::NOTIFY_PAYLOAD_VERSION;
    private Configuration $config;
    private ClientInterface $proxy;
    private array $queue = [];

    public function __construct(Configuration $config, ClientInterface $proxy)
    {
        $this->config = $config;
        $this->proxy = $proxy;
    }

    public function queue(Report $report)
    {
        $this->queue[] = $report;
    }

    public function deploy(array $data)
    {
        $app = $this->config->getAppData();
        $data['releaseStage'] = $app['releaseStage'];
        if (isset($app['version'])) {
            $data['appVersion'] = $app['version'];
        }
        $data['apiKey'] = $this->config->getApiKey();
        $uri = rtrim($this->config->getNotifyEndpoint(), '/') . '/deploy';
        $this->post($uri, ['json' => $data]);
    }

    public function sendBuildReport(array $buildInfo)
    {
        $app = $this->config->getAppData();
        if (!isset($app['version'])) {
            error_log('Snag Warning: App version is not set. Unable to send build report.');
            return;
        }
        $data = ['appVersion' => $app['version']];
        $sourceControl = [];
        if (isset($buildInfo['repository'])) {
            $sourceControl['repository'] = $buildInfo['repository'];
        }
        if (isset($buildInfo['provider'])) {
            $sourceControl['provider'] = $buildInfo['provider'];
        }
        if (isset($buildInfo['revision'])) {
            $sourceControl['revision'] = $buildInfo['revision'];
        }
        if (!empty($sourceControl)) {
            $data['sourceControl'] = $sourceControl;
        }
        if (isset($buildInfo['builder'])) {
            $data['builderName'] = $buildInfo['builder'];
        } else {
            $data['builderName'] = Utils::getBuilderName();
        }
        if (isset($buildInfo['buildTool'])) {
            $data['buildTool'] = $buildInfo['buildTool'];
        } else {
            $data['buildTool'] = 'snag-php';
        }
        $data['releaseStage'] = $app['releaseStage'];
        $data['apiKey'] = $this->config->getApiKey();
        $this->post($this->config->getBuildEndpoint(), ['json' => $data]);
    }

    public function send()
    {
        $this->sendEvents();
    }

    public function sendEvents()
    {
        if (!$this->queue) {
            return;
        }
        $this->deliverEvents($this->config->getNotifyEndpoint(), $this->getEventPayload());
        $this->queue = [];
    }

    public function sendSessions(array $payload)
    {
        $this->post($this->config->getSessionEndpoint(), ['json' => $payload, 'headers' => $this->getHeaders(self::SESSION_PAYLOAD_VERSION),]);
    }

    protected function post($uri, array $options = [])
    {
        if (ProxyCompat::isUsingProxy5()) {
            $this->proxy->post($uri, $options);
        } else {
            $this->proxy->request('POST', $uri, $options);
        }
    }

    protected function deliverEvents($uri, array $data)
    {
        try {
            $normalized = $this->normalize($data);
        } catch (RuntimeException $e) {
            if (count($data['events']) > 1) {
                $event = array_shift($data['events']);
                $this->deliverEvents($uri, array_merge($data, ['events' => [$event]]));
                $this->deliverEvents($uri, $data);
            } else {
                error_log('Snag Warning: ' . $e->getMessage());
            }
            return;
        }
        try {
            $this->post($uri, ['body' => $normalized, 'headers' => $this->getHeaders(),]);
        } catch (Exception $e) {
            error_log('Snag Warning: Couldn\'t notify. ' . $e->getMessage());
        }
    }

    protected function normalize(array $data): bool|string
    {
        $body = json_encode($data);
        if ($this->length($body) <= static::MAX_SIZE) {
            return $body;
        }
        unset($data['events'][0]['metaData']);
        $body = json_encode($data);
        if ($this->length($body) > static::MAX_SIZE) {
            throw new RuntimeException('Payload too large');
        }
        return $body;
    }

    protected function length($str): bool|int
    {
        return function_exists('mb_strlen') ? mb_strlen($str, '8bit') : strlen($str);
    }

    #[ArrayShape(['Snag-Api-Key' => "string", 'Snag-Sent-At' => "string", 'Snag-Payload-Version' => "mixed|string", 'Content-Type' => "string"])] protected function getHeaders($version = self::NOTIFY_PAYLOAD_VERSION): array
    {
        return ['Snag-Api-Key' => $this->config->getApiKey(), 'Snag-Sent-At' => Date::now(), 'Snag-Payload-Version' => $version, 'Content-Type' => 'application/json',];
    }

    #[ArrayShape(['apiKey' => "string", 'notifier' => "string[]", 'events' => "array"])] protected function getEventPayload(): array
    {
        $events = [];
        foreach ($this->queue as $report) {
            $event = $report->toArray();
            if ($event) {
                $events[] = $event;
            }
        }
        return ['apiKey' => $this->config->getApiKey(), 'notifier' => $this->config->getNotifier(), 'events' => $events,];
    }

    #[ArrayShape(['apiKey' => "string", 'notifier' => "string[]", 'events' => "array"])] protected function build(): array
    {
        return $this->getEventPayload();
    }

    protected function postJson($uri, array $data)
    {
        $this->deliverEvents($uri, $data);
    }
}