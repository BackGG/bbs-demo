<?php
//网站入口文件
//加载初始化文件
include './init.php';
//开启session,判断用户是否登录
session_start();
//检查是否设置了七天登录
if(isset($_COOKIE['user_id'])){
    include DIR_CORE.'MySQLDB.php';
    $sql = "select * from user where user_id={$_COOKIE['user_id']}";
    $res = my_query($sql);
    $row = mysql_fetch_assoc($res);
    $_SESSION['userInfo'] = $row;
}
//加载视图文件
include DIR_VIEW.'index.html';
