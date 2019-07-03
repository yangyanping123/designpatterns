<?php
spl_autoload_register('autoload');
function autoload($class)
{
    require  dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\', '/', $class) . '.php';
}


use NonBridge\CommonSmsMsg;
use NonBridge\ZnMsg;
use NonBridge\PhoneMsg;
use NonBridge\WarnSmsMsg;
use NonBridge\SmsMsg;
use NonBridge\DangerSmsMsg;
use \NonBridge\CommonPhoneMsg;
$zn = new CommonSmsMsg(new ZnMsg()); //以普通形式发送站内信信息
$zn->doSend("zhangsan",'1111');

echo '<hr>';
$zn1 = new WarnSmsMsg(new  PhoneMsg()); //以加急方式发送站内信
$zn1->doSend("zhangsan",'1111');


echo'<hr>';
$zn2 = new DangerSmsMsg(new SmsMsg()); //以紧急方式发送站内信
$zn2->doSend("zhangsan",'1111');

echo'<hr>';
$zn3 = new CommonPhoneMsg(new ZnMsg()); //以普通形式发送手机信息
$zn3->doSend("zhangsan",'1111');

echo '<hr>';
$zn4 = new \NonBridge\WarnPhoneMsg(new  PhoneMsg()); //以加急方式发送手机信息
$zn4->doSend("zhangsan",'1111');


echo'<hr>';
$zn5 = new \NonBridge\DangerPhoneMsg(new SmsMsg()); //以紧急方式发送站手机信息
$zn5->doSend("zhangsan",'1111');