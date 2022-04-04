<?php /* yxorP */

class SSDBException extends Exception
{
}

class SSDBTimeoutException extends SSDBException
{
}

class SimpleSSDB extends SSDB
{

    public function __construct($host, $port, $timeout_ms = 2000)
    {
        parent::__construct($host, $port, $timeout_ms);
        $this->easy();
    }
}

class SSDB_Response
{
    public $cmd;
    public mixed $code;
    public mixed $data;
    public mixed $message;

    public function __construct($code = 'ok', $data_or_message = null)
    {
        $this->code = $code;
        if ($code === 'ok') {
            $this->data = $data_or_message;
        } else {
            $this->message = $data_or_message;
        }
    }

    public function __toString()
    {
        if ($this->code === 'ok') {
            $s = $this->data === null ? '' : json_encode($this->data, JSON_THROW_ON_ERROR);
        } else {
            $s = $this->message;
        }
        return sprintf('%-13s %12s %s', $this->cmd, $this->code, $s);
    }

    public function ok(): bool
    {
        return $this->code === 'ok';
    }

    public
    function not_found(): bool
    {
        return $this->code === 'not_found';
    }
}

class SSDB
{
    public const STEP_SIZE = 0;
    public const STEP_DATA = 1;
    public $sock;
    public $last_resp;
    public array $resp = array();
    public $step;
    public $block_size;
    private $async_auth_password;

    private string|bool $recv_buf;
    private $debug;
    private bool $_closed;
    private array $batch_cmds;
    private bool $batch_mode;
    private bool $_easy;

    public function __construct($host, $port, $timeout_ms = 2000)
    {
        $timeout_f = (float)$timeout_ms / 1000;
        $this->sock = @stream_socket_client("$host:$port", $errno, $errstr, $timeout_f);
        if (!$this->sock) {
            throw new SSDBException("$errno: $errstr");
        }
        $timeout_sec = (int)($timeout_ms / 1000);
        $timeout_usec = ($timeout_ms - $timeout_sec * 1000) * 1000;
        @stream_set_timeout($this->sock, $timeout_sec, $timeout_usec);
        if (function_exists('stream_set_chunk_size')) {
            @stream_set_chunk_size($this->sock, 1024 * 1024);
        }
    }

    public function set_timeout($timeout_ms): void
    {
        $timeout_sec = (int)($timeout_ms / 1000);
        $timeout_usec = ($timeout_ms - $timeout_sec * 1000) * 1000;
        @stream_set_timeout($this->sock, $timeout_sec, $timeout_usec);
    }

    public function easy(): void
    {
        $this->_easy = true;
    }

    public function closed(): bool
    {
        return $this->_closed;
    }

    public function multi(): SSDB
    {
        return $this->batch();
    }

    public function batch(): SSDB
    {
        $this->batch_mode = true;
        $this->batch_cmds = array();
        return $this;
    }

    public function exec(): array
    {
        $ret = array();
        foreach ($this->batch_cmds as $op) {
            [$cmd, $params] = $op;
            try {
                $this->send_req($cmd, $params);
            } catch (SSDBException $e) {
            }
        }
        foreach ($this->batch_cmds as $op) {
            [$cmd, $params] = $op;
            $resp = $this->recv_resp($cmd, $params);
            $resp = $this->check_easy_resp($cmd, $resp);
            $ret[] = $resp;
        }
        $this->batch_mode = false;
        $this->batch_cmds = array();
        return $ret;
    }

    private function send_req($cmd, $params): int|bool
    {
        $req = array($cmd);
        foreach ($params as $p) {
            if (is_array($p)) {
                $req = array_merge($req, $p);
            } else {
                $req[] = $p;
            }
        }
        return $this->send($req);
    }

