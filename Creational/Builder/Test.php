<?php
spl_autoload_register('autoload');
function autoload($class)
{
    require  dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\', '/', $class) . '.php';
}
use Builder\Director;
use Builder\BlueBird;
use Builder\RoseBird;
$director = new Director();
echo "蓝鸟的组成：<hr/>";
$blue_bird=$director->Construct(new BlueBird());
$blue_bird->Show();

echo "<br/>Rose鸟的组成：<hr/>";

$rose_bird=$director->Construct(new RoseBird());
$rose_bird->Show();
