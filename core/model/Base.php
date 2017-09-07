<?php
namespace core\model;
use PDO;
use PDOException;
class Base{
    //最终是在这个控制器内,完成一系列获取数据的方法
    //设置表名属性
    protected $table;
    //设置数据库连接属性
    private static $pdo = NULL;
    //设置where属性
    protected $where = '';

    //比如说现在$table传值过来的user,就代表当前使用的表是user表
    public function __construct($config,$table)
    {
        //用获取到的连接数据库的配置项来自动执行连接数据库方法
        $this->connect($config);
        $this->table = $table;
    }

    //连接数据库方法
    public function connect($config){
        if(!is_null(self::$pdo)){
            return;
        }
        $dsn = "mysql:host={$config['host']};dbname={$config['dbname']}";
        $username = $config['username'];
        $password = $config['password'];
        try{
            $pdo = new PDO($dsn,$username,$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $pdo->query("set names utf8");
            //将$pdo赋值给当前属性
            self::$pdo = $pdo;
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }

    //获取所有数据方法
    public function get(){
//      select * from wish where username = 'zhangsan';
        $sql = "select * from {$this->table} {$this->where}";
        $data = $this->query($sql);
        return $data;
    }

    //获取单条数据  $pri 是查询的某个字段的值
    public function find($pri){
//        比如sql语句是: select * from user where id = 9;
        //通过方法获取当前表的主键名称
        $priKey = $this->getpriKey();
        //通过调用where方法,改变where属性的值
        $this->where("{$priKey} = {$pri}");
        //组合sql语句
        $sql = "select * from {$this->table} {$this->where}";
        //此时$data数据是二维数组
        $data = $this->query($sql);
        //将$data从二维数组变成一维数组  (current 将二维数组变成一维数组)
        $data = current($data);
        $this->data = $data;
        return $this;
    }

    //获取当前表的主键名称
    public function getpriKey(){
        //通过查看表结构,能看到某个字段是主键
        $sql = "desc {$this->table}";
        $desc = $this->query($sql);
        //定义一个空变量用来存主键名称
        $priKey = '';
        foreach ($desc as $v) {
            if($v['Key'] == 'PRI'){
                $priKey = $v['Field'];
                break;
            }
        }
        return $priKey;
    }

    //组合where条件方法
    public function where($where){
        //比如$where = " username = 'zhangsan'"
        $this->where = "where {$where}";
        return $this;
    }

    //获取数据统计方法
    public function count($field = '*'){
        //执行的sql语句例如: select count(*) from user where id = 1;
        $sql = "select count({$field}) as c from {$this->table} {$this->where}";
        $count = $this->query($sql);
        return $count[0]['c'];
    }

    //删除方法
    public function delete(){
        //执行的sql语句例如: delete from wish where username = 'zhangsan';
        $sql = "delete from {$this->table} {$this->where}";
        //$data 返回的是删除的条数(受影响的条数)
        $data = $this->exec($sql);
        if($data){
            return true;
        }else{
            return false;
        }
    }

    //封装执行有结果集的操作
    public function query($sql){
        try{
            $result = self::$pdo->query($sql);
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }

    //封装执行没有结果集的操作
    public function exec($sql){
        try{
            return self::$pdo->exec($sql);
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
}