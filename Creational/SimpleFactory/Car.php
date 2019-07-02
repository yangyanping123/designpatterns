<?php
namespace SimpleFactory;
class Car implements Transport{
    public function go()
    {
        echo "car跑的快<br>";
    }
}