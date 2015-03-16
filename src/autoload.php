<?php
use Composer\Autoload\ClassLoader;

define('ROOT_DIR', __DIR__ . '/..');

/** @var ClassLoader $loader */
$loader = require ROOT_DIR . '/vendor/autoload.php';
$loader->add('', ROOT_DIR . '/src');
return $loader;