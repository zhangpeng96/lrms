<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>学生花名册 - LRMS</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
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
				<li class="active">学生花名册</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">学生花名册</h1>
			</div>
		</div><!--/.row-->
				<div class="alert bg-success" role="alert" style="display: none;">
					<span class="glyphicon glyphicon-check"></span> 20160999「刘渊」成功绑定微信（2016/1/22 12:48:33）<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
				</div>		
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<button type="submit" class="btn btn-primary">出勤不足</button>
						<button type="submit" class="btn btn-primary">删除学生</button>
						<button type="reset" class="btn btn-default">取消</button>
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" >Item ID</th>
						        <th data-field="id" data-sortable="true">学号</th>
						        <th data-field="name"  data-sortable="true">姓名</th>
						        <th data-field="times" data-sortable="true">打卡次数</th>
						        <th data-field="rate"  data-sortable="true">出勤率</th>
						        <th data-field="status" data-sortable="true">状态</th>						        
						        <th data-field="pos" data-sortable="true">座位号</th>
						        <th data-field="date" data-sortable="true">选座时间</th>
						    </tr>
						    </thead>
						</table></div>
					</div>
				</div>
		</div><!--/.row-->	
		
		
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
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
			$("#nav-menu li:eq(3)").addClass("active");
			$("div").dblclick(function(){
				$(".alert").show();
			});
		});
	</script>	
</body>

</html>
