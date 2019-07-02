<?php
  namespace  Builder;
  /**
 * 具体产品角色
 */
  class Bird{
      public $_head;
      public $_wing;
      public $_footer;

      function show(){
          echo "头的颜色:{$this->_head}<br/>";
          echo "翅膀的颜色:{$this->_wing}<br/>";
          echo "脚的颜色:{$this->_foot}<br/>";
      }
  }