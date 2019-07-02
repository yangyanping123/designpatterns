<?php
namespace AbstractFactory;
//具体产品
class BlackCat implements Cat{
    public function Voice()
    {
        echo "黑喵喵喵<br>";
    }
}