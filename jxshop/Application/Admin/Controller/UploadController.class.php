<?php
namespace Admin\Controller;
use Think\Controller;
//分类控制器
class UploadController extends CommonController{
    public function img(){
        if(IS_GET){
            $this->display();
        }else if(IS_POST){
            // $this->display();
            //实现图片上传
            $upload=new \Think\Upload();  //实例化 \Think\Upload 类
            $info   =   $upload->uploadOne($_FILES['img']);
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }
            $upload->saveName = 'com_create_guid'; 
            $path=$info['savepath'].$info['savename'];//保存的本地路径 从upload文件夹下开始写
            $info['name']==''?$info['name']='nano.jpg':'';
            // 写入数据库
            $Upload=D('upload');  //实例化一个对象
            $Upload->create();
            $Upload->url=$path;// 增加或者更改其中的属性
            $Upload->used='y';
            $Upload->imgName=$info['name'];
            $Upload->add();
            $this->assign('tip','上传完成,还要再来一张吗?');
            $this->display();
        }



    }
}