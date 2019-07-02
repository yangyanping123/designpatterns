<?php
namespace AbstractFactory;
//具体工厂
class  WhiteAnimalFactory implements AnimalFactory{
    public function createDog()
    {
        return  new WhiteDog();
    }

    public function createCat()
    {
        return  new WhiteCat();
    }
}