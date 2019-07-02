<?php
namespace  Builder;
/**
 * Class BlueBird  具体鸟的建造者(生成器)   蓝鸟
 * @package Builder
 */
class   BlueBird  extends  BirdBuilder{
    function BuildHead()
    {
        // TODO: Implement BuilderHead() method.
        $this->_bird->_head="Blue";
    }

    function BuildWing()
    {
        // TODO: Implement BuilderWing() method.
        $this->_bird->_wing="Blue";
    }

    function BuildFoot()
    {
        // TODO: Implement BuilderFoot() method.
        $this->_bird->_foot="Blue";
    }

    function GetBird()
    {
        // TODO: Implement GetBird() method.
        return $this->_bird;
    }

}