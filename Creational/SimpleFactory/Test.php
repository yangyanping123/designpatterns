<?php

spl_autoload_register('autoload');
function autoload($class)
{
    require  dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\', '/', $class) . '.php';
}

use SimpleFactory\TranFactory;

$transport=TranFactory::factory('car');
$transport->go();


$transport=TranFactory::factory('bike');
$transport->go();

$transport=TranFactory::factory('bus');
$transport->go();