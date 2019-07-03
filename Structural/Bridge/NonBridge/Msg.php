<?php
  namespace  NonBridge;
  interface Msg{
      public function send($name,$content);
  }