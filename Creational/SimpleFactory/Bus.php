<?php
namespace SimpleFactory;

class Bus implements  Transport{
    public function  go()
    {
        echo "bus每一站都要停<br>";
    }
}