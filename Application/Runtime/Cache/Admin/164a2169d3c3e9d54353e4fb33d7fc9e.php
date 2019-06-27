<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	a: <input id="a" onkeyup="changeInputB(this)" type="text" /><br><br>
	b: <input id="b" type="text" /><br><br>
	c: <input id="c" onkeyup="changeInputC(this.id)" type="text" /><br><br>
</body>
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
</script>
</html>