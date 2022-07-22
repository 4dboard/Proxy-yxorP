<?php
$root = $_SERVER['DOCUMENT_ROOT'];
chdir($root);
$path = '/' . ltrim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');

set_include_path(get_include_path() . ':' . __DIR__);
include_once __DIR__ . DIRECTORY_SEPARATOR . 'index.php';