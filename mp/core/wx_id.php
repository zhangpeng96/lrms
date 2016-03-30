<?php
/*
*	@name:register function
* 	@version: 1.1.1
*	返回错误码：0输入错误，1返回成功，-1其它错误
*/

// 载入库
include ('wx_class.php');
// 定义 token
define("TOKEN", "weixin");
$wechatObj = new weChat();
//$wechatObj -> valid();
$wechatObj -> responseMsg();



	



?>