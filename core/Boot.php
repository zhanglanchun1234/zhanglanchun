<?php
namespace core;
class Boot{
    //默认启动方法
    public static function run(){
        //开启session
        session_start();
        //默认启动的实例化控制器方法
        self::apprun();
    }

    public static function apprun(){
//        m 代表模块
//        c 代表控制器
//        a 代表方法
        if (isset($_GET['s'])){
            //如果存在get参数中的s,通过s参数处理调用的模块里的控制器方法
            $info = explode('/',$_GET['s']);
            //定义模块变量
            $m = $info[0];
            //定义控制器变量
            $c = ucfirst($info[1]);
            //定义方法变量
            $a = $info[2];
        }else{
            //如果不存在get参数中的s,就调用默认模块的控制器方法
            //定义模块变量
            $m = 'home';
            //定义控制器变量
            $c = 'Index';
            //定义方法变量
            $a = 'index';
        }
        //定义常量
        //定义模块常量
        define('MODULE',$m);
        //定义控制器常量
        define('CONTROLLER',strtolower($c));
        //定义方法常量
        define('ACTION',$a);
        //组合带命名空间的类名称
//        需要实例化的类例如: app\home\controller\某各类
        $class = "app\\{$m}\controller\\{$c}";

        echo call_user_func_array([new $class,$a],[]);



    }



}
