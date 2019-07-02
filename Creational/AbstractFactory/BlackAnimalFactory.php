<?php
namespace AbstractFactory;
//具体工厂
class BlackAnimalFactory  implements AnimalFactory{
    public function createCat()
    {
       return  new BlackCat();
    }

    public function createDog()
    {
        return new BlackDog();
    }
}