<?php 
$data=[
    ['id'=>01,'name'=>'ben','age'=>22,'salary'=>4500],
    ['id'=>02,'name'=>'cc','age'=>22,'salary'=>4500],
    ['id'=>03,'name'=>'ddd','age'=>22,'salary'=>4500],
]
?>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>
<body>
<h3 align="center">用户信息</h3><!-- 乱码 -->
    <table border="1" cellspacing="0" cellspacing="0" width="50%" align="center">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>salary</th>
    </tr>
    <?php foreach($data as $v):   ?>
    <tr>
        <th><?php echo $v['id'];?></th>
        <th><?php echo $v['name'];?></th>
        <th><?php echo $v['age'];?></th>
        <th><?php echo $v['salary'];?></th>
    </tr>
<?php endforeach;?>
    </table>
</body>
</html>