<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>保证书内容设置 - LRMS</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/guaranty_config.min.js"></script>
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
      $(".alert").hide();
			$("#nav-menu li:eq(2)").addClass("active");
      $(".close").click(function(){
        $(this).parent().hide();
      });
    });
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<?
	require('inc.nav.php');
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="row">
  <ol class="breadcrumb">
    <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
    <li class="active">保证书设置</li>
  </ol>
</div>
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">保证书设置</h1>
  </div>
</div>
<div class="alert bg-success" role="alert">
    <span class="glyphicon glyphicon-check"></span> 配置修改成功！<a href="#" class="pull-right close">
    <span class="glyphicon glyphicon-remove"></span></a>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading" style="float:right">
        <button type="submit" class="btn btn-primary" id="submit">生效</button>
        <button type="reset" class="btn btn-default" id="cancel">取消</button>
      </div>
      <div class="panel-body">
        <div class="col-md-6">
          <div class="form-group">
            <label>保证书内容设置</label>
            <textarea name="mainText" class="form-control" rows="6"></textarea>
            <hr>
            <label>保证书问题设置</label>
            <select name="questionType" class="form-control">
              <option value="0">关</option>
              <option value="1">选择题</option>
            </select>
            <label>确认阅读验证设置</label>
            <select name="confirmDelay" class="form-control">
              <option value="0">关</option>
              <option value="5">5秒</option>
              <option value="10">10秒</option>
              <option value="20">20秒</option>
              <option value="30">30秒</option>
              <option value="60">1分钟</option>
            </select>
            <hr>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group" id="optionalPanel">
            <div class="input-group has-warning"> <span class="input-group-addon">题干</span>
              <input type="text" class="form-control" placeholder="这里输入题干" name="context1">
            </div>
            <div class="input-group has-success"> <span class="input-group-addon">A.</span>
              <input type="text" class="form-control" placeholder="这里输入正确答案" name="options1">
            </div>
            <div class="input-group has-error"> <span class="input-group-addon">B.</span>
              <input type="text" class="form-control" placeholder="这里输入错误答案" name="options1">
            </div>
            <div class="input-group has-error"> <span class="input-group-addon">C.</span>
              <input type="text" class="form-control" placeholder="这里输入错误答案" name="options1">
            </div>
            <div class="input-group has-error"> <span class="input-group-addon">D.</span>
              <input type="text" class="form-control" placeholder="这里输入错误答案" name="options1">
            </div>
            <br>
            <div class="input-group has-warning"> <span class="input-group-addon">题干</span>
              <input type="text" class="form-control" placeholder="这里输入题干" name="context2">
            </div>
            <div class="input-group has-success"> <span class="input-group-addon">A.</span>
              <input type="text" class="form-control" placeholder="这里输入正确答案" name="options2">
            </div>
            <div class="input-group has-error"> <span class="input-group-addon">B.</span>
              <input type="text" class="form-control" placeholder="这里输入错误答案" name="options2">
            </div>
            <div class="input-group has-error"> <span class="input-group-addon">C.</span>
              <input type="text" class="form-control" placeholder="这里输入错误答案" name="options2">
            </div>
            <div class="input-group has-error"> <span class="input-group-addon">D.</span>
              <input type="text" class="form-control" placeholder="这里输入错误答案" name="options2">
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
