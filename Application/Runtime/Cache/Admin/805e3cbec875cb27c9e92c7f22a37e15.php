<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>测试登录页面</title>
</head>
<body>
	<div class="login-box">
		<!--<h1>后台登录</h1>-->
		<form method="post" action="">
			<div class="name">
				<label>账号：</label>
				<input type="text" name="username"/>
			</div>
			<div class="password">
				<label>密码：</label>
				<input type="text" name="password"/>
			</div>
			<div class="login">
				<button type="submit" tabindex="5">登录</button>
			</div>
		</form>
	</div>

	<!--<div class="screenbg">-->
		<!--<ul>-->
			<!--<li><a href="javascript:;"><img src="/Public/Admin/img/tea.jpg"></a></li>-->
		<!--</ul>-->
	<!--</div>-->
</body>

<script type="text/javascript" src="/Public/Admin/js/jquery-3.3.1.js"></script>
<script type="text/javascript">

</script>
</html>