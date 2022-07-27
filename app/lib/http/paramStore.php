<?php namespace yxorP\app\lib\http;

/**
 * A hint for the IDE to tell it that the function is pure.
 */

use JetBrains\PhpStorm\Pure;


/**
 * A class that stores parameters.
 */
class paramStore
{
    /**
     * Declaring a private variable called `$data` that is an array.
     */
    private array $data;
    /**
     * Declaring a private variable called `$case_sensitive` that can be of any type.
     */
    private string|array|object|null $case_sensitive;

    /**
     * A constructor.
     *
     */
    public function __construct($parameters = array(), $case_sensitive = 0)
    {
        /**
         * Casting the `$parameters` variable to an array.
         */
        $this->data = (array)$parameters;
        /**
         * Setting the `$case_sensitive` variable to the value of the `$case_sensitive` parameter.
         */
        $this->case_sensitive = $case_sensitive;
    }

    /**
     * Replacing the data in the `$data` variable with the data in the `$data` parameter.
     *
     */
    public function replace(array $data): void
    {
        /**
         * Clearing the data in the `$data` variable.
         */
        $this->clear();
        /**
         * Looping through the `$data` array and assigning the key to `$key` and the value to `$value`.
         */
        foreach ($data as $key => $value) {
            /**
             * Calling the `set` function with the `$key` and `$value` variables as parameters.
             */
            $this->set($key, $value);
        }
    }

    /**
     * Clearing the data in the `$data` variable.
     *
     */
    public function clear(): void
    {
        /**
         * Clearing the data in the `$data` variable.
         */
        $this->data = array();
    }

    /**
     * Setting the value of the `$key` parameter to the `$value` parameter.
     *
     */
    public function set($key, $value, $replace = true): void
    {
        /**
         * Normalizing the key.
         */
        $key = $this->normalizeKey($key);
        /**
         * If the `$replace` parameter is true or the `$key` parameter is not in the `$data` variable, then it will set the
         * value of the `$key` parameter to the `$value` parameter.
         */
        if ($replace || !$this->has($key)) {
            /**
             * Setting the value of the `$key` parameter to the `$value` parameter.
             */
            $this->data[$key] = $value;
        } else if (is_array($this->data[$key])) {
            /**
             * Adding the value to the array.
             */
            $this->data[$key][] = $value;
        } else {
            /**
             * Adding the value to the array.
             */
            $this->data[$key] = array($this->data[$key], $value);
        }
    }

    /**
     * Checking if the `$key` parameter is in the `$data` variable.
     */

    #[Pure] public function has($key): bool
    {
        /**
         * Checking if the `$key` parameter is in the `$data` variable.
         */
        return isset($this->data[$this->normalizeKey($key)]);
    }

    /**
     * Removing the `$key` parameter from the `$data` variable.
     *
     */
    public function remove($key): void
    {
        /**
         * Removing the `$key` parameter from the `$data` variable.
         */
        unset($this->data[$this->normalizeKey($key)]);
    }

    /**
     * Getting the value of the `$key` parameter from the `$data` variable. If the `$key` parameter is not in the
     * `$data` variable, it will return the `$default` parameter.
     */

    #[Pure] public function get($key, $default = null)
    {
        /**
         * Normalizing the key.
         */
        $key = $this->normalizeKey($key);
        /**
         * Checking if the `$key` parameter is in the `$data` variable, and if it is, it will return the value of the
         * `$key` parameter. If it is not, it will return the `$default` parameter.
         */
        return $this->has($key) ? $this->data[$key] : $default;
    }

    /**
     * Returning the `$data` variable.
     *
     */
    public function all(): array
    {
        return $this->data;
    }

    /**
     * Returning the `$data` variable as a JSON string.
     *
     */
    public function __toString()
    {
        /**
         * Returning the `$data` variable as a JSON string.
         */
        return json_encode($this->data);
    }

    /**
     * Normalizing the key.
     */

    private function normalizeKey($key)
    {
        /**
         * Checking if the `$case_sensitive` variable is true, and if it is, it will return the `$key` parameter. If it is
         * not, it will return the `$key` parameter in lowercase.
         */
        return $this->case_sensitive ? $key : strtolower($key);
    }
}