<?php
namespace  NonBridge;
class WarnZnMsg extends  ZnMsg{
    public function doSend($name,$content)
    {
        echo '加急'.$this->send($name,$content);
    }
}