    private function send($data): bool|int
    {
        $ps = array();
        foreach ($data as $p) {
            $ps[] = strlen($p);
            $ps[] = $p;
        }
        $s = implode("\n", $ps) . "\n\n";
        if ($this->debug) {
            echo '> ' . str_replace(array("\r", "\n"), array('\r', '\n'), $s) . "\n";
        }
        try {
            while (true) {
                $ret = @fwrite($this->sock, $s);
                if ($ret === false || $ret === 0) {
                    $this->close();
                    throw new SSDBException('Connection lost');
                }
                $s = substr($s, $ret);
                if ($s === '') {
                    break;
                }
                @fflush($this->sock);
            }
        } catch (Exception $e) {
            $this->close();
            throw new SSDBException($e->getMessage());
        }
        return $ret;
    }

    public function close(): void
    {
        if (!$this->_closed) {
            @fclose($this->sock);
            $this->_closed = true;
            $this->sock = null;
        }
    }

    private function recv_resp($cmd, $params): SSDB_Response
    {
        try {
            $resp = $this->recv();
        } catch (SSDBTimeoutException|SSDBException $e) {
        }
        if ($resp === false) {
            return new SSDB_Response('error', 'Unknown error');
        }

        if ($resp[0] === 'noauth') {
            $errmsg = $resp[1] ?? '';
            return new SSDB_Response($resp[0], $errmsg);
        }
        switch ($cmd) {
            case 'dbsize':
            case 'ping':
            case 'qset':
            case 'getbit':
            case 'setbit':
            case 'countbit':
            case 'strlen':
            case 'set':
            case 'setx':
            case 'setnx':
            case 'zset':
            case 'hset':
            case 'qpush':
            case 'qpush_front':
            case 'qpush_back':
            case 'qtrim_front':
            case 'qtrim_back':
            case 'del':
            case 'zdel':
            case 'hdel':
            case 'hsize':
            case 'zsize':
            case 'qsize':
            case 'hclear':
            case 'zclear':
            case 'qclear':
            case 'multi_set':
            case 'multi_del':
            case 'multi_hset':
            case 'multi_hdel':
            case 'multi_zset':
            case 'multi_zdel':
            case 'incr':
            case 'decr':
            case 'zincr':
            case 'zdecr':
            case 'hincr':
            case 'hdecr':
            case 'zget':
            case 'zrank':
            case 'zrrank':
            case 'zcount':
            case 'zsum':
            case 'zremrangebyrank':
            case 'zremrangebyscore':
            case 'ttl':
            case 'expire':
                if ($resp[0] === 'ok') {
                    $val = isset($resp[1]) ? (int)$resp[1] : 0;
                    return new SSDB_Response($resp[0], $val);
                }

                $errmsg = $resp[1] ?? '';
                return new SSDB_Response($resp[0], $errmsg);
            case 'zavg':
                if ($resp[0] === 'ok') {
                    $val = isset($resp[1]) ? (float)$resp[1] : 0.0;
                    return new SSDB_Response($resp[0], $val);
                }

                $errmsg = $resp[1] ?? '';
                return new SSDB_Response($resp[0], $errmsg);
            case 'get':
            case 'substr':
            case 'getset':
            case 'hget':
            case 'qget':
            case 'qfront':
            case 'qback':
                if ($resp[0] === 'ok') {
                    if (count($resp) === 2) {
                        return new SSDB_Response('ok', $resp[1]);
                    }

                    return new SSDB_Response('server_error', 'Invalid response');
                }

                $errmsg = $resp[1] ?? '';
                return new SSDB_Response($resp[0], $errmsg);
            case 'qpop':
            case 'qpop_front':
            case 'qpop_back':
                if ($resp[0] === 'ok') {
                    $size = 1;
                    if (isset($params[1])) {
                        $size = (int)$params[1];
                    }
                    if ($size <= 1) {
                        if (count($resp) === 2) {
                            return new SSDB_Response('ok', $resp[1]);
                        }

                        return new SSDB_Response('server_error', 'Invalid response');
                    }

                    $data = array_slice($resp, 1);
                    return new SSDB_Response('ok', $data);
                }

                $errmsg = $resp[1] ?? '';
                return new SSDB_Response($resp[0], $errmsg);
            case 'keys':
            case 'zkeys':
            case 'hkeys':
            case 'hlist':
            case 'zlist':
            case 'qslice':
                if ($resp[0] === 'ok')
                    return new SSDB_Response($resp[0], array_slice($resp, 1));

                $errmsg = $resp[1] ?? '';
                return new SSDB_Response($resp[0], $errmsg);
            case 'auth':
            case 'exists':
            case 'hexists':
            case 'zexists':
                if ($resp[0] === 'ok') {
                    if (count($resp) === 2) {
                        return new SSDB_Response('ok', (bool)$resp[1]);
                    }

                    return new SSDB_Response('server_error', 'Invalid response');
                }

                $errmsg = $resp[1] ?? '';
                return new SSDB_Response($resp[0], $errmsg);
            case 'multi_exists':
            case 'multi_hexists':
            case 'zpop_back':
            case 'zpop_front':
            case 'multi_zexists':
                if ($resp[0] === 'ok') {
                    if (count($resp) % 2 === 1) {
                        $data = array();
                        return new SSDB_Response('ok', $data);
                    }

                    return new SSDB_Response('server_error', 'Invalid response');
                }

                $errmsg = $resp[1] ?? '';
                return new SSDB_Response($resp[0], $errmsg);
            case 'scan':
            case 'rscan':
            case 'zscan':
            case 'zrscan':
            case 'zrange':
            case 'zrrange':
            case 'hscan':
            case 'hrscan':
            case 'hgetall':
            case 'multi_hsize':
            case 'multi_zsize':
            case 'multi_get':
            case 'multi_hget':
            case 'multi_zget':
                if ($resp[0] === 'ok') {
                    if (count($resp) % 2 === 1) {
                        $data = array();
                        return new SSDB_Response('ok', $data);
                    }

                    return new SSDB_Response('server_error', 'Invalid response');
                }

                $errmsg = $resp[1] ?? '';
                return new SSDB_Response($resp[0], $errmsg);
            default:
                return new SSDB_Response($resp[0], array_slice($resp, 1));
        }
        return new SSDB_Response('error', 'Unknown command: $cmd');
    }

