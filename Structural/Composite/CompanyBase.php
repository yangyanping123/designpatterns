<?php
 namespace  Composite;
 /**
  * Class CompanyBase 组合模式抽象基类
  * @package Composite
  */
 abstract  class  CompanyBase
 {
     protected  $name; //节点名称

     public function __construct($name)
     {
         $this->name = $name;
     }


     public function getName()
     {
         return $this->name;
     }

     //增加节点
     abstract function  add(CompanyBase $c);

     //删除节点
     abstract function  remove(CompanyBase $c);

     //输出节点信息
     abstract function  show($deep);

     //节点职责
     abstract  function  work($deep);
 }