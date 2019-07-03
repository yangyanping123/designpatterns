<?php
 namespace Composite;
 /**
  * Class HumanResources 人力资源部
  * @package Composite
  */
 class HumanResources extends  CompanyBase{
     public function add(CompanyBase $c)
     {
         throw new Exception("该节点下不能增加节点");
     }
     
     public function remove(CompanyBase $c)
     {
         throw new Exception("该节点下无子节点");
     }


     public function show($deep=0)
     {
         echo str_repeat("-",$deep).$this->name;
         echo "<br>";
     }


     public function work($deep=0)
     {
         echo str_repeat("&emsp;",$deep)."人力资源部门的工作是为公司招聘人才";
         echo "<br>";
     }
 }