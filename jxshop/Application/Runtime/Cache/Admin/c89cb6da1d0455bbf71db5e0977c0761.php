<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>comment</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->  
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">  
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->  
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>  
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->  
    <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>  
    <script src="/Public/Admin/js/jquery.js"></script>
    <script>//发送评论
            function postComment()
            {
                var val1 = document.getElementById("commontTextarea").value;
                var val2 = document.getElementById("nameInput").value;
                $.post(window.location.href, {'name':val1, 'comment':val2});
                location.reload();
            }
        </script>
</head>
<body>
    <p>add</p>
    <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!--  该volist标签可以被TP框架检测并  功能为自动把cate当作vo遍历 -->
        <?php echo ($vo["id"]); ?><b><?php echo ($vo["name"]); ?></b><?php echo ($vo["comment"]); ?></br>  <!-- vo就是cate数组的一个元素 --><?php endforeach; endif; else: echo "" ;endif; ?>

    <div class="form-group" >
        <div class="" style="padding: 10px 10px 10px;">
            <textarea id="commontTextarea" class ="form-control" type="text" name="comment" placeholder="有什么想说的吗"></textarea>
            <input id="nameInput" class ="form-control" type="textarea" name="name" placeholder="昵称"/>
            <button onclick="postComment()" class ="form-control" type="submit" value="提交" >发送</button>
        </div>  
    </div>
    <p style="text-align: center; ">
        <span style="background-color:#FFE500;">    <footer>there is nothing here.</footer>
            <span style="background-color:#666666;">​
            </span>
        </span>
    </p>
    <footer>there is nothing here.</footer>
</body>
</html>