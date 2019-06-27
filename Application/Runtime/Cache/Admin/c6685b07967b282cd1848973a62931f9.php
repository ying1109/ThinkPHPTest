<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>表格</title>
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap.css">
</head>
<body>
	
<!-- <div class="panel panel-default">
	<div class="row">
		<div class="col-xs-10">
			<div class="panel-heading">
				<h3 class="panel-title">Panel title</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>
	</div>
</div> -->

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
	        </div>
	    </div>
    </div>
</div>

</body>

<script type="text/javascript" src="/Public/Admin/js/bootstrap.js"></script>

</html>