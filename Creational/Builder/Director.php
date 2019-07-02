<?php
namespace  Builder;
/**
 * 指挥者
 */
class Director{

    /**
     * @param $_builder      建造者
     *@return mixed         产品类：鸟
     */
   public function  Construct($_builder)
   {
       $_builder->BuildHead();
       $_builder->BuildWing();
       $_builder->BuildFoot();
        return $_builder->GetBird();
   }


}