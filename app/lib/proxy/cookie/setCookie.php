<?php namespace yxorP\app\lib\proxy\cookie;

class setCookie
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

    public function getExpires()
    {

        return $this->data['Expires'];
    }

    public function getMaxAge()
    {

        return $this->data['Max-Age'];
    }

    public function setExpires($timestamp)
    {
        $this->data['Expires'] = is_numeric($timestamp) ? (int)$timestamp : strtotime($timestamp);
    }

    public static function fromString($cookie)
    {
        $data = self::$defaults;
        $pieces = array_filter(array_map('trim', explode(';', $cookie)));
        if (empty($pieces[0]) || !strpos($pieces[0], '=')) {
            return new self($data);
        }
        foreach ($pieces as $part) {
            $cookieParts = explode('=', $part, 2);
            $key = trim($cookieParts[0]);
            $value = isset($cookieParts[1]) ? trim($cookieParts[1], " \n\r\t\0\x0B") : true;
            if (empty($data['Name'])) {
                $data['Name'] = $key;
                $data['Value'] = $value;
            } else {
                foreach (array_keys(self::$defaults) as $search) {
                    if (!strcasecmp($search, $key)) {
                        $data[$search] = $value;
                        continue 2;
                    }
                }
                $data[$key] = $value;
            }
        }
        return new self($data);
    }

    public function __toString(): string
    {
        $str = $this->data['Name'] . '=' . $this->data['Value'] . '; ';
        foreach ($this->data as $k => $v) {
            if ($k !== 'Name' && $k !== 'Value' && $v !== null && $v !== false) {
                if ($k === 'Expires') {
                    $str .= 'Expires=' . gmdate('D, d M Y H:i:s \G\M\T', $v) . '; ';
                } else {
                    $str .= ($v === true ? $k : "{$k}={$v}") . '; ';
                }
            }
        }
        return rtrim($str, '; ');
    }

    public function toArray()
    {
        return $this->data;
    }

    public function setName($name)
    {
        $this->data['Name'] = $name;
    }

    public function setValue($value)
    {
        $this->data['Value'] = $value;
    }

    public function setDomain($domain)
    {
        $this->data['Domain'] = $domain;
    }

    public function setPath($path)
    {
        $this->data['Path'] = $path;
    }

    public function setMaxAge($maxAge)
    {
        $this->data['Max-Age'] = $maxAge;
    }

    public function getSecure()
    {
        return $this->data['Secure'];
    }

    public function setSecure($secure)
    {
        $this->data['Secure'] = $secure;
    }

    public function getDiscard()
    {
        return $this->data['Discard'];
    }

    public function setDiscard($discard)
    {
        $this->data['Discard'] = $discard;
    }

    public function getHttpOnly()
    {
        return $this->data['HttpOnly'];
    }

    public function setHttpOnly($httpOnly)
    {
        $this->data['HttpOnly'] = $httpOnly;
    }

    public function matchesPath($requestPath)
    {
        $cookiePath = $this->getPath();
        if ($cookiePath === '/' || $cookiePath === $requestPath) {
            return true;
        }
        if (0 !== strpos($requestPath, $cookiePath)) {
            return false;
        }
        if (substr($cookiePath, -1, 1) === '/') {
            return true;
        }
        return substr($requestPath, strlen($cookiePath), 1) === '/';
    }

    public function getPath()
    {
        return $this->data['Path'];
    }

    public function matchesDomain($domain)
    {
        $cookieDomain = ltrim($this->getDomain(), '.');
        if (!$cookieDomain || !strcasecmp($domain, $cookieDomain)) {
            return true;
        }
        if (filter_var($domain, FILTER_VALIDATE_IP)) {
            return false;
        }
        return (bool)preg_match('/\.' . preg_quote($cookieDomain, '/') . '$/', $domain);
    }

    public function getDomain()
    {
        return $this->data['Domain'];
    }

    public function isExpired()
    {
        return $this->getExpires() !== null && time() > $this->getExpires();
    }

    public function validate()
    {
        $name = $this->getName();
        if (empty($name) && !is_numeric($name)) {
            return 'The cookie name must not be empty';
        }
        if (preg_match('/[\x00-\x20\x22\x28-\x29\x2c\x2f\x3a-\x40{\x7d\x7f]/', $name)) {
            return 'Cookie name must not contain invalid characters: ASCII ' . 'Control characters (0-31;127), space, tab and the ' . 'following characters: ()<>@,;:\"/?={}';
        }
        $value = $this->getValue();
        if (empty($value) && !is_numeric($value)) {
            return 'The cookie value must not be empty';
        }
        $domain = $this->getDomain();
        if (empty($domain) && !is_numeric($domain)) {
            return 'The cookie domain must not be empty';
        }
        return true;
    }

    public function getName()
    {
        return $this->data['Name'];
    }

    public function getValue()
    {
        return $this->data['Value'];
    }
}
