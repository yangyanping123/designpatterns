<?php
namespace AbstractFactory;
//抽象工厂
interface AnimalFactory{
    public function createCat();
    public function createDog();
}