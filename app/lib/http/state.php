<?php namespace yxorP\app\lib\http;
trait state
{
    public static function __set_state($data)
    {
        $self = new self();
        $self->setState($data);
        return $self;
    }

    public function setState($data): void
    {
        foreach ($data as $k => $v) {
            $this->{$k} = $v;
        }
    }

    public function toString(): string
    {
        foreach ($data as $k => $v) {
            $this->{$k} = $v;
        }
    }
}
