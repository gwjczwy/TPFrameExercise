<?php
namespace Admin\Controller;
use Think\Controller;
//分类控制器
class CategoryController extends CommonController{
    //实现添加
    public function add(){
        if(IS_GET){
            //获取格式化之后的分类xinxi
            $model=D('Category');
            $data=$model->getCateTree();//获取格式化分类信息
            //将信息复制给模板
            $this->assign('cate',$data);
            $this->display();
        }else{
            //如果是POST请求,就数据入库
            $model = D('Category'); //实例化模型对象
            //创建数据
            $data=$model->create();
            if(!$data){//如果data没有数据
                $this->error($model->getError());//报个错
            }
            //如果不是这样,写入数据
            $insertid=$model->add($data);//如果成功,会返回id标识
            if(!$insertid){
                $this->error('数据写入失败');
            }
            $this->success('写入成功');
        }
    }
    //实现删除
    public function admin(){
        if(IS_GET){
            //获取格式化之后的分类xinxi
            $model=D('Category');
            $data=$model->getCateTree();//获取格式化分类信息
            //将信息复制给模板
            $this->assign('cate',$data);
            $this->display();
        }else{
            $id= intval(I('post.id'));
            if($id<=0){
                $this->error('参数错误啦~~'.$id);
            }
            $model=D('Category');//实例化模型对象
            //调用模型中的删除方法实现删除
            $res=$model->del($id);
            if($res===false){
                $this->error('删除失败');
            }
            $this->success('删除成功');
        }
    }
}