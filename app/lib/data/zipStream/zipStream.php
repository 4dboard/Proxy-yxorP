<?php namespace yxorP\app\lib\zipStream;

use yxorP\app\lib\zipStream\exception\fileNotFoundException;
use yxorP\app\lib\zipStream\exception\fileNotReadableException;
use yxorP\app\lib\zipStream\exception\invalidOptionException;
use yxorP\app\lib\zipStream\exception\streamNotReadableException;

class zipStream
{
    const VERSION = '0.3.0';
    const METHOD_STORE = 'store';
    const METHOD_DEFLATE = 'deflate';
    const COMPRESS = 0x08;
    const NOCOMPRESS = 0x00;
    const OPTION_LARGE_FILE_SIZE = 'large_file_size';
    const OPTION_LARGE_FILE_METHOD = 'large_file_method';
    const OPTION_SEND_HTTP_HEADERS = 'send_http_headers';
    const OPTION_HTTP_HEADER_CALLBACK = 'http_header_callback';
    const OPTION_OUTPUT_STREAM = 'output_stream';
    const OPTION_CONTENT_TYPE = 'content_type';
    const OPTION_CONTENT_DISPOSITION = 'content_disposition';
    public $opt = array();
    public $files = array();
    public $cdr_ofs = 0;
    public $ofs = 0;
    protected $need_headers;
    protected $output_name;

    public function __construct($name = null, $opt = array())
    {
        $defaults = array(self::OPTION_LARGE_FILE_SIZE => 20 * 1024 * 1024, self::OPTION_LARGE_FILE_METHOD => self::METHOD_STORE, self::OPTION_SEND_HTTP_HEADERS => false, self::OPTION_HTTP_HEADER_CALLBACK => 'header',);
        $this->opt = array_merge($defaults, $opt);
        if (!isset($this->opt[self::OPTION_OUTPUT_STREAM])) {
            $this->opt[self::OPTION_OUTPUT_STREAM] = fopen('php://output', 'w');
        }
        $this->output_name = $name;
        $this->need_headers = $name || $this->opt[self::OPTION_SEND_HTTP_HEADERS];
    }

    public function addFileFromPath($name, $path, $opt = array(), $storage_method = "deflate")
    {
        if (!is_readable($path)) {
            if (!file_exists($path)) {
                throw new fileNotFoundException($path);
            }
            throw new fileNotReadableException($path);
        }
        if ($this->isLargeFile($path)) {
            $this->addLargeFile($name, $path, $opt);
        } else {
            $data = file_get_contents($path);
            $this->addFile($name, $data, $opt, $storage_method);
        }
    }

    protected function isLargeFile($path)
    {
        $st = stat($path);
        return ($this->opt[self::OPTION_LARGE_FILE_SIZE] > 0) && ($st['size'] > $this->opt[self::OPTION_LARGE_FILE_SIZE]);
    }

    protected function addLargeFile($name, $path, $opt = array())
    {
        $st = stat($path);
        $block_size = 1048576;
        $algo = 'crc32b';
        $zlen = $len = $st['size'];
        $meth_str = $this->opt[self::OPTION_LARGE_FILE_METHOD];
        if ($meth_str == self::METHOD_STORE) {
            $meth = 0x00;
            $crc = hexdec(hash_file($algo, $path));
        } elseif ($meth_str == self::METHOD_DEFLATE) {
            $meth = 0x08;
            $fh = fopen($path, 'rb');
            $hash_ctx = hash_init($algo);
            $zlen = 0;
            while (!feof($fh)) {
                $data = fread($fh, $block_size);
                hash_update($hash_ctx, $data);
            }
            rewind($fh);
            $filter = stream_filter_append($fh, 'zlib.deflate', STREAM_FILTER_READ, 6);
            while (!feof($fh)) {
                $data = fread($fh, $block_size);
                $zlen += strlen($data);
            }
            stream_filter_remove($filter);
            fclose($fh);
            $crc = hexdec(hash_final($hash_ctx));
        } else {
            throw new invalidOptionException('large_file_method', array(self::METHOD_STORE, self::METHOD_DEFLATE), $meth_str);
        }
        $num_bytes_written = $this->addFileHeader($name, $opt, $meth, $crc, $zlen, $len);
        $num_bytes_written += $zlen;
        $this->addToCdr($name, $opt, $meth, $crc, $zlen, $len, $num_bytes_written);
        $fh = fopen($path, 'rb');
        if ($meth_str == self::METHOD_DEFLATE) {
            $filter = stream_filter_append($fh, 'zlib.deflate', STREAM_FILTER_READ, 6);
        }
        while (!feof($fh)) {
            $data = fread($fh, $block_size);
            $this->send($data);
        }
        if (isset($filter) && is_resource($filter)) {
            stream_filter_remove($filter);
        }
        fclose($fh);
    }