    private function recv(): array
    {
        $this->step = self::STEP_SIZE;
        while (true) {
            $ret = $this->parse();
            if ($ret === null) {
                try {
                    $data = @fread($this->sock, 1024 * 1024);
                    if ($this->debug) {
                        echo '< ' . str_replace(array("\r", "\n"), array('\r', '\n'), $data) . "\n";
                    }
                } catch (Exception $e) {
                    $data = '';
                }
                if ($data === false || $data === '') {
                    if (feof($this->sock)) {
                        $this->close();
                        throw new SSDBException('Connection lost');
                    }

                    throw new SSDBTimeoutException('Connection timeout');
                }
                $this->recv_buf .= $data;
#				echo "read " . strlen($data) . " total: " . strlen($this->recv_buf) . "\n";
            } else {
                return $ret;
            }
        }
    }

    private function parse(): array|null
    {
        $spos = 0;
        $epos = 0;
        $buf_size = strlen($this->recv_buf);
        while (true) {
            $spos = $epos;
            if ($this->step === self::STEP_SIZE) {
                $epos = strpos($this->recv_buf, "\n", $spos);
                if ($epos === false) {
                    break;
                }
                ++$epos;
                $line = substr($this->recv_buf, $spos, $epos - $spos);
                $spos = $epos;
                $line = trim($line);
                if ($line === '') {
                    $this->recv_buf = substr($this->recv_buf, $spos);
                    $ret = $this->resp;
                    $this->resp = array();
                    return $ret;
                }
                $this->block_size = (int)$line;
                $this->step = self::STEP_DATA;
            }
            if ($this->step === self::STEP_DATA) {
                $epos = $spos + $this->block_size;
                if ($epos <= $buf_size) {
                    $n = strpos($this->recv_buf, "\n", $epos);
                    if ($n !== false) {
                        $data = substr($this->recv_buf, $spos, $epos - $spos);
                        $this->resp[] = $data;
                        $epos = $n + 1;
                        $this->step = self::STEP_SIZE;
                        continue;
                    }
                }
                break;
            }
        }

        if ($spos > 0) {
            $this->recv_buf = substr($this->recv_buf, $spos);
        }
        return null;
    }

