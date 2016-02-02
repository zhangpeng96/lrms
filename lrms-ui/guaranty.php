<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>保证书内容设置 - LRMS</title>
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
      <li class="active">保证书设置</li>
    </ol>
  </div>
  <!--/.row-->
  
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">保证书设置</h1>
    </div>
  </div>
  <!--/.row-->
  <div class="alert bg-success" role="alert" style="display: none;"> <span class="glyphicon glyphicon-check"></span> 配置修改成功！<a href="#" class="pull-right close"><span class="glyphicon glyphicon-remove"></span></a> </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading" style="float:right">
          <button type="submit" class="btn btn-primary">生效</button>
          <button type="reset" class="btn btn-default">取消</button>
        </div>
        <div class="panel-body">
          <div class="col-md-6">
            <form role="form">
              <div class="form-group">
              <label>保证书内容设置</label>
              <textarea class="form-control" rows="6"></textarea>
              <hr>
              <div class="form-group">
                <label>保证书问题设置</label>
                <select class="form-control">
                  <option>关</option>
                  <option>选择题</option>
                  <option>填空题</option>
                </select>
                <label>确认阅读验证设置</label>
                <select class="form-control">
                  <option>关</option>
                  <option>5秒</option>
                  <option>10秒</option>
                  <option>20秒</option>
                  <option>30秒</option>
                  <option>1分钟</option>
                </select>
                <hr>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <div class="input-group has-warning"> <span class="input-group-addon">题干</span>
              <input type="text" class="form-control" placeholder="这里输入题干">
            </div>
            <div class="input-group has-success"> <span class="input-group-addon">A.</span>
              <input type="text" class="form-control" placeholder="这里输入正确答案">
            </div>
            <div class="input-group has-error"> <span class="input-group-addon">B.</span>
              <input type="text" class="form-control" placeholder="这里输入错误答案">
            </div>
            <div class="input-group has-error"> <span class="input-group-addon">C.</span>
              <input type="text" class="form-control" placeholder="这里输入错误答案">
            </div>
            <div class="input-group has-error"> <span class="input-group-addon">D.</span>
              <input type="text" class="form-control" placeholder="这里输入错误答案">
            </div>
          </div>
          <hr>
          <div class="form-group">
            <div class="input-group has-warning"> <span class="input-group-addon">题干</span>
              <input type="text" class="form-control" placeholder="这里输入题干">
            </div>
            <div class="input-group has-success"> <span class="input-group-addon">答案</span>
              <input type="text" class="form-control" placeholder="这里输入正确答案">
            </div>
          </div>
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
			$("#nav-menu li:eq(2)").addClass("active");
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
