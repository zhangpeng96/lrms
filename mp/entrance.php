<?php
/**
  * wechat php test
*/
// 载入库
include ('core/wx_class.php');
// 定义 token
define("TOKEN", "weixin");
$wechatObj = new weChat();
//$wechatObj -> valid();
$wechatObj -> responseMsg();


?>