<?php
namespace  NonBridge;
class CommonZnMsg extends  ZnMsg{
    public function doSend($name,$content)
    {
        echo '普通'.$this->send($name,$content);
    }
}