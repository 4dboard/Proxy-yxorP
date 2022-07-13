<?php
/**
 * This file is part of the yxorP project.
 *
 * (c) Artur Heinze - 🅰🅶🅴🅽🆃🅴🅹🅾, http://agentejo.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace yxorP\Controller;

use JetBrains\PhpStorm\ArrayShape;
use yxorP\AuthController;
use function gd_info;
use function session_write_close;

class Utils extends AuthController
{

    public function thumb_url()
    {

        session_write_close(); // improve concurrency loading

        $mime = $this->param('mime', 'auto');

        if ($mime == 'auto' && str_contains($this->app->request->headers['Accept'] ?? '', 'image/webp')) {
            $gdinfo = gd_info();
            $mime = isset($gdinfo['WebP Support']) && $gdinfo['WebP Support'] ? 'image/webp' : 'auto';
        }


        $options = [
            'src' => $this->param('src', false),
            'fp' => $this->param('fp'),
            'mode' => $this->param('m', 'thumbnail'),
            'mime' => $mime,
            'filters' => (array)$this->param('f', []),
            'width' => intval($this->param('w')),
            'height' => intval($this->param('h')),
            'quality' => intval($this->param('q', 80)),
            'rebuild' => intval($this->param('r', false)),
            'base64' => intval($this->param('b64', false)),
            'output' => intval($this->param('o', false)),
            'redirect' => intval($this->param('re', false)),
        ];

        // Set single filter when available
        foreach ([
                     'blur', 'brighten',
                     'colorize', 'contrast',
                     'darken', 'desaturate',
                     'edge detect', 'emboss',
                     'flip', 'invert', 'opacity', 'pixelate', 'sepia', 'sharpen', 'sketch'
                 ] as $f) {
            if ($this->param($f)) $options[$f] = $this->param($f);
        }

        return $this->module('yxorp')->thumbnail($options);
    }

    #[ArrayShape(['size' => "mixed", 'size_pretty' => "mixed"])] public function getCacheSize(): array
    {

        session_write_close();

        $size = 0;
        $dirs = ['#cache:', '#tmp:', '#thumbs:', '#pstorage:tmp'];

        foreach ($dirs as &$dir) {
            $dir = $this->app->path($dir);
        }

        unset($dir);
        foreach (array_unique($dirs) as $dir) {
            $size += $this->app->helper("fs")->getDirSize($dir);
        }

        return [
            'size' => $size,
            'size_pretty' => $this->app->helper('utils')->formatSize($size)
        ];
    }


    public function revisionsCount(): int|string
    {

        session_write_close();

        if ($id = $this->param('id')) {
            $cnt = $this->app->helper('revisions')->count($id);
            return (string)$cnt;
        }

        return 0;
    }

    public function revisionsRemove(): bool
    {

        if ($rid = $this->param('rid')) {
            $this->app->helper('revisions')->remove($rid);
            return true;
        }

        return false;
    }

    public function revisionsRemoveAll(): bool
    {

        if ($oid = $this->param('oid')) {
            $this->app->helper('revisions')->removeAll($oid);
            return true;
        }

        return false;
    }

    public function isResourceLocked($resourceId): array
    {

        $meta = $this->app->helper('admin')->isResourceLocked($resourceId);

        if ($meta) {
            return array_merge($meta, ['locked' => true]);
        }

        return ['locked' => false];
    }

    public function lockResourceId($resourceId)
    {

        $lockedMeta = $this->app->helper('admin')->isResourceLocked($resourceId);

        if ($lockedMeta) {

            if ($lockedMeta['sid'] !== md5(session_id())) {
                $this->stop(412);
            }
        }

        return $this->app->helper('admin')->lockResourceId($resourceId);
    }

    #[ArrayShape(['success' => "bool"])] public function unlockResourceId($resourceId): array
    {

        $meta = $this->app->helper('admin')->isResourceLocked($resourceId);
        $success = false;

        if ($meta) {

            $canUnlock = $this->module('yxorp')->hasaccess('yxorp', 'unlockresources');

            if (!$canUnlock) {
                $canUnlock = $meta['sid'] == md5(session_id()) || $this->app->module('yxorp')->isSuperAdmin();
            }

            if ($canUnlock) {
                $this->app->helper('admin')->unlockResourceId($resourceId);
                $success = true;
            }
        }

        return ['success' => $success];
    }

    #[ArrayShape(['success' => "bool"])] public function unlockResourceIdByCurrentUser($resourceId): array
    {

        $meta = $this->app->helper('admin')->isResourceLocked($resourceId);
        $success = false;

        if ($meta) {

            $canUnlock = $meta['sid'] == md5(session_id());

            if ($canUnlock) {
                $this->app->helper('admin')->unlockResourceId($resourceId);
                $success = true;
            }
        }

        return ['success' => $success];
    }

    #[ArrayShape(['running' => "mixed"])] public function startJobRunner(): array
    {

        session_write_close();

        $this->app->helper('async')->exec("yxorp()->helper('jobs')->stopRunner();yxorp()->helper('jobs')->run();");
        sleep(3);
        return ['running' => $this->app->helper('jobs')->isRunnerActive()];
    }

    #[ArrayShape(['running' => "mixed"])] public function restartJobRunner(): array
    {

        session_write_close();

        $this->app->helper('async')->exec("yxorp()->helper('jobs')->stopRunner();yxorp()->helper('jobs')->run();");
        sleep(3);
        return ['running' => $this->app->helper('jobs')->isRunnerActive()];
    }

    #[ArrayShape(['running' => "mixed"])] public function stopJobRunner(): array
    {

        session_write_close();

        $this->app->helper('async')->exec("yxorp()->helper('jobs')->stopRunner();");
        sleep(3);
        return ['running' => $this->app->helper('jobs')->isRunnerActive()];
    }
}
