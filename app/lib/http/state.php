<?php namespace yxorP\app\lib\http;
/**
 * A trait that allows the class to be serialized and unserialized.
 */
trait state
{
    /**
     * A magic method that allows the class to be serialized and unserialized.
     *
     */
    public static function __set_state($data)
    {
        /**
         * Creating a new instance of the class that the trait is used in.
         */
        $self = new self();
        /**
         * Setting the state of the object.
         */
        $self->setState($data);
        /**
         * Returning the object that the trait is used in.
         */
        return $self;
    }

    /**
     * Setting the state of the object.
     *
     */
    public function setState($data): void
    {
        /**
         * Iterating over the array and setting the properties of the object.
         */
        foreach ($data as $k => $v) {
            /**
             * Setting the property of the object.
             */
            $this->{$k} = $v;
        }
    }


    /**
     * Setting the state of the object.
     *
     */
    public function toString(): string
    {
        /**
         * Iterating over the array and setting the properties of the object.
         */
        foreach ($data as $k => $v) {
            /**
             * Setting the property of the object.
             */
            $this->{$k} = $v;
        }
    }
}
