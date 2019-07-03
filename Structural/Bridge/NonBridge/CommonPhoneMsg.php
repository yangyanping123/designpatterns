<?php
namespace  NonBridge;
class CommonPhoneMsg extends  PhoneMsg {
    public function doSend($name,$content)
    {
        echo '普通'.$this->send($name,$content);
    }
}