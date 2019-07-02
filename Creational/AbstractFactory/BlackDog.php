<?php
namespace AbstractFactory;
//具体产品
 class BlackDog implements Dog{
     public function Voice(){
         echo '黑狗汪汪……<br>';
     }
 }