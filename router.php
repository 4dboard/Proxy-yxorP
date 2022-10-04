<?php
$root = $_SERVER['DOCUMENT_ROOT'];
chdir($root);

set_include_path(get_include_path() . ':' . dirname(__FILE__));
include_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'index.php';
