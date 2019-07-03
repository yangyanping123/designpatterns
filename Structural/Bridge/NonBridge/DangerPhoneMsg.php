<?php
namespace  NonBridge;
class DangerPhoneMsg extends  PhoneMsg {
    public function doSend($name,$content)
    {
        echo '紧急'.$this->send($name,$content);
    }
}