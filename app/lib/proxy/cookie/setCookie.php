<?php namespace yxorP\app\lib\proxy\cookie;

echo 1;

class sessionCookieJar
{
    private static $defaults = ['Name' => null, 'Value' => null, 'Domain' => null, 'Path' => '/', 'Max-Age' => null, 'Expires' => null, 'Secure' => false, 'Discard' => false, 'HttpOnly' => false];
    private $data;

    public function __construct(array $data = [])
    {
        $this->data = array_replace(self::$defaults, $data);
        if (!$this->getExpires() && $this->getMaxAge()) {
            $this->setExpires(time() + $this->getMaxAge());
        } elseif ($this->getExpires() && !is_numeric($this->getExpires())) {
            $this->setExpires($this->getExpires());
        }
    }
}

echo 1;
