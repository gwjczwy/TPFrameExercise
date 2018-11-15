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
        return $data;
    }
    //删除评论
    public function del($id){
        return $this->where('id='.$id)->delete();
    }
    //修改评论
    public function update($data){
        // dump($data);exit();
        $this->save($data);
    }
}
?>