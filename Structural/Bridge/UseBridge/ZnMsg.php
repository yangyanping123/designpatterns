<?php
namespace  UseBridge;
class ZnMsg implements Msg{
    public function send($name, $content)
    {
        echo $name.'发送了站内信息内容是:'.$content;
    }
}