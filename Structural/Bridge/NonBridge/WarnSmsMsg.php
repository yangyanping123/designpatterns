<?php
namespace  NonBridge;
class WarnSmsMsg extends  SmsMsg {
    public function doSend($name,$content)
    {
        echo '加急'.$this->send($name,$content);
    }
}