<?php
namespace  NonBridge;
class SmsMsg implements Msg{
    public function send($name, $content)
    {
        echo $name.'发送了sms信息内容是:'.$content;
    }
}