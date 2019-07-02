<?php
spl_autoload_register('autoload');
function autoload($class)
{
    require  dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\', '/', $class) . '.php';
}
use AbstractFactory\AnimalFactory;
use AbstractFactory\BlackAnimalFactory;
use AbstractFactory\WhiteAnimalFactory;
class Test{
    public static function main() {
        self::run(new BlackAnimalFactory());
        self::run(new WhiteAnimalFactory());
    }

    public static function run(AnimalFactory $AnimalFactory){
        $cat = $AnimalFactory->createCat();
        $cat->Voice();

        $dog = $AnimalFactory->createDog();
        $dog->Voice();
    }
}

Test::main();