    private function check_easy_resp($cmd, $resp)
    {
        $this->last_resp = $resp;
        if ($this->_easy) {
            if ($resp->not_found()) {
                return NULL;
            }

            if (!$resp->ok() && !is_array($resp->data)) {
                return false;
            }

            return $resp->data;
        }

        $resp->cmd = $cmd;
        return $resp;
    }

    public function request()
    {
        $args = func_get_args();
        $cmd = array_shift($args);
        return $this->__call($cmd, $args);
    }

    public function __call($cmd, $params = array())
    {
        $cmd = strtolower($cmd);
        if ($this->async_auth_password !== null) {
            $pass = $this->async_auth_password;
            $this->async_auth_password = null;
            $auth = $this->__call('auth', array($pass));
            if ($auth !== true) {
                throw new RuntimeException("Authentication failed");
            }
        }
        if ($this->batch_mode) {
            $this->batch_cmds[] = array($cmd, $params);
            return $this;
        }
        if ($this->send_req($cmd, $params) === false) {
            $resp = new SSDB_Response('error', 'send error');
        } else {
            $resp = $this->recv_resp($cmd, $params);
        }
        if ($resp->code === 'noauth') {
            $msg = $resp->message;
            throw new RuntimeException($msg);
        }

        return $this->check_easy_resp($cmd, $resp);
    }

    public function auth($password): void
    {
        $this->async_auth_password = $password;
    }

    public function multi_set($kvs = array())
    {
        $args = array();
        foreach ($kvs as $k => $v) {
            $args[] = $k;
            $args[] = $v;
        }
        return $this->__call(__FUNCTION__, $args);
    }

    public function multi_hset($name, $kvs = array())
    {
        $args = array($name);
        foreach ($kvs as $k => $v) {
            $args[] = $k;
            $args[] = $v;
        }
        return $this->__call(__FUNCTION__, $args);
    }

    public function multi_zset($name, $kvs = array())
    {
        $args = array($name);
        foreach ($kvs as $k => $v) {
            $args[] = $k;
            $args[] = $v;
        }
        return $this->__call(__FUNCTION__, $args);
    }

    public function incr($key, $val = 1)
    {
        $args = func_get_args();
        return $this->__call(__FUNCTION__, $args);
    }

    public function decr($key, $val = 1)
    {
        $args = func_get_args();
        return $this->__call(__FUNCTION__, $args);
    }

    public function zincr($name, $key, $score = 1)
    {
        $args = func_get_args();
        return $this->__call(__FUNCTION__, $args);
    }

    public function zdecr($name, $key, $score = 1)
    {
        $args = func_get_args();
        return $this->__call(__FUNCTION__, $args);
    }

    public function zadd($key, $score, $value)
    {
        $args = array($key, $value, $score);
        return $this->__call('zset', $args);
    }

    public function zRevRank($name, $key)
    {
        $args = func_get_args();
        return $this->__call("zrrank", $args);
    }

    public function zRevRange($name, $offset, $limit)
    {
        $args = func_get_args();
        return $this->__call("zrrange", $args);
    }

    public function hincr($name, $key, $val = 1)
    {
        $args = func_get_args();
        return $this->__call(__FUNCTION__, $args);
    }

    public function hdecr($name, $key, $val = 1)
    {
        $args = func_get_args();
        return $this->__call(__FUNCTION__, $args);
    }
}