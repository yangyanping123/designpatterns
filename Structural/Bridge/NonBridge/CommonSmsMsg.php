<?php
namespace  NonBridge;
class CommonSmsMsg extends  SmsMsg {
    public function doSend($name,$content)
    {
        echo '普通'.$this->send($name,$content);
    }
}