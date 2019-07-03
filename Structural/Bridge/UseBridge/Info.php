<?php
 namespace UseBridge;
 abstract class Info {
     protected $send = null;
     public function __construct(Msg $msg)
     {
         $this->send = $msg;
     }
     abstract function msg($content);
     public function sendMsg($name,$content) {
         $content = $this->msg($content);
         $this->send->send($name,$content);
     }
 }
