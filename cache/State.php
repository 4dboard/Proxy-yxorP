<?php namespace yxorP\cache;
trait State
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
}