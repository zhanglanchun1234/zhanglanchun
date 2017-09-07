<?php
namespace app\home\controller;
use core\model\Model;
use core\view\View;
use system\model\User;
use system\model\Wish;

class Index{
    public function index(){
        //获取数据  比如,我现在需要获取用户表的信息,我创建一个用户模型 User
        //比如,现在我想获取 user 表中的所有数据
        $data = User::where("age < 40")->get();
//        p(compact('data'));
        //再比如,我想获取 wish 表中的所有数据
//        $wish = Wish::get();
        return View::make()->with(compact('data'));
    }

    public function post(){
        return View::make();
    }
}