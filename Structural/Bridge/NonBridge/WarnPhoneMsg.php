<?php
namespace  NonBridge;
class WarnPhoneMsg extends  PhoneMsg {
    public function doSend($name,$content)
    {
        echo '加急'.$this->send($name,$content);
    }
}