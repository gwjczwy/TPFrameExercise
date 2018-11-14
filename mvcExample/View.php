<?php
class View{
    public static function display($data){
        $table='    <h3 align="center">用户信息</h3>
        <table border="1" cellspacing="0" cellspacing="0" width="50%" align="center">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>salary</th>
        </tr>';
        foreach($data as $v){
            $table.='<tr>';
            $table.='<td>'.$v['id'].'</td>';
            $table.='<td>'.$v['name'].'</td>';
            $table.='<td>'.$v['age'].'</td>';
            $table.='<td>'.$v['salary'].'</td>';
            $table.='</tr>';
        }
        return $table;
    }
}

?>