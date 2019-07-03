<?php
namespace  NonBridge;
class DangerSmsMsg extends  SmsMsg {
    public function doSend($name,$content)
    {
        echo '紧急'.$this->send($name,$content);
    }
}