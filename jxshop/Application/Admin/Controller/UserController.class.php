<?php
namespace Admin\Controller;
use Think\Controller;
//分类控制器
class UserController extends CommonController{
    function randomkeys($length) 
    { 
       $pattern = '1234567890abcdefghijklmnopqrstuvwxyz 
                   ABCDEFGHIJKLOMNOPQRSTUVWXYZ';
        for($i=0;$i<$length;$i++) 
        { 
            $key .= $pattern{mt_rand(0,35)};    //生成php随机数 
        } 
        return $key; 
    }

    public function register(){
        if(IS_GET){
            $this->assign('tip','欢迎来注册');
            $this->display();
        }
        if(IS_POST){
            $RegName=I('post.id');
            $Who=I('post.who');

            if(!$RegName){
                die('请填写用户名');
            }
            $cookieVal=$this->randomkeys(200);
            $User = M("Userinfo"); // 实例化User对象
            $data['level']=1;
            $data['cookie_value']=$cookieVal;
            $User->add($data);
            cookie('RegName',$cookieVal);
        }
    }
    public function login(){
        if(IS_GET){
            $cookie_value=cookie('RegName');
            $User=M("Userinfo");
            $data=$User->where('cookie_value="'.$cookie_value.'"')->find();
            if($data){
                $this->assign('tip','<h1>欢迎你 , '.$data['id'].'</h1>');
            }
            else{
                $this->assign('tip','<h1>请注册</h1>');
            }
            $this->display();
        }

    }


}