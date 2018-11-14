<?php
//入口文件
// 1 引入mvc类
require_once('Model.php');
require_once('View.php');
require_once('Controller.php');
// 2 调用指定控制器的指定方法,使之运行起来
//Controller::show();  //笨拙的方法
$c=$_GET['c'];
$a=$_GET['a'];
$controller=new $c;
$controller->$a();

