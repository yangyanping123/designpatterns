<?php
 namespace Composite;
 /**
  * Class Commerce商务部门
  * @package Composite
  */
 class Commerce extends  CompanyBase{
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
         echo str_repeat("&emsp;",$deep)."商务部门的工作是为公司赚取利润";
         echo "<br>";
     }
 }