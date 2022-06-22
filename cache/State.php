<?php

namespace yxorP\cache;

if (!\trait_exists('State')) {
    trait State
    {
        public static function __set_state($data)
        {
            $self = new self();
            $self->setState($data);
            return $self;
        }

        public function setState($data)
        {
            foreach ($data as $k => $v) {
                $this->{$k} = $v;
            }
        }
    }
}