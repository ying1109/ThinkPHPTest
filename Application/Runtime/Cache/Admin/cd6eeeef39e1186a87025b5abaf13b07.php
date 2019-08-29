<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>间隔时间才能点击</title>
	<link rel="stylesheet" href="/Public/bootstrap-3.3.7-dist/css/bootstrap.css">
	<style>
		.btn1 {
			margin-left: 30px;
			padding: 6px 12px;
			border: 1px solid transparent;
			border-radius: 4px;
		}
		.info {
			background-color: #5bc0de;
			color: #ffffff;
			border-color: #46b8da;
		}
		.btn1[disabled] {
			opacity: .65;
			box-shadow: none;
		}
	</style>
</head>
<body>
	<!--<button type="button" class="btn btn-info" onclick="disabledSubmitButton()">确认</button>-->
	<br>
	<br>
	<!--<button type="button" class="btn btn-info">提交</button>-->
	<button type="button" class="btn1 info">提交1</button>
	<br>
	<br>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-4">
			<button type="submit" class="btn btn-success">提交2</button>
		</div>
	</div>
</body>

<script src="/Public/Admin/js/jquery-3.3.1.js"></script>
<script src="/Public/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<script src="/Public/js/disabledClick.js"></script>
<script type="text/javascript">
    $('.btn1').click(function () {
        $(".btn1").attr({"disabled":"disabled"});     //控制按钮为禁用

        var second = 10;
        $(".btn1").text(second + '秒后点击');
        var intervalObj = setInterval(function () {
            second--;
            $(".btn1").text(second + '秒后点击');
            if(second == 0){
                $(".btn1").text('提交');
                $(".btn1").removeAttr("disabled");//将按钮可用
				/* 清除已设置的setInterval对象 */
                clearInterval(intervalObj);
            }
        }, 1000 );

//		var text = $('.btn1').text();
//        disabledClick(text);

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
            },
			error:function (e) {
                console.log(data);
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