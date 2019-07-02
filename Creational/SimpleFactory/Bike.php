<?php
namespace SimpleFactory;
class Bike implements Transport{
    public function go()
    {
        echo "bike比较慢<br>";
    }
}