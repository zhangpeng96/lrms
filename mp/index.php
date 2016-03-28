<!DOCTYPE HTML>
<html>
<head>
<link rel="shortcut icon" href="http://www.zhangpeng96.com/favicon.ico" />
<link rel="apple-touch-icon" href="http://www.zhangpeng96.com/apple-touch-icon-precomposed.png" />
<title>选座位</title>
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
.icon-seat {
  display: inline-block;
  width: 48px;
  height: 48px;
  background: url('assets/svg/seat.svg');
  background-size: 48px 48px;
  color: #fff;
  text-align: center;
}
.avali{
  fill: #94d31b; 
}
.empty {
  color: #888;
}


</style>

</head>
<body class="bg">
<div class="wrapper">
  <div class="content">
    <div class="icon-seat avali">1</div>
    <div class="icon-seat avali">2</div>
    <div class="icon-seat avali">3</div>
    <div class="icon-seat avali">4</div>
    <div class="icon-seat avali">5</div>
    <div class="icon-seat avali">6</div>
    <div class="icon-seat avali">7</div>
    <div class="icon-seat avali">8</div>
    <div class="icon-seat avali">9</div>
    <div class="icon-seat avali">10</div>
    <div class="icon-seat avali">11</div>
    <div class="icon-seat avali">12</div>
    <div class="icon-seat avali">13</div>
    <div class="icon-seat avali">14</div>
    <div class="icon-seat avali">22</div>
    <div class="icon-seat avali">23</div>
    <div>
    </div>
  </div>
</div>

</div>
</body>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script>
  $(".icon-seat").click(function(){
    var uid = 20140333;
    $.post('select.php',
      {
        'order': $(this).val(),
        'uid': uid
      },
      function(data){

      },
      "json");
  })
  function getState(){    
    $.getJSON('getState.php?type=seat&token=' + token, function(result){
      $.each(result.resData.results, function(i, field){
        $(".swipe-wrap").append(
        "<div><div class=\"search-title\">"+field.id+"</div><div class=\"search-url\"><i class=\"fa fa-mixcloud\"></i> "+field.avali+"</div><div class=\"search-content\">"+field.content+"</div>"
          );
      });
    });
  }

</script>
</html>