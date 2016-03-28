<!DOCTYPE HTML>
<html>
<head>
<link rel="shortcut icon" href="http://www.zhangpeng96.com/favicon.ico" />
<link rel="apple-touch-icon" href="http://www.zhangpeng96.com/apple-touch-icon-precomposed.png" />
<title>填写保证书</title>
<meta charset="utf-8" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<meta name ="viewport" content ="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
<link rel="stylesheet" href="assets/css/main2.css" />
<style>
.bg {
  background-image: url('assets/img/bg2.jpg');
  background-repeat: repeat-x;
  height: 100%;
}
.wrapper {
  background-color: rgba(255,255,255,0.4);
  margin-left: auto;
  height: 100%;
  margin-right: auto;
  padding: 12%;
  width: 70%;
}


</style>
<?php
   $json = file_get_contents('guaranty.json');
   $data = json_decode($json);
?>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script> 
</head>
<body class="bg">
<div class="wrapper">
  <div class="content" id="page-1">
    <div>SIGN</div>
    <div><? echo $data -> mainText; ?>
    </div>
    <div class="gua-confirm">确认</div>
  </div>
  <div class="content" id="page-2">
    <div></div>
    <div class="question">
      <? echo $data -> question[0] -> context; ?>
    </div>
  </div>
</div>

</div>
</body>
<script>
function delay(){
  var state = 0;
  var time = 60;
  function run(){
    time --;
    $(".gua-confirm").text('Time' + time);
  }  
}
delay();window.setTimeout(run,1000);
</script>
</html>