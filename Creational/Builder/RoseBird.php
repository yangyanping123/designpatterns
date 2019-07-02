<?php
namespace  Builder;
/**
 * Class BlueBird  具体鸟的建造者(生成器)   玫瑰鸟
 * @package Builder
 */
class   RoseBird  extends  BirdBuilder{
    function BuildHead()
    {
        // TODO: Implement BuilderHead() method.
        $this->_bird->_head="Red";
    }

    function BuildWing()
    {
        // TODO: Implement BuilderWing() method.
        $this->_bird->_wing="Black";
    }

    function BuildFoot()
    {
        // TODO: Implement BuilderFoot() method.
        $this->_bird->_foot="Green";
    }

    function GetBird()
    {
        // TODO: Implement GetBird() method.
        return $this->_bird;
    }

}