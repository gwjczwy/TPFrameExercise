<?php
namespace Admin\Controller;  //命名空间 根据目录来的
use Think\Controller;
//修改让其继承中间类以实现继承关系
//让它继承公共控制器
class IndexController extends CommonController
{
    public function index()
    {
        $this->display();
    }
    //测试使用U函数生成的URL地址
    public function testUrl(){
        //echo U('模块/控制器/方法',...)
        //echo U('admin/index/index')
        echo U('index','id=2');//第二个参数可以是数组或者字符串格式 作为URL地址上的参数
    }
}