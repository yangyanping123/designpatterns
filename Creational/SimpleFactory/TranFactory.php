<?php
namespace SimpleFactory;
/**
 *
 * Interface Transport简单工厂模式
 */
class TranFactory{

      public static  function Factory($transpant){
          switch ($transpant){
              case 'bus':
                  return new Bus();
                  break;
              case 'car':
                  return new Car();
                  break;
              case 'bike':
                  return new Bike();
                  break;
              default:
                 echo "暂不支持生产该类型的东西";
          }
      }
  }

