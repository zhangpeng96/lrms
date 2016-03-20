<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LRMS登陆</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<style>
.logo img{
	width: 100%;
	padding-bottom:5%;
}
</style>

<body>
  <div class="col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
      <div class="logo">
        <img src="assets/img/login-logo.png">
      </div>
    <div class="login-panel panel panel-default">
      <div class="panel-heading">登陆</div>
      <div class="panel-body">
        <form role="form">
          <fieldset>
            <div class="form-group">
              <input class="form-control has-warning" id="email" placeholder="用户名" name="email" type="text" autofocus>
            </div>
            <div class="form-group">
              <input class="form-control" id="pwd" placeholder="密码" name="password" type="password" value="">
            </div>
            <div class="checkbox">
              <label>
                <input name="remember" type="checkbox" value="Remember Me">
                记住我 </label>
            </div>
            <div style="text-align:center">
            <a id="submit" class="btn btn-primary">登陆</a>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <!-- /.col--> 

<script src="js/jquery-1.11.1.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script>
      function checkPwd(){
          if ($("#pwd").val().match(/^[0-9a-zA-Z]+$/) && $("#pwd").val().length>7) { 
              $("#pwd").parent().removeClass('has-error');
              $("#pwd").parent().removeClass('has-warning');
              $("#pwd").parent().addClass(' has-success'); 
              return true;            
          }else{
            return false;
          }
      }
      function checkUser(){
          if ($("#email").val().length>3) { 
              $("#email").parent().removeClass('has-error');
              $("#email").parent().removeClass('has-warning');
              $("#email").parent().addClass(' has-success'); 
              return true;            
          }else{
            return false;
          }
      }
      function checkMsg() { 
        if ($("#email").val() == "") { 
          $("#email").parent().addClass(' has-warning');
          $("#email").focus();
        }
        if ($("#pwd").val() == "") { 
          $("#pwd").parent().addClass(' has-warning');
          $("#pwd").focus();
        }
        if(!checkPwd()){
          $("#pwd").parent().addClass(' has-error');
          $("#pwd").focus();          
        }
        if(!checkUser()){
          $("#email").parent().addClass(' has-error');
          $("#email").focus();          
        }
      }
      $("#submit").click(function(){
        checkMsg();
      });

</script>
</body>
</html>
