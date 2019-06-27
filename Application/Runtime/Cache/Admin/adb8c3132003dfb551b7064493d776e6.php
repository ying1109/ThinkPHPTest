<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>全选或反选</title>
</head>
<body>
	<div class="checkbox">
	    <label>
	        <input type="checkbox" name="id" class="checkbox" value="1">1
	    </label>
	</div>
	<div class="checkbox">
	    <label>
	        <input type="checkbox" name="id" class="checkbox" value="2">2
	    </label>
	</div>
	<div class="checkbox">
	    <label>
	        <input type="checkbox" name="id" class="checkbox" value="3">3
	    </label>
	</div>
	<div class="checkbox">
	    <label>
	        <input type="checkbox" name="id" class="checkbox" value="4">4
	    </label>
	</div>
	<div class="checkbox">
	    <label>
	        <input type="checkbox" name="id" class="checkbox" value="5">5
	    </label>
	</div>
	<div class='table-footer'>
	    <a href="javascript:;" class="btn btn-default" onclick="allCheck()">全选</a>
	    <a href="javascript:;" class="btn btn-default" onclick="turnCheck()">反选</a>
	    <a href="javascript:;" class="btn btn-primary" onclick="batchDel()">删除</a>
	</div>
</body>

<script type="text/javascript">
	// 全选
	function allCheck(){
	    var checkbox = document.getElementsByClassName('checkbox');
	    for ( var i=0 ; i<checkbox.length ; i++ ){
	        checkbox[i].checked = 'checked';
	    }
	}
	// 反选
	function turnCheck(){
	    var checkbox = document.getElementsByClassName('checkbox');
	    for ( var i=0 ; i<checkbox.length ; i++ ){
	        if( checkbox[i].checked ){
	            checkbox[i].checked = '';
	        }else{
	            checkbox[i].checked = 'checked';
	        }
	    }
	}
</script>
</html>