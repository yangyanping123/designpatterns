<?php
namespace  Builder;
/**
 * Class BirdBuilder 抽象鸟的建造者 生成器
 * @package Builder
 */
abstract  class BirdBuilder{
    protected  $_bird;

    public function __construct()
    {
        $this->_bird=  new Bird();
    }

    abstract function BuildHead();
    abstract function BuildWing();
    abstract function BuildFoot();
    abstract function GetBird();
}