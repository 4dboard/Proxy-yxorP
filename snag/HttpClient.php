<?php

namespace yxorP\snag;

use Exception;
use RuntimeException;
use \yxorP\proxy\ClientInterface;
use yxorP\snag\DateTime\Date;
use yxorP\snag\Internal\GuzzleCompat;

class HttpClient
{
    /**
     * The maximum payload size. A whole megabyte (1024 * 1024).
     *
     * @var int
     */
    const MAX_SIZE = 1048576;
    /**
     * The payload version for the error notification API.
     */
    const NOTIFY_PAYLOAD_VERSION = '4.0';
    /**
     * The payload version for the session API.
     */
    const SESSION_PAYLOAD_VERSION = '1.0';
    /**
     * The payload version for the error notification API.
     *
     * @deprecated Use {self::NOTIFY_PAYLOAD_VERSION} instead.
     */
    const PAYLOAD_VERSION = self::NOTIFY_PAYLOAD_VERSION;
    /**
     * @var Configuration
     */
    protected $config;
    /**
     * @var ClientInterface
     */
    protected $guzzle;
    /**
     * The queue of reports to send.
     *
     * @var Report[]
     */
    protected $queue = [];

    /**
     * @param Configuration $config
     * @param ClientInterface $guzzle
     */
    public function __construct(Configuration $config, ClientInterface $guzzle)
    {
        $this->config = $config;
        $this->guzzle = $guzzle;
    }

    /**
     * Add a report to the queue.
     *
     * @param Report $report
     *
     * @return void
     */
    public function queue(Report $report)
    {
        $this->queue[] = $report;
    }

    /**
     * Notify Snag of a deployment.
     *
     * @param array $data the deployment information
     *
     * @return void
     *
     * @deprecated Use {@see self::sendBuildReport} instead.
     */
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

    /**
     * Notify Snag of a build.
     *
     * @param array $buildInfo the build information
     *
     * @return void
     */
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

    /**
     * Deliver everything on the queue to Snag.
     *
     * @return void
     *
     * @deprecated Use {HttpClient::sendEvents} instead.
     */
    public function send()
    {
        $this->sendEvents();
    }

    /**
     * Deliver everything on the queue to Snag.
     *
     * @return void
     */
    public function sendEvents()
    {
        if (!$this->queue) {
            return;
        }

        $this->deliverEvents(
            $this->config->getNotifyEndpoint(),
            $this->getEventPayload()
        );

        $this->queue = [];
    }

    /**
     * Send a session data payload to Snag.
     *
     * @param array $payload
     *
     * @return void
     */
    public function sendSessions(array $payload)
    {
        $this->post(
            $this->config->getSessionEndpoint(),
            [
                'json' => $payload,
                'headers' => $this->getHeaders(self::SESSION_PAYLOAD_VERSION),
            ]
        );
    }

    /**
     * Send a POST request to Snag.
     *
     * @param string $uri the uri to hit
     * @param array $options the request options
     *
     * @return void
     */
    protected function post($uri, array $options = [])
    {
        if (GuzzleCompat::isUsingGuzzle5()) {
            // TODO: validate this by running PHPStan with Guzzle 5
            // @phpstan-ignore-next-line
            $this->guzzle->post($uri, $options);
        } else {
            $this->guzzle->request('POST', $uri, $options);
        }
    }

    /**
     * Deliver the given events to the notification API.
     *
     * @param string $uri the uri to hit
     * @param array $data the data send
     *
     * @return void
     */
    protected function deliverEvents($uri, array $data)
    {
        // Try to send the whole lot, or without the meta data for the first
        // event. If failed, try to send the first event, and then the rest of
        // them, recursively. Decrease by a constant and concquer if you like.
        // Note that the base case is satisfied as soon as the payload is small
        // enought to send, or when it's simply discarded.
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
            $this->post(
                $uri,
                [
                    'body' => $normalized,
                    'headers' => $this->getHeaders(self::NOTIFY_PAYLOAD_VERSION),
                ]
            );
        } catch (Exception $e) {
            error_log('Snag Warning: Couldn\'t notify. ' . $e->getMessage());
        }
    }

    /**
     * Normalize the given data to ensure it's the correct size.
     *
     * @param array $data the data to normalize
     *
     * @return string the JSON encoded data after normalization
     * @throws RuntimeException
     *
     */
    protected function normalize(array $data)
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

    /**
     * Get the length of the given string in bytes.
     *
     * @param string $str the string to get the length of
     *
     * @return int
     */
    protected function length($str)
    {
        return function_exists('mb_strlen') ? mb_strlen($str, '8bit') : strlen($str);
    }

    /**
     * Builds the array of headers to send.
     *
     * @param string $version The payload version to use. This defaults to the
     *                        notify payload version if not given. The default
     *                        value should not be relied upon and will be removed
     *                        in the next major release.
     *
     * @return array
     */
    protected function getHeaders($version = self::NOTIFY_PAYLOAD_VERSION)
    {
        return [
            'Snag-Api-Key' => $this->config->getApiKey(),
            'Snag-Sent-At' => Date::now(),
            'Snag-Payload-Version' => $version,
            'Content-Type' => 'application/json',
        ];
    }

    /**
     * Get the event payload to send.
     *
     * @return array
     */
    protected function getEventPayload()
    {
        $events = [];

        foreach ($this->queue as $report) {
            $event = $report->toArray();

            if ($event) {
                $events[] = $event;
            }
        }

        return [
            'apiKey' => $this->config->getApiKey(),
            'notifier' => $this->config->getNotifier(),
            'events' => $events,
        ];
    }

    /**
     * Build the request data to send.
     *
     * @return array
     *
     * @deprecated Use {@see HttpClient::getEventPayload} instead.
     */
    protected function build()
    {
        return $this->getEventPayload();
    }

    /**
     * Deliver the given events to the notification API.
     *
     * @param string $uri the uri to hit
     * @param array $data the data send
     *
     * @return void
     *
     * @deprecated Use {HttpClient::deliverEvents} instead
     */
    protected function postJson($uri, array $data)
    {
        $this->deliverEvents($uri, $data);
    }
}
