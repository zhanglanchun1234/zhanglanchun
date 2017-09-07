<?php
/**
 * Created by PhpStorm.
 * User: liyalong
 * Date: 2017/9/6
 * Time: 下午5:20
 */
namespace app\admin\controller;

use core\view\View;

class Entry{

    public function index(){
        //加载后台首页模板
        return View::make();
    }
}