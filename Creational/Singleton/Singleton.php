<?php

/**
 * 要点：
 *   1.一个类只能有一个对象
 *   2.必须是自行创建这个类的对象
 *   3.要向整个系统提供者一个对象
 *
 * 设计方法：
 *  1.构造方法私有化
 *  2.类定义中包含一个静态私有变量
 *  3.提供静态函数 用来场景该对象
 *
 *优点：
 *  1.
 */
 final class  Mysql{
    /**
     * @var 该属性用来保存实例
     */
    private  static  $instance;

    /**
     * 构造方法私有化
     */
    private function __construct()
    {

    }

    /**
     * 公有方法对外提供服务
     * @return self
     */
    public static  function  getInstance(){
        if(!(self::$instance instanceof  self)){
            self::$instance =new self();
        }
        return self::$instance;
    }

    //防止对象被复制
    private function __clone()
    {
        trigger_error("clone is not allowed!");
    }
}

$mysql1  =  Mysql::getInstance();
$mysql2  =  Mysql::getInstance();
var_dump($mysql1);
echo '<hr>';
var_dump($mysql2);

/**
 * 运行结果 实例化出来了一个对象
 */

class b {

}
echo '<hr>';
$a = new b();
$b= new b();
var_dump($a);
var_dump($b);
/**
 * 运行结果 实例化出来了 两个对象
 */