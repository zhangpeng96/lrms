<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>系统配置 - LRMS</title>

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
				<li class="active">系统配置</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">系统配置</h1>
			</div>
		</div><!--/.row-->
				<div class="alert bg-success" role="alert" style="display: none;">
					<span class="glyphicon glyphicon-check"></span> 配置修改成功！<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
				</div>		
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading" style="float:right">
						<button type="submit" class="btn btn-primary">生效</button>
						<button type="reset" class="btn btn-default">取消</button></div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form">
								<div class="form-group">
									<label>系统总开关（当前：开）</label>
									<select class="form-control">
										<option>开</option>
										<option>关</option>
									</select>
								</div>
								<hr>
								<div class="form-group">
									<label>补选总开关（当前：开）</label>
									<select class="form-control">
										<option>开</option>
										<option>关</option>
									</select>
									<label>补选座位数目（还剩余：83）</label>
									<input class="form-control" placeholder="当前设置为：55">
									<label>拒绝已成功的选座（当前：开）</label>
									<select class="form-control">
										<option>开</option>
										<option>关</option>
									</select>
									<label>拒绝出勤不合格的选座（当前：关）</label>
									<select class="form-control">
										<option>关</option>
										<option>开（10天）</option>
										<option>开（20天）</option>
										<option>开（1月）</option>
										<option>开（2月）</option>
										<option>开（3月）</option>
									</select>
									<label>补选座位排队（当前：关）</label>
									<select class="form-control">
										<option>关</option>
										<option>开（5人）</option>
										<option>开（10人）</option>
										<option>开（20人）</option>
										<option>开（50人）</option>
										<option>开（100人）</option>
									</select>
								</div>
							</form>
						</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>选号总开关（当前：开）</label>
									<select class="form-control">
										<option>开</option>
										<option>关</option>
									</select>
									<label>选号方式（当前：扫码）</label>
									<select class="form-control">
										<option>扫码</option>
										<option>微信</option>
									</select>
									<label>选号加密方式（当前：MD5）</label>
									<select class="form-control">
										<option>无</option>
										<option>MD5</option>
										<option>base64</option>
									</select>
									<hr>									
									<label>保证书内容设置</label>
									<textarea class="form-control" rows="6"></textarea>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
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
			$("#nav-menu li:eq(1)").addClass("active");
			$(".btn-primary").click(function(){
				$(".alert").show();
			});
			$("div .glyphicon-remove").click(function(){
				$(this.parent).hide();
			});
		});
	</script>	
</body>

</html>
