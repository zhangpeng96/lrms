<?php
/**
 * ================================
 * Copyright 2014-2015 SJIAO Studio
 * http://www.zhangpeng96.com/sccs/
 * ================================
 * Version:beta
 * Date:2016-3-30
 */
date_default_timezone_set("Asia/Shanghai");
require_once('class.sqlite3.php');

function selectSeat($uid, $order){
	$data = new SQlite('../database/global.db');
	// 注意路径的使用，不适当将报错
	$data -> query(
	"UPDATE seat
	SET	avali = false,
		owner = $uid,
		timestamp = ".time()." 
	WHERE  id = $order"
	);
	// 这里直接使用update函数，暂时不做查询avali值以判断是否可选的安全措施
}
?>








