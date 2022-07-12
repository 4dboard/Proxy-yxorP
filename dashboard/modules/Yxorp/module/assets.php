<?php
/**
 * This file is part of the yxorP project.
 *
 * (c) Artur Heinze - 🅰🅶🅴🅽🆃🅴🅹🅾, http://agentejo.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$this->module('yxorp')->extend([

    'listAssets' => function($options = []) {
        $this->app->trigger('yxorp.assets.find', [&$options]);
        $assets = $this->app->storage->find('yxorp/assets', $options)->toArray();
        $total  = (!isset($options['skip']) && !isset($options['limit']))
                   ? count($assets)
                   : $this->app->storage->count('yxorp/assets', ($options['filter'] ?? null));

        $this->app->trigger('yxorp.assets.list', [$assets]);

        return compact('assets', 'total');
    },

    'saveAssets' => function($files, $meta = [], $update = false) use($app) {

        $files     = isset($files[0]) ? $files : [$files];
        $finfo     = finfo_open(FILEINFO_MIME_TYPE);
        $assets    = [];
        $created   = time();

        foreach ($files as $idx => &$file) {

            // clean filename
            $name = basename($file);

            // clean filename
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $ext = pathinfo($file, PATHINFO_EXTENSION);
            $cleanFilename = preg_replace('/[^a-zA-Z0-9-_\.]/','', str_replace(' ', '-', $filename));
            $clean = $cleanFilename.uniqid("_uid_").'.'.$ext;
            $path  = '/'.date('Y/m/d').'/'.$clean;

            $asset = [
                'path' => $path,
                'title' => $name,
                'mime' => finfo_file($finfo, $file),
                'description' => '',
                'tags' => [],
                'size' => filesize($file),
                'image' => preg_match('/\.(jpg|jpeg|png|gif|svg|webp)$/i', $file) ? true:false,
                'video' => preg_match('/\.(mp4|mov|ogv|webv|wmv|flv|avi)$/i', $file) ? true:false,
                'audio' => preg_match('/\.(mp3|weba|ogg|wav|flac)$/i', $file) ? true:false,
                'archive' => preg_match('/\.(zip|rar|7zip|gz|tar)$/i', $file) ? true:false,
                'document' => preg_match('/\.(txt|htm|html|pdf|md)$/i', $file) ? true:false,
                'code' => preg_match('/\.(htm|html|php|css|less|js|json|md|markdown|yaml|xml|htaccess)$/i', $file) ? true:false,
                'colors' => null,
                'width' => null,
                'height' => null,
                'created' => $created,
                'modified' => $created,
                '_by' => $this->app->module('yxorp')->getUser('_id')
            ];

            if (!$asset['mime']) {
                $asset['mime'] = 'unknown';
            }

            if ($asset['mime'] == 'image/svg') {
                $asset['mime'] = 'image/svg+xml';
            }

            if ($asset['image'] && !preg_match('/\.svg$/i', $file)) {

                $info = getimagesize($file);
                $asset['width']  = $info[0];
                $asset['height'] = $info[1];
                $asset['colors'] = [];

                if ($asset['width'] && $asset['height']) {

                    try {
                        $asset['colors'] = \ColorThief\ColorThief::getPalette($file, 5, ceil(($asset['width'] * $asset['height']) / 10000));
                    } catch (\Exception $e) {
                        $asset['colors'] = [];
                    }

                    foreach ($asset['colors'] as &$color) {
                        $color = sprintf("#%02x%02x%02x", $color[0], $color[1], $color[2]);
                    }
                }
            }

            $opts  = ['mimetype' => $asset['mime']];
            $_meta = isset($meta[$idx]) && is_array($meta[$idx]) ? $meta[$idx] : $meta;

            $this->app->trigger('yxorp.asset.upload', [&$asset, &$_meta, &$opts, &$file, &$path]);

            if (!$asset) {
                continue;
            }

            // move file
            $stream = fopen($file, 'r+');
            $this->app->filestorage->writeStream("assets://{$path}", $stream, $opts);

            if (is_resource($stream)) {
                fclose($stream);
            }

            foreach ($_meta as $key => $val) {
                $asset[$key] = $val;
            }

            $this->app->trigger('yxorp.asset.save', [&$asset]);

            $assets[] = $asset;
        }

        if (count($assets)) {
            $this->app->trigger('yxorp.assets.save', [&$assets]);

            if ($update) {
                foreach ($assets as $asset) {
                    $this->app->storage->save('yxorp/assets', $asset);
                }
            } else {
                $this->app->storage->insert('yxorp/assets', $assets);
            }

        }

        return $assets;
    },

    'uploadAssets' => function($param = 'files', $meta = []) {

        $files = [];

        if (is_string($param) && isset($_FILES[$param])) {
            $files = $_FILES[$param];
        } elseif (is_array($param) && isset($param['name'], $param['error'], $param['tmp_name'])) {
            $files = $param;
        }

        $uploaded  = [];
        $failed    = [];
        $_files    = [];
        $assets    = [];

        $allowed   = $this->getGroupVar('assets.allowed_uploads', $this->app->retrieve('allowed_uploads', '*'));
        $allowed   = $allowed == '*' ? true : str_replace([' ', ','], ['', '|'], preg_quote(is_array($allowed) ? implode(',', $allowed) : $allowed));
        $max_size = $this->getGroupVar('assets.max_upload_size', $this->app->retrieve('max_upload_size', 0));

        if (isset($files['name']) && is_array($files['name'])) {

            for ($i = 0; $i < count($files['name']); $i++) {

                $_file  = $this->app->path('#tmp:').'/'.$files['name'][$i];
                $_isAllowed = $allowed === true ? true : preg_match("/\.({$allowed})$/i", $_file);
                $_sizeAllowed = $max_size ? filesize($files['tmp_name'][$i]) < $max_size : true;

                if (!$files['error'][$i] && $_isAllowed && $_sizeAllowed && move_uploaded_file($files['tmp_name'][$i], $_file)) {

                    $_files[]   = $_file;
                    $uploaded[] = $files['name'][$i];

                    if (\preg_match('/\.(svg|xml)$/i', $_file)) {
                        file_put_contents($_file, \SVGSanitizer::clean(\file_get_contents($_file)));
                    }

                } else {
                    $failed[] = $files['name'][$i];
                }
            }
        }

        if (count($_files)) {

            $assets = $this->saveAssets($_files, $meta);

            foreach ($_files as $file) {
                unlink($file);
            }
        }

        return ['uploaded' => $uploaded, 'failed' => $failed, 'assets' => $assets];
    },

    'updateAssetFile' => function($param = 'file', $asset = null) {

        $allowed   = $this->getGroupVar('assets.allowed_uploads', $this->app->retrieve('allowed_uploads', '*'));
        $allowed   = $allowed == '*' ? true : str_replace([' ', ','], ['', '|'], preg_quote(is_array($allowed) ? implode(',', $allowed) : $allowed));
        $max_size = $this->getGroupVar('assets.max_upload_size', $this->app->retrieve('max_upload_size', 0));

        $file = $_FILES[$param] ?? null;

        if (!$file) {
            return false;
        }

        $_file  = $this->app->path('#tmp:').'/'.$file['name'];
        $_isAllowed = $allowed === true ? true : preg_match("/\.({$allowed})$/i", $_file);
        $_sizeAllowed = $max_size ? filesize($file['tmp_name']) < $max_size : true;

        if (!$file['error'] && $_isAllowed && $_sizeAllowed && move_uploaded_file($file['tmp_name'], $_file)) {

            if (\preg_match('/\.(svg|xml)$/i', $_file)) {
                file_put_contents($_file, \SVGSanitizer::clean(\file_get_contents($_file)));
            }

            $_asset = $this->saveAssets([$_file], [
                '_id' => $asset['_id'],
                'title' => $asset['title'],
                'description' => $asset['description'],
                'tags' => $asset['tags'],
                'created' => $asset['created'],
            ], true)[0];

            unlink($_file);

            $this->app->trigger('yxorp.assets.updatefile', [$_asset, $asset]);

            return $_asset;
        }

        return false;
    },

    'removeAssets' => function($assets) {

        $assets = isset($assets[0]) ? $assets : [$assets];

        foreach ($assets as &$asset) {

            if (!isset($asset['_id'])) continue;

            if (!isset($asset['path'])) {
                $asset = $this->app->storage->findOne('yxorp/assets', ['_id' => $asset['_id']]);
            }

            if (!$asset) continue;

            $this->app->storage->remove('yxorp/assets', ['_id' => $asset['_id']]);

            if ($this->app->filestorage->has('assets://'.trim($asset['path'], '/'))) {
                $this->app->filestorage->delete('assets://'.trim($asset['path'], '/'));
            }
        }

        $this->app->trigger('yxorp.assets.remove', [$assets]);

        return $assets;
    },

    'updateAssets' => function($assets) {

        $assets = isset($assets[0]) ? $assets : [$assets];

        foreach ($assets as &$asset) {

            $_asset = $this->app->storage->findOne('yxorp/assets', ['_id' => $asset['_id']]);

            if (!$_asset) continue;

            $asset['modified'] = time();
            $asset['_by'] = $this->app->module('yxorp')->getUser('_id');

            $this->app->trigger('yxorp.asset.save', [&$asset]);

            $this->app->storage->save('yxorp/assets', $asset);

        }

        return $assets;
    }
]);
