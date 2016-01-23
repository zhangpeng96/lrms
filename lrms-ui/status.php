<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>开始 - LRMS</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<? require('inc.nav.php');?>		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">开始</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">开始</h1>
			</div>
		</div><!--/.row-->
        
        <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >网页模板</a></div>
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<em class="glyphicon glyphicon-shopping-cart glyphicon-l"></em>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">120</div>
							<div class="text-muted">空座位</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<em class="glyphicon glyphicon-comment glyphicon-l"></em>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">52</div>
							<div class="text-muted">新通知</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<em class="glyphicon glyphicon-user glyphicon-l"></em>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">624</div>
							<div class="text-muted">学生</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<em class="glyphicon glyphicon-stats glyphicon-l"></em>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">75%</div>
							<div class="text-muted">平均考勤率</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
				<div class="alert bg-success" role="alert">
					<span class="glyphicon glyphicon-check"></span> 20163452「李白」已签署保证书 <a>点击开始选号</a> <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>					
				</div>
				<div class="alert bg-warning" role="alert">
					<span class="glyphicon glyphicon-warning-sign"></span> 20163452「李白」选号成功「44」号，<a href="#">点击关闭</a>
				</div>
				<div class="panel panel-primary" style="width:80%;">
					<div class="panel-heading">
						手机扫描二维码选座位号
					</div>
					<div class="panel-body">
						<img src="assets/img/demo_qrcode.png"></img>
					</div>
				</div>
		<div class="row">
			<div class="col-md-8">
			
				<div class="panel panel-default chat">
					<div class="panel-heading" id="accordion"><span class="glyphicon glyphicon-comment"></span> 历史消息</div>
					<div class="panel-body">
						<ul>
							<li class="left clearfix">

								<span class="chat-img pull-left">
									<img src="http://placehold.it/80/30a5ff/fff" alt="User Avatar" class="img-circle" />
								</span>
								<div class="chat-body clearfix">
									<div class="header">
										<strong class="primary-font">系统消息</strong> <small class="text-muted">32 分钟前</small>
									</div>
										<div class="alert bg-success" role="alert">
											<span class="glyphicon glyphicon-check"></span> 20163452「李白」已签署保证书 <a>点击开始选号</a> <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>					
										</div>
										<div class="alert bg-warning" role="alert">
											<span class="glyphicon glyphicon-warning-sign"></span> 20163452「李白」选号成功「44」号，<a href="#">点击关闭</a>
										</div>
								</div>
							</li>
						</ul>
					</div>
					
					<div class="panel-footer">
						<div class="input-group">
							<input id="btn-input" type="text" class="form-control input-md" placeholder="输入历史消息的关键词或时间" />
							<span class="input-group-btn">
								<button class="btn btn-success btn-md" id="btn-chat">查找</button>
							</span>
						</div>
					</div>
				</div>
				
			</div><!--/.col-->
			
			<div class="col-md-4">				
				<div class="panel panel-red">
					<div class="panel-heading dark-overlay"><span class="glyphicon glyphicon-calendar"></span>日历</div>
					<div class="panel-body">
						<div id="calendar"></div>
					</div>
				</div>
								
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
		$(function(){
			$(".alert").hide();
			$(".panel-primary").hide();
			$("#nav-menu li:eq(0)").addClass("active");
			$("div").click(function(){
				$(".alert:eq(0)").show();
			});
			$("div").dblclick(function(){
				$(".alert:eq(0)").hide();
				$(".alert:eq(1)").show();
			});
			$(".alert:eq(0) a").click(function(){
				$(".panel-primary").show();
			});
		});
	</script>	
</body>

</html>
