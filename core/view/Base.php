<?php
namespace core\view;

class Base{
    //模板文件变量
    protected $file;
    //模板参数变量
    protected $vars = [
        'version' => 'HD85'
    ];

    //加载模板方法
    public function make(){
//        ../app/home/view/index/index.php
        $this->file = "../app/" . MODULE . '/view/' . CONTROLLER . '/' . ACTION . '.php';
        return $this;
    }

    //分配模板参数方法
    public function with($var){
        $this->vars = $var;
        return $this;
    }

    public function __toString()
    {
        extract($this->vars);
        include $this->file;
        return '';
    }


}