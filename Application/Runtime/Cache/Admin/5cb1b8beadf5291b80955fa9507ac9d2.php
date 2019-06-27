<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>检测input</title>
</head>
<body>
	<form name="myForm">
		<tr>
			<td style="width: 200px;">
				用户名：<input type="text" name="user"><br>
				密密码：<input type="text" name="psd"><br>
				<input type="submit" name="submit" onclick="return mycheck()" value="登录">
			</td>
		</tr>
	</form>
</body>
<script type="text/javascript">
	function mycheck () {
		if (myForm.user.value == '') {
			alert('用户名不能为空！！');
			// myForm.user.focus();
			return false;
		}
		alert(myForm.user.value);
	}
</script>
</html>