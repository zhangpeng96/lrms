<!DOCTYPE HTML>
<html>
<head>
<link rel="shortcut icon" href="http://www.zhangpeng96.com/favicon.ico" />
<link rel="apple-touch-icon" href="http://www.zhangpeng96.com/apple-touch-icon-precomposed.png" />
<title>座位排队</title>
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
  padding: 10px;
  width: 70%;
}
h1, h3 {
  color: #eee;
}


</style>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script> 
</head>
<body class="bg">
<div class="wrapper">
  <div class="content" id="page-1">
    <h1>座位排队</h1>
  
    <h3><?
    if( rand(0,1) ==0 ){
      echo "你好，你的排队请求已经提交。目前还有3个人排在前面";
    }else{
      echo "排队失败，请重试";
    }
    ?></h3>
    <div>
    </div>
  
  </div>
</div>

</div>
</body>
</html>