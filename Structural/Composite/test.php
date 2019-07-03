<?php
spl_autoload_register('autoload');
function autoload($class)
{
    require  dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\', '/', $class) . '.php';
}

use composite\HumanResources;
use composite\Commerce;
use composite\Company;
$c = new Company("北京某科技公司");
$h = new HumanResources("人力资源部门");
$com = new Commerce("商务部门");
$c->add($h);
$c->add($com);
//$c = new Company("北京某科技公司");
//天津分公司
//为了偷懒，分公司的部门直接copy母公司的
$c1 = new Company("天津分公司");
$c1->add($h);
$c1->add($com);
$c->add($c1);

//武汉分公司
$c2 = new Company("武汉分公司");
$c2->add($h);
$c2->add($com);
$c->add($c2);

//使用公司功能
$c->show();
//$c->work();