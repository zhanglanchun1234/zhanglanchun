<?php
$config = [
    'host' => 'localhost', //设置主机名
    'dbname' => 'stu', //设置数据库名称
    'username' => 'root', //设置连接数据库的账号
    'password' => 'root' //设置连接数据库的密码
];

\core\model\Model::setConfig($config);