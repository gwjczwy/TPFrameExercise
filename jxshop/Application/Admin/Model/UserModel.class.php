<?php 
namespace Admin\Model;
//公共模型
class CategoryModel extends CommonModel{
    //自定义字段
    protected $fields=array('id','cookie_calue','level');
    //自动验证
    protected $_validate=array(
        array('id','require','id必须填写'),
        array('cookie_calue','require','cookie必须填写'),
        array('level','require','权限等级必须填写'),
    );


}