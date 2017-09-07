<?php
namespace app\admin\controller;

use core\view\View;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;

class User{

    public function login(){

        if($_POST){
            //代表存在post提交才运行if判断里面
            //通过post提交过来的username去数据库中查询是否有当前用户
            $username = $_POST['username'];
//            select * from user where username = $username;
            $userInfo = \system\model\User::where("username = '{$username}'")->get();
            //如果有当前用户,继续往下判断密码是否正确,如果没有当前用户,直接提示当前用户不存在
            if(empty($userInfo)){
                //提示当前用户不存在,并返回
                p('当前用户不存在');
            }
            //判断当前用户输入的密码是否数据库中数据密码相等
            if($_POST['password'] != $userInfo[0]['password']){
                p('密码输入不正确');
            }
            //判断验证码是否为空,并且判断验证码是否输入正确
            if(empty($_POST['code']) || $_POST['code'] != $_SESSION['code']){
                p('验证码输入错误');
            }
            p('所有输入都是正确的');
            //通过判断是否选择7天免登陆按钮来判断是否需要存session

            //能运行到这里,代表账号存在,密码正确,验证码正确,登录成功,跳转到后台首页

        }
        return View::make();
    }
    public function code(){
        header('Content-type: image/jpeg');
        $phraseBuilder = new PhraseBuilder(4);
        $builder = new CaptchaBuilder(null, $phraseBuilder);
        $builder->build(150,40);
        $_SESSION['code'] = $builder->getPhrase();
        $builder->output();
    }





}

