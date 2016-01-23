	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="assets/img/logo.png" height="28px" style="margin-top: -5px"></img></a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> 管理员 <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> 信息</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-cog"></span> 配置</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> 注销</a></li>
						</ul>
					</li>
				</ul>
			</div>							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="搜索">
			</div>
		</form>
		<ul class="nav menu" id="nav-menu">
			<li><a href="status.php"><span class="glyphicon glyphicon-dashboard"></span> 开始</a></li>
			<li><a href="config.php"><span class="glyphicon glyphicon-th"></span> 系统配置</a></li>
			<li><a href="seats.php"><span class="glyphicon glyphicon-stats"></span> 出勤月统</a></li>
			<li><a href="student.php"><span class="glyphicon glyphicon-list-alt"></span> 学生花名册</a></li>
			<li role="presentation" class="divider"></li>
			<li><a href="login.php"><span class="glyphicon glyphicon-user"></span> 登陆页面</a></li>
		</ul>
		<div class="attribution">Powered by <a href="http://www.zhangpeng96.com/">ZHANGPENG96.COM</a></div>
	</div><!--/.sidebar-->
		