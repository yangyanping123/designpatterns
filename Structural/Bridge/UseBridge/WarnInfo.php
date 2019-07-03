<?php
namespace UseBridge;
class WarnInfo extends Info{
    public function msg($content = '')
    {
        return '加急'.$content.'<br>';
    }
}