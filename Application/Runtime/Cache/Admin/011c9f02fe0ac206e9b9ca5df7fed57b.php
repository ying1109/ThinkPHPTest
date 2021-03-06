<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap.css">
    <title>Document</title>
</head>
<body>

<div class="form-group">
    <div class="col-sm-1 col-sm-offset-1">
        <button type="submit" id="confirmReceipt" class="btn btn-success">提交</button>
    </div>
</div>

</body>

<script type="text/javascript" src="/Public/Admin/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="/Public/Admin/js/bootstrap.js"></script>
<script type="text/javascript">
    $(function(){
        $("#confirmReceipt").click(function () {
            var count      = 10;
            var cound_down = setInterval(countDown, 1000);
            $("#confirmReceipt").attr("disabled", true);
            $("#confirmReceipt").text(count + " 秒后提交！");
            function countDown() {
                count--;
                $("#confirmReceipt").attr("disabled", true);
                $("#confirmReceipt").text(count + " 秒后提交！");
                if (count == 0) {
                    $("#confirmReceipt").text('提交').removeAttr('disabled');
                    clearInterval(cound_down);
                }
            }
        })
    });
</script>

</html>