    protected function addFileHeader($name, &$opt, $meth, $crc, $zlen, $len, $genb = 0x00)
    {
        $name = preg_replace('/^\\/+/', '', $name);
        $nlen = strlen($name);
        $opt['time'] = isset($opt['time']) && !empty($opt['time']) ? $opt['time'] : time();
        $dts = $this->dostime($opt['time']);
        if (mb_check_encoding($name, "UTF-8") && !mb_check_encoding($name, "ASCII")) {
            $genb |= 0x0800;
        }
        $fields = array(array('V', 0x04034b50), array('v', 0x000A), array('v', $genb), array('v', $meth), array('V', $dts), array('V', $crc), array('V', $zlen), array('V', $len), array('v', $nlen), array('v', 0));
        $ret = $this->packFields($fields);
        $header = $ret . $name;
        $num_bytes_written = strlen($header);
        $this->send($header);
        return $num_bytes_written;
    }

    protected final function dostime($when)
    {
        $d = getdate($when);
        if ($d['year'] < 1980) {
            $d = array('year' => 1980, 'mon' => 1, 'mday' => 1, 'hours' => 0, 'minutes' => 0, 'seconds' => 0);
        }
        $d['year'] -= 1980;
        return ($d['year'] << 25) | ($d['mon'] << 21) | ($d['mday'] << 16) | ($d['hours'] << 11) | ($d['minutes'] << 5) | ($d['seconds'] >> 1);
    }

    protected function packFields($fields)
    {
        list($fmt, $args) = array('', array());
        foreach ($fields as $field) {
            $fmt .= $field[0];
            $args[] = $field[1];
        }
        array_unshift($args, $fmt);
        return call_user_func_array('pack', $args);
    }

    protected function send($str)
    {
        if ($this->need_headers) {
            $this->sendHttpHeaders();
        }
        $this->need_headers = false;
        fwrite($this->opt[self::OPTION_OUTPUT_STREAM], $str);
    }

    protected function sendHttpHeaders()
    {
        $opt = $this->opt;
        $content_type = 'application/x-zip';
        if (isset($opt[self::OPTION_CONTENT_TYPE])) {
            $content_type = $this->opt[self::OPTION_CONTENT_TYPE];
        }
        $disposition = 'attachment';
        if (isset($opt[self::OPTION_CONTENT_DISPOSITION])) {
            $disposition = $opt[self::OPTION_CONTENT_DISPOSITION];
        }
        if ($this->output_name) {
            $disposition .= "; filename=\"{$this->output_name}\"";
        }
        $headers = array('Content-Type' => $content_type, 'Content-Disposition' => $disposition, 'Pragma' => 'public', 'Cache-Control' => 'public, must-revalidate', 'Content-Transfer-Encoding' => 'binary');
        $call = $this->opt[self::OPTION_HTTP_HEADER_CALLBACK];
        foreach ($headers as $key => $val) {
            $call("$key: $val");
        }
    }

    private function addToCdr($name, $opt, $meth, $crc, $zlen, $len, $rec_len, $genb = 0x00)
    {
        $this->files[] = array($name, $opt, $meth, $crc, $zlen, $len, $this->ofs, $genb);
        $this->ofs += $rec_len;
    }

    public function addFile($name, $data, $opt = array(), $storage_method = 'deflate')
    {
        $meth = $this->getStorageConstant($storage_method);
        $zdata = $meth == self::COMPRESS ? gzdeflate($data) : $data;
        $crc = crc32($data);
        $zlen = strlen($zdata);
        $len = strlen($data);
        $num_bytes_written = $this->addFileHeader($name, $opt, $meth, $crc, $zlen, $len);
        $num_bytes_written += $zlen;
        $this->addToCdr($name, $opt, $meth, $crc, $zlen, $len, $num_bytes_written);
        $this->send($zdata);
    }

