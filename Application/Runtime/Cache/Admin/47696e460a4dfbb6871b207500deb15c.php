<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>使用 layDate 独立版</title>
</head>
<body>
<input type="text" id="test1">
<script src="/Public/Admin/js/laydate/laydate.js"></script> <!-- 改成你的路径 -->
<script>
    //执行一个laydate实例
    laydate.render({
        elem: '#test1', //指定元素
        type: 'time'
    });
</script>
</body>
</html>