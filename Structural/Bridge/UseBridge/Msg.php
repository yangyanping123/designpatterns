<?php
  namespace  UseBridge;
  interface Msg{
      public function send($name,$content);
  }