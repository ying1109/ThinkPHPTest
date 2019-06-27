<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>测试项目</title>

    <!-- ================== Css Files ================== -->
    <link href="/Public/Admin/css/root.css" rel="stylesheet">
    <!-- lLeft -->
    <link href="/Public/Admin/css/base/left.css" rel="stylesheet">
    <link href="/Public/Admin/css/jquery-mCustomScrollbar.min.css" rel="stylesheet">
    <link href="/Public/Admin/css/custom.css" rel="stylesheet">
    <!-- Left Menu -->
    <!-- <link href="/Public/Admin/css/base/left-menu.css" rel="stylesheet"> -->

    <!-- 顶部其他引入文件 -->
    
</head>

<body>

    <!-- ================= 顶部导航开始 ================= -->
    
        
    
    <!-- 顶部导航结束 -->

    <!-- ================== 侧边栏开始 ================== -->
    
        <div class="page-wrapper">

    <!-- sidebar-wrapper  -->
    <nav id="sidebar" class="sidebar-wrapper">
        <!-- sidebar-content  -->
        <div class="sidebar-content">
            <a href="#" id="toggle-sidebar" style="margin-top: 15px;">
                <i class="fa fa-bars"></i>
            </a>
            <div class="sidebar-brand">
                <a href="#" style="font-size: 30px;">夏沫烟雨</a>
            </div>
    
            <!-- sidebar-header  -->
            <div class="sidebar-header">
                <div class="user-pic">
                    <img class="img-responsive img-rounded" src="/Public/Admin/img/user.jpg" alt="">
                </div>
                <div class="user-info">
                    <span class="user-name">Jhon <strong>Smith</strong></span>
                    <span class="user-role">Administrator</span>
                    <div class="user-status">                       
                        <a href="#"><span class="label label-success">Online</span></a>                           
                    </div>
                </div>
            </div>

            <ul class="navMenu">
    <li> <a href="javascript:;" class="afinve"> <i class="icon_1"></i> <span class="">主页</span> <span class="arrow"></span> </a>
        <ul class="sub-menu">
            <li><a href="javascript:;"><span>用户管理</span></a></li>
            <li><a href="javascript:;"><span>角色管理</span></a></li>
            <li><a href="javascript:;"><span>权限管理</span></a></li>
            <li><a href="javascript:;"><span>我的任务</span></a></li>
            <li > <a href="javascript:;" class="afinve"><span>个人信息</span><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="javascript:;" ><span>我的个人资料</span></a></li>
                    <li><a href="javascript:;"><span>我的日历</span></a></li>
                    <li><a href="javascript:;"><span>我的收件箱</span></a></li>
                    <li><a href="javascript:;"><span>我的任务</span></a></li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
        </div>        
    </nav>
</div>


    
    <!-- 侧边栏结束 -->

    <!-- =================== 内容开始 =================== -->
    <div class="content">
        <!-- 页眉开始 -->
        
            <!-- <div class="page-header">
    <h1 class="title">导航列表</h1>
    <ol class="breadcrumb">
        <?php if($diyilan['name'] != ''): ?><li><a href="<?php echo ($diyilan["value"]); ?>"><?php echo ($diyilan["name"]); ?></a></li><?php endif; ?>
        <?php if($dierlan['name'] != ''): ?><li><a href="<?php echo ($dierlan["value"]); ?>"><?php echo ($dierlan["name"]); ?></a></li><?php endif; ?>
        <?php if($disanlan['name'] != ''): ?><li><a href="<?php echo ($disanlan["value"]); ?>"><?php echo ($disanlan["name"]); ?></a></li><?php endif; ?>
        <?php if($disilan['name'] != ''): ?><li><a href="<?php echo ($disilan["value"]); ?>"><?php echo ($disilan["name"]); ?></a></li><?php endif; ?>
    </ol>

    Start Page Header Right Div
    <div class="right">
        <div class="btn-group" role="group" aria-label="...">
            <a href="index.html" class="btn btn-light">管理控制台</a>
            <a href="javascript:location.reload()" class="btn btn-light"><i class="fa fa-refresh"></i></a>
            <a href="#" class="btn btn-light" id="topstats"><i class="fa fa-line-chart"></i></a>
        </div>
    </div>
    End Page Header Right Div
</div> -->
        
        <!-- 页眉结束 -->

        <!-- 页面开始 -->
        
	<!-- 输入A分 -->
	a: <input id="a" onkeyup="changeInputB(this)" type="text" /><br><br>
	<!-- 自动2倍输入B分 -->
	b: <input id="b" type="text" /><br><br>

	<!-- 输入小写字母释放键盘按钮立即变为大写 -->
	c: <input id="c" onkeyup="changeInputC(this.id)" type="text" /><br><br>


        <!-- 页面结束 -->

        <!-- 页脚开始 -->
        
            <!-- Start Footer -->
<div class="bomb-tc" style="display: none;">
    <div>
        <h4 class="ac">退出登录</h4>
        <p class="ac">确认退出登录</p>
        <div class="ac">
            <button type="button" class="btn btn-default" style="margin-right: 5px;">确认</button>
            <button type="button" class="btn" onclick="javascript:document.querySelector('.bomb-tc').style.display='none';">取消</button>
        </div>
    </div>
</div>

<div class="row footer">
    <div class="col-md-6 text-left">
        Copyright © <?php echo date("Y",time()); ?> <a href="http://www.ufent.com/" target="_blank">优粉网络</a> All rights reserved.
    </div>
    <div class="col-md-6 text-right">
        Design and Developed by <a href="http://www.ufent.com/" target="_blank">优粉网络</a>
    </div> 
</div>
<!-- End Footer -->
        
        <!-- 页脚结束 -->
    </div>
    <!-- 内容结束 -->

    <!-- =================== Js Files =================== -->
    <script type="text/javascript" src="/Public/Admin/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/bootstrap.js"></script>
    <!-- left -->
    <script src="/Public/Admin/js/base/left/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/Public/Admin/js/base/left/custom.js"></script>

    <!-- 低部其他引入文件 -->
    
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


</body>
</html>