    protected function getStorageConstant($storage_method)
    {
        return $storage_method == self::METHOD_STORE ? self::NOCOMPRESS : self::COMPRESS;
    }

    public function addFileFromStream($name, $stream, $opt = array(), $storage_method = self::METHOD_DEFLATE)
    {
        $block_size = 1048576;
        $algo = 'crc32b';
        $meth = $this->getStorageConstant($storage_method);
        $genb = 0x08;
        $crc = $zlen = $len = 0;
        $hash_ctx = hash_init($algo);
        if ($storage_method == self::METHOD_DEFLATE) {
            $deflateCtx = deflate_init(ZLIB_ENCODING_RAW, ['level' => 6]);
        } else {
            $deflateCtx = null;
        }
        $num_bytes_written = $this->addFileHeader($name, $opt, $meth, $crc, $zlen, $len, $genb);
        $readError = false;
        while (!feof($stream)) {
            $data = fread($stream, $block_size);
            if ($data === false) {
                $readError = true;
                break;
            }
            if ($deflateCtx !== null) {
                $zdata = deflate_add($deflateCtx, $data, ZLIB_NO_FLUSH);
            } else {
                $zdata = $data;
            }
            $this->send($zdata);
            hash_update($hash_ctx, $data);
            $len += strlen($data);
            $zlen += strlen($zdata);
        }
        if ($deflateCtx !== null) {
            $zdata = deflate_add($deflateCtx, '', ZLIB_FINISH);
            $zlen += strlen($zdata);
            $this->send($zdata);
        }
        $crc = hexdec(hash_final($hash_ctx));
        $data_descriptor_len = $this->addDataDescriptorHeader($len, $zlen, $crc);
        $num_bytes_written += $zlen + $data_descriptor_len;
        $this->addToCdr($name, $opt, $meth, $crc, $zlen, $len, $num_bytes_written, $genb);
        if ($readError) {
            throw new streamNotReadableException($name);
        }
    }

    protected function addDataDescriptorHeader($len, $zlen, $crc)
    {
        $fields = array(array('V', 0x08074b50), array('V', $crc), array('V', $zlen), array('V', $len),);
        $ret = $this->packFields($fields);
        $num_bytes_written = strlen($ret);
        $this->send($ret);
        return $num_bytes_written;
    }

    public function finish()
    {
        $this->addCdr($this->opt);
        $this->clear();
    }

    protected function addCdr($opt = null)
    {
        foreach ($this->files as $file) {
            $this->addCdrFile($file);
        }
        $this->addCdrEof($opt);
    }

    protected function addCdrFile($args)
    {
        list($name, $opt, $meth, $crc, $zlen, $len, $ofs, $genb) = $args;
        $comment = isset($opt['comment']) && !empty($opt['comment']) ? $opt['comment'] : '';
        $dts = $this->dostime($opt['time']);
        if (mb_check_encoding($name, "UTF-8") && !mb_check_encoding($name, "ASCII")) {
            $genb |= 0x0800;
        }
        $fields = array(array('V', 0x02014b50), array('v', 0x003F), array('v', 0x0014), array('v', $genb), array('v', $meth), array('V', $dts), array('V', $crc), array('V', $zlen), array('V', $len), array('v', strlen($name)), array('v', 0), array('v', strlen($comment)), array('v', 0), array('v', 0), array('V', 32), array('V', $ofs));
        $ret = $this->packFields($fields) . $name . $comment;
        $this->send($ret);
        $this->cdr_ofs += strlen($ret);
    }

    protected function addCdrEof($opt = null)
    {
        $num = count($this->files);
        $cdr_len = $this->cdr_ofs;
        $cdr_ofs = $this->ofs;
        $comment = '';
        if ($opt && isset($opt['comment'])) {
            $comment = $opt['comment'];
        }
        $fields = array(array('V', 0x06054b50), array('v', 0x00), array('v', 0x00), array('v', $num), array('v', $num), array('V', $cdr_len), array('V', $cdr_ofs), array('v', strlen($comment)));
        $ret = $this->packFields($fields) . $comment;
        $this->send($ret);
    }

    protected function clear()
    {
        $this->files = array();
        $this->ofs = 0;
        $this->cdr_ofs = 0;
        $this->opt = array();
    }
}
