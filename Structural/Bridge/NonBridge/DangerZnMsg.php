<?php
namespace  NonBridge;
class DangerZnMsg extends  ZnMsg{
    public function doSend($name,$content)
    {
        echo '紧急'.$this->send($name,$content);
    }
}