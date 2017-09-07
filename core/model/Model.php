<?php
namespace core\model;

class Model{
    //设置一个静态属性
    protected static $config;

    //当调用当前类中的方法找不到的时候,自动触发. 调用方式为 -> 调用
    public function __call($name, $arguments)
    {
        return self::parseAction($name,$arguments);
    }

    //当调用当前类中的方法找不到的时候,自动触发. 调用方式为 :: 调用
    public static function __callStatic($name, $arguments)
    {
        return self::parseAction($name,$arguments);
    }

    //最终指向的方法,来实例化Base控制器的某个方法
    public static function parseAction($name,$arguments){
        $callClass = get_called_class();
        $info = explode('\\',$callClass);
        //用$callClass切割成数组之后的最后一个作为表名
        $table = $info[2];
        return call_user_func_array([new Base(self::$config,$table),$name],$arguments);
    }

    //获取连接数据库的配置项方法
    public static function setConfig($config){
        self::$config = $config;
    }


}