<?php /* yxorP */

use JetBrains\PhpStorm\ArrayShape;

class cache_files extends BaseCache implements cache_driver
{
    public function __construct($config = array())
    {
        $this->setup($config);
        $this->getPath();

        if (!$this->checkdriver() && !isset($config['skipError'])) {
            throw new cacheDriverException("Can't use this driver for your website!");
        }

    }

    public function checkdriver(): bool
    {
        if (is_writable($this->getPath())) {
            return true;
        }
        return false;
    }

    public function driver_set($keyword, $value = "", $time = 300, $option = array()): bool
    {
        $file_path = $this->getFilePath($keyword);
        $tmp_path = $file_path . ".tmp";

        $data = $this->encode($value);

        $toWrite = true;

        if (isset($option['skipExisting']) && $option['skipExisting'] === true && file_exists($file_path)) {
            $content = $this->readfile($file_path);
            $old = $this->decode($content);
            $toWrite = false;
            if ($this->isExpired($old)) {
                $toWrite = true;
            }
        }

        $written = true;

        if ($toWrite === true && !file_exists($tmp_path) && !file_exists($file_path)) {
            try {
                $f = fopen($file_path, 'wb+');
                fwrite($f, $data);
                fclose($f);
            } catch (Exception $e) {

                $written = false;
            }
        }
        return $written;
    }

    private function getFilePath($keyword, $skip = false): string
    {
        $path = $this->getPath();

        $filename = $this->encodeFilename($keyword);
        $folder = substr($filename, 0, 2);
        $path = rtrim($path, "/") . "/" . $folder;

        if (($skip === false) && !file_exists($path) && !mkdir($path, $this->__setChmodAuto()) && !is_dir($path)) {
            throw new cacheDriverException("PLEASE CHMOD " . $this->getPath() . " - 0777 OR ANY WRITABLE PERMISSION!", 92);
        }

        return $path . "/" . $filename . ".txt";
    }

    private function encodeFilename($keyword): string
    {
        return trim(trim(preg_replace("/[^a-zA-Z0-9]+/", "_", $keyword), "_"));

    }

    public function isExpired($object): ?bool
    {
        return isset($object['expired_time']) && time() >= $object['expired_time'];
    }

    public function driver_get($keyword, $option = array())
    {

        $file_path = $this->getFilePath($keyword);
        if (!file_exists($file_path)) {
            return null;
        }

        $content = $this->readfile($file_path);
        $object = $this->decode($content);
        if ($this->isExpired($object)) {
            @unlink($file_path);
            $this->auto_clean_expired();
            return null;
        }

        return $object;
    }

    public function auto_clean_expired(): void
    {
        $autoclean = $this->get("keyword_clean_up_driver_files");
        if ($autoclean === null) {
            $this->set("keyword_clean_up_driver_files", 3600 * 24);
            $res = $this->stats();
        }
    }

    public function driver_delete($keyword, $option = array()): bool
    {
        $file_path = $this->getFilePath($keyword, true);
        return file_exists($file_path) && @unlink($file_path);
    }

    #[ArrayShape(["info" => "string", "size" => "string", "data" => "array|string", 'info' => "array", 'size' => "int"])] public function driver_stats($option = array()): array
    {
        $res = array(
            "info" => "",
            "size" => "",
            "data" => "",
        );

        $path = $this->getPath();
        $dir = @opendir($path);
        if (!$dir) {
            throw new cacheDriverException("Can't read PATH:" . $path, 94);
        }

        $total = 0;
        $removed = 0;
        while ($file = readdir($dir)) {
            if ($file !== "." && $file !== ".." && is_dir($path . "/" . $file)) {

                $subdir = opendir($path . "/" . $file);
                if (!$subdir) {
                    throw new cacheDriverException("Can't read path:" . $path . "/" . $file, 93);
                }

                while ($f = readdir($subdir)) {
                    if ($f !== "." && $f !== "..") {
                        $file_path = $path . "/" . $file . "/" . $f;
                        $size = filesize($file_path);
                        $object = $this->decode($this->readfile($file_path));

                        if (!str_contains($f, ".")) {
                            $key = $f;
                        } else {

                            $key = explode(".", $f);
                            $key = $key[0];
                        }
                        $content[$key] = array(
                            "size" => $size,
                            "write_time" => $object["write_time"],
                        );
                        if ($this->isExpired($object)) {
                            @unlink($file_path);
                            $removed += $size;
                        }
                        $total += $size;
                    }
                }
            }
        }

        $res['size'] = $total - $removed;
        $res['info'] = array(
            "Total [bytes]" => $total,
            "Expired and removed [bytes]" => $removed,
            "Current [bytes]" => $res['size'],
        );
        $res["data"] = $content;
        return $res;
    }

    public function driver_clean($option = array())
    {

        $path = $this->getPath();
        $dir = @opendir($path);
        if (!$dir) {
            throw new cacheDriverException("Can't read PATH:" . $path, 94);
        }

        while ($file = readdir($dir)) {
            if ($file !== "." && $file !== ".." && is_dir($path . "/" . $file)) {

                $subdir = @opendir($path . "/" . $file);
                if (!$subdir) {
                    throw new cacheDriverException("Can't read path:" . $path . "/" . $file,
                        93);
                }

                while ($f = readdir($subdir)) {
                    if ($f !== "." && $f !== "..") {
                        $file_path = $path . "/" . $file . "/" . $f;
                        @unlink($file_path);
                    }
                }
            }
        }

    }

    public function driver_isExisting($keyword): ?bool
    {
        $file_path = $this->getFilePath($keyword, true);
        if (!file_exists($file_path)) {
            return false;
        }

// check expired or not
        $value = $this->get($keyword);

        return !($value === null);
    }

}
