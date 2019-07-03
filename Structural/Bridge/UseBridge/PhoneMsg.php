<?php
namespace  UseBridge;
class PhoneMsg implements Msg{
    public function send($name, $content)
    {
        echo $name.'发送了手机信息内容是:'.$content;
    }
}