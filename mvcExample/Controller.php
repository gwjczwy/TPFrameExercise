<?php
class Controller{
    public static function show(){
        //从模型中获取数据
        $data = Model::getData(); 
        // 展示数据
        echo View::display($data);
    }
}
?>
