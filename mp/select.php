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

</style>

</head>
<body class="bg">
<div class="wrapper">
  <div class="content">
<embed src="assets/svg/seat_demo.svg" type="image/svg+xml" />
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
    $.post('core/select.php',
      {
        'order': $(this).val(),
        'uid': uid
      },
      function(data){

      },
      "json");
  })
  function getState(){    
    $.getJSON('database/seat_status.json', function(result){
      $.each(result.resData.results, function(i, field){
        $(".swipe-wrap").css();
      });
    });
  }
  

</script>
</html>