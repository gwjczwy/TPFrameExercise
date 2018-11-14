<?php 
namespace Admin\Model;
//公共模型
class CategoryModel extends CommonModel{
    //自定义字段
    protected $fields=array('id','name','comment');
    //自动验证
    protected $_validate=array(
        array('name','require','名称必须填写'),
        array('comment','require','内容必须填写'),
    );
    //获取格式化之后的数据
    public function getCateTree(){
        //先获取所有的分类信息
        $data=$this->select();
        //再对获取的信息进行格式化
        $list=$this->getTree($data);
        dump($list);  //虽然不懂原理,该行直接显示所有取出的数据
        return $list;
    }
    //格式化分类信息      没什么用
    public function getTree($data){
        $list=array();//到最后直接返回该数组
        foreach($data as $value){
            $list[]=$value;
        }
        $list=$data;
        return $list;
    }
} 
?>