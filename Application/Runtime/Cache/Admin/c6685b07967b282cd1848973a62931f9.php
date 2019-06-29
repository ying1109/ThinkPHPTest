<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>表格</title>
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/jquery-editable-select.css">
</head>
<body>

<div class="panel panel-default">
    <div class="row">
    	<div class="panel-heading">
    		<h3 class="panel-title">Panel title</h3>
    	</div>

    	<div class="panel-body">
	        <div class="col-xs-12">
	            <table class="table table-hover">
	                <thead>
	                    <tr>
	                        <td>ID</td>
	                        <td>管理员账号</td>
	                        <td>管理员名称</td>
	                        <td>组别名称</td>
	                        <td>操作</td>
	                    </tr>
	                </thead>
	                <tbody>
	                    <tr>
	                        <td>1</td>
	                        <td>2</td>
	                        <td>3</td>
	                        <td>4</td>
	                        <td>
	                            <a href="<?php echo U('Auth/admin_edit', array('admin_id'=>$v['admin_id']));?>">编辑</a>
	                        </td>
	                    </tr>
	                </tbody>
	            </table>

				<div class="form-group">
					<div class="col-sm-1 col-sm-offset-1">
						<button type="submit" id="confirmReceipt" class="btn btn-success">提交</button>
					</div>
				</div>
	        </div>
	    </div>
    </div>
</div>

</body>

<script type="text/javascript" src="/Public/Admin/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="/Public/Admin/js/bootstrap.js"></script>
<script type="text/javascript">
    $(function(){
		$("#confirmReceipt").click(function () {
			var count = 10;
			var cound_down = setInterval(countDown, 5000);
			function countDown() {
				$("#confirmReceipt").attr("disabled", true);
				$("#confirmReceipt").val("请等待 " + count + " 秒在点击提交！");
				if (count == 0) {
					$("#confirmReceipt").val('提交').removeAttr('disabled');
					clearInterval(cound_down);
				}
				count--;
			}
		})
    });


//    $(function () {
//        $('#btn').click(function () {
//            var count = 10;
//            var countdown = setInterval(CountDown, 500);
//            function CountDown() {
//                $("#btn").attr("disabled", true);
//                $("#btn").val("Please wait " + count + " seconds!");
//                if (count == 0) {
//                    $("#btn").val("点击我").removeAttr("disabled");
//                    clearInterval(countdown);
//                }
//                count--;
//            }
//        })
//    });


//    $(function(){
//        setInterval("cancelDisabled()", 5000);
//    });
//    function cancelDisabled(){
//        $('#confirmReceipt').removeAttr('disabled');
//    }


</script>

</html>