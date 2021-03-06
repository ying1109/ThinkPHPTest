<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery Editable Select Plugin Examples</title>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap.css">
    <link href="/Public/Plugin/css/jquery-editable-select.css" rel="stylesheet"/>
</head>
<body>

<div class="col-sm-2" style="margin-top:50px;margin-left: 30px;">
    <select class="form-control" id="basic111">
        <option>Alfa Romeo</option>
        <option>Audi</option>
        <option>BMW</option>
        <option>Mercedes</option>
        <option>Mini</option>
        <option>Nissan</option>
        <option>Opel</option>
        <option>Peugeot</option>
        <option>Porsche</option>
        <option>Renault</option>
        <option>Smart</option>
        <option>Volkswagen</option>
        <option>Volvo</option>
    </select>
</div>

<div class="col-sm-2" style="margin-top:50px;margin-left: 30px;">
    <select class="form-control" id="basic222">
        <option>杨莹莹</option>
        <option>钱语嫣</option>
        <option>李子衿</option>
        <option>孙浅浅</option>
        <option>杨氏字辈</option>
        <option>周大宝</option>
        <option>浅笑花开</option>
        <option>折扇戏美人</option>
        <option>掀纱窥君容</option>
        <option>君子世无双</option>
        <option>君忘</option>
    </select>
</div>

<!--<script src="http://code.jquery.com/jquery-latest.min.js"></script>-->
<script type="text/javascript" src="/Public/Admin/js/jquery-3.3.1.js"></script>
<script src="/Public/Plugin/js/jquery-editable-select.js"></script>
<script>
    window.onload = function () {
        $('#basic111').editableSelect();
        $('#basic222').editableSelect();
    }
</script>

</body>
</html>