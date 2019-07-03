<?php
    spl_autoload_register('autoload');
    function autoload($class)
    {
        require  dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\', '/', $class) . '.php';
    }

use UseBridge\DangerInfo;
use UseBridge\ZnMsg;
use UseBridge\CommonInfo;

$zn = new DangerInfo(new ZnMsg());
$zn->sendMsg('小猪','要好好努力啊！');

$zn = new CommonInfo(new ZnMsg());
$zn->sendMsg('小猪','要好好努力啊！');


$zn = new DangerInfo(new \UseBridge\PhoneMsg());
$zn->sendMsg('小猪','要好好努力啊！');

$zn = new CommonInfo(new \UseBridge\PhoneMsg());
$zn->sendMsg('小猪','要好好努力啊！');


