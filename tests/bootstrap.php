<?php

/** @var Composer\Autoload\ClassLoader $autoloader */
$autoloader = require dirname(__DIR__) . '/vendor/autoload.php';

$autoloader->addPsr4('Tests\\Helper\\', 'tests/Helper');
