<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>间隔时间才能点击</title>
	<link rel="stylesheet" href="/Public/Admin/css/bootstrap.css">
</head>
<body>
	<!--<button type="button" class="btn btn-info" onclick="disabledSubmitButton()">确认</button>-->
	<br>
	<br>
	<button type="button" class="btn btn-info">提交</button>
</body>

<script src="/Public/Admin/js/jquery-3.3.1.js"></script>
<script src="/Public/Admin/js/bootstrap.js"></script>
<script src="/Public/js/disabledClick.js"></script>
<script type="text/javascript">
    $('.btn').click(function () {
//        $(".btn").attr({"disabled":"disabled"});     //控制按钮为禁用
//
//        var second = 10;
//        $(".btn").text(second + '秒后点击');
//        var intervalObj = setInterval(function () {
//            second--;
//            $(".btn").text(second + '秒后点击');
//            if(second == 0){
//                $(".btn").text('提交');
//                $(".btn").removeAttr("disabled");//将按钮可用
//				/* 清除已设置的setInterval对象 */
//                clearInterval(intervalObj);
//            }
//        }, 1000 );

		var text = $('.btn').text();
        disabledClick(text);

        $.ajax({
            url: "<?php echo U('Test/clickBtn');?>",
            type: 'post',
            datatype: 'json',
            data:{
                order_id:'12345',
            },
            success:function ( data ) {
                console.log(data);
//                if(data.res == 1){
//                    alert(data.msg);
//                    var turl = "<?php echo U('Order/order_detail');?>?id="+order_id;
//                    window.location.href = turl;
//                }else{
//                    alert(data.msg);
//                    var turl =  "<?php echo U('Order/order_detail');?>?id="+order_id;
//                    window.location.href = turl;
//                }
            }
        })

    })

//    function disabledClick(text) {
//        $(".btn").attr({"disabled":"disabled"});     //控制按钮为禁用
//
//        var second = 10;
//        var intervalObj = setInterval(function () {
//            $(".btn").text(second + '秒后点击');
//            if(second == 0){
////                $(".btn").text('提交');
//                $(".btn").text(text);
//                $(".btn").removeAttr("disabled");//将按钮可用
//				/* 清除已设置的setInterval对象 */
//                clearInterval(intervalObj);
//            }
//            second--;
//        }, 1000 );
//    }
</script>
</html>