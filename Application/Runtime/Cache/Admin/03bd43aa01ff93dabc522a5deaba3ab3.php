<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>自动编辑</title>
</head>
<body>
	<!-- 输入A分 -->
	a: <input id="a" onkeyup="changeInputB(this)" type="text" placeholder="数字" /><br><br>
	<!-- 自动2倍输入B分 -->
	b: <input id="b" type="text" /><br><br>

	<!-- 输入小写字母释放键盘按钮立即变为大写 -->
	c: <input id="c" onkeyup="changeInputC(this.id)" type="text" /><br><br>

	<input type="text" id="username">
	<input type="text" id="password">
	<input type='button' id="login" value='登录'>
</body>

<script src="/Public/Admin/js/jquery-3.3.1.js"></script>
<script type="text/javascript">
	// 编辑A框同时编辑B框
	function changeInputB(obj){
		//获得当前的input的值
		// var a = obj.value * 2;
		var a = document.getElementById('a').value * 2;
		document.getElementById("b").value = a;
	}
	// 编辑C框，同时把C框小写字母变为大写
	function changeInputC(obj) {
		var c = document.getElementById('c').value;
		document.getElementById('c').value = c.toUpperCase();
	}

    $('#login').click(function () {
        var login = $('#username').val();
        var pwd = $('#password').val();
        var url = "<?php echo U('Test/ajax_login');?>";
        alert(login);
        alert(pwd);
        console.log(login);
        console.log(pwd);
        /*$.ajax({
            url: "<?php echo U('Test/ajax_login');?>",
            type: 'post',
            dataType: 'json',
            data:{
                account:login,
                password:pwd,
                code_input:code_input,
                code_admin:code_admin,
            },
            success:function ( data ) {
                console.log(data);
                alert(success);
                if(data.res == 0){
                    alert(data.msg);
                }else{
                    var turl = "<?php echo U('Index/index');?>";
                    location.href = turl;
                }
            },

        })*/
         $.post(url, {account:login, password:pwd}, function(res) {
             console.log(11111111);
		 	alert(11111111);
		 	console.log(res);
		 	if (res.status == 0) {
				alert(res.info);
			} else{
				alert(res.info);
				var turl = "<?php echo U('Index/index');?>";
				location.href = turl;
			};
		 },'json');
    })
</script>
</html>