<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>系统配置 - LRMS</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.11.1.min.js"><\/script>')</script> 
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<? require('inc.nav.php');?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
      <li class="active">系统配置</li>
    </ol>
  </div>
  <!--/.row-->  
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">系统配置</h1>
    </div>
  </div>
  <!--/.row-->
  <div class="alert bg-success" role="alert" style="display: none;"> <span class="glyphicon glyphicon-check"></span> 配置修改成功！<a href="#" class="pull-right close"><span class="glyphicon glyphicon-remove"></span></a> </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading" style="float:right">
          <button type="submit" id="submit" class="btn btn-primary">生效</button>
          <button type="reset" class="btn btn-default">取消</button>
        </div>
        <div class="panel-body">
          <div class="col-md-6">
            <form role="form">
              <div class="form-group">
                <label>系统总开关（当前：<opr></opr>）</label>
                <select class="form-control" name="mainSwitch">
                  <option value="1">开</option>
                  <option value="0">关</option>
                </select>
              </div>
              <hr>
              <div class="form-group">
                <label>选座总开关（当前：<opr></opr>）</label>
                <select class="form-control" name="additionSwitch">
                  <option value="1">开</option>
                  <option value="0">关</option>
                </select>
                <label>拒绝已成功的选座（当前：<opr></opr>）</label>
                <select class="form-control" name="denySuccess">
                  <option value="1">开</option>
                  <option value="0">关</option>
                </select>
                <label>拒绝出勤不合格的选座（当前：<opr></opr>）</label>
                <select class="form-control" name="denyFault">
                  <option value="0">关</option>
                  <option value="10">开（10天）</option>
                  <option value="20">开（20天）</option>
                  <option value="30">开（1月）</option>
                  <option value="60">开（2月）</option>
                  <option value="90">开（3月）</option>
                </select>

              </div>
            </form>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label>排队总开关（当前：<? echo "开"; ?>）</label>
                <select class="form-control" name="autoAssignment">
                  <option value="0">关</option>
                  <option value="1">开</option>
                </select>      
                <label>剩余座位数</label>
                <text></text>                    
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /.col--> 
  </div>
  <!-- /.row --> 
  
</div>
<!--/.main--> 
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
		});
	</script>
</body>
</html>
