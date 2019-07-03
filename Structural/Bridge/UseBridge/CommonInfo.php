<?php
namespace UseBridge;
class CommonInfo extends Info{
    public function msg($content = '')
    {
        return '普通'.$content.'<br>';;
    }
}