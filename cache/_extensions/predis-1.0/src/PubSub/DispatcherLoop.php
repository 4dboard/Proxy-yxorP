<?php /* yxorP */


namespace Predis\PubSub;

use InvalidArgumentException;


class DispatcherLoop
{
    protected array $callbacks;
    protected $defaultCallback;
    protected $subscriptionCallback;
    private Consumer $pubsub;

    public function __construct(Consumer $pubsub)
    {
        $this->callbacks = array();
        $this->pubsub = $pubsub;
    }

    public function getPubSubConsumer(): Consumer
    {
        return $this->pubsub;
    }

    public function subscriptionCallback($callable = null): void
    {
        if (isset($callable)) {
            $this->assertCallback($callable);
        }

        $this->subscriptionCallback = $callable;
    }

    protected function assertCallback($callable): void
    {
        if (!is_callable($callable)) {
            throw new InvalidArgumentException('The given argument must be a callable object.');
        }
    }

    public function defaultCallback($callable = null): void
    {
        if (isset($callable)) {
            $this->assertCallback($callable);
        }

        $this->subscriptionCallback = $callable;
    }


    public function attachCallback($channel, $callback): void
    {
        $callbackName = $this->getPrefixKeys() . $channel;

        $this->assertCallback($callback);
        $this->callbacks[$callbackName] = $callback;
        $this->pubsub->subscribe($channel);
    }

    protected function getPrefixKeys(): string
    {
        $options = $this->pubsub->getClient()->getOptions();

        if (isset($options->prefix)) {
            return $options->prefix->getPrefix();
        }

        return '';
    }

    public function detachCallback($channel): void
    {
        $callbackName = $this->getPrefixKeys() . $channel;

        if (isset($this->callbacks[$callbackName])) {
            unset($this->callbacks[$callbackName]);
            $this->pubsub->unsubscribe($channel);
        }
    }

    public function run(): void
    {
        foreach ($this->pubsub as $message) {
            $kind = $message->kind;

            if ($kind !== AbstractConsumer::MESSAGE && $kind !== AbstractConsumer::PMESSAGE) {
                if (isset($this->subscriptionCallback)) {
                    $callback = $this->subscriptionCallback;
                    $callback($message);
                }

                continue;
            }

            if (isset($this->callbacks[$message->channel])) {
                $callback = $this->callbacks[$message->channel];
                $callback($message->payload);
            } elseif (isset($this->defaultCallback)) {
                $callback = $this->defaultCallback;
                $callback($message);
            }
        }
    }

    public function stop(): void
    {
        $this->pubsub->stop();
    }
}
