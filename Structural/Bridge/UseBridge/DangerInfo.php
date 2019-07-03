<?php
namespace UseBridge;
class DangerInfo  extends Info{
    public function msg($content = '')
    {
        return '紧急'.$content.'<br>';;
    }
}