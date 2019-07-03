<?php
 namespace  Composite;
 use mysql_xdevapi\Exception;

 /**
  * Class Company公司类
  * @package Composite
  */
 class  Company extends  CompanyBase{

     protected  $item =[];

     public function add(CompanyBase $c)
     {
        $nodeName = $c->getName();

        if(!isset($this->item[$nodeName])){
            $this->item[$nodeName]=$c;
        }else{
            throw new Exception("该节点已存在，节点名称是".$nodeName);
        }
     }

     public function remove(CompanyBase $c)
     {
        $nodeName = $c->getName();
        if(isset($this->item[$nodeName])){
            unset($this->item[$nodeName]);
        }else{
            throw  new Exception("该节点不存在，节点名称是".$nodeName);
        }
     }


     public function show($deep=0)
     {
        echo str_repeat('-',$deep).$this->name;
        echo '<br>';
        foreach ($this->item as $value){
            $value->show($deep+4);
        }
     }



     public function work($deep=0)
     {
         foreach ($this->item as $value){
             echo str_repeat("&emsp;",$deep)."[{$this->name}]<br>";
             $value->work($deep+2);
         }
     }
 }