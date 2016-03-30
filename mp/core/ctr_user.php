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

function addNewUser($openID, $content){
	$data = new SQlite('../database/global.db');
	// 注意路径的使用，不适当将报错
	$data -> query(
	"INSERT INTO user VALUES(
				'$openID',
				{$content['userID']},
				{$content['ecardID']},
				'{$content['name']}',
				'{$content['descri']}',
				{$content['regTime']},
				{$content['status']})"
	);
	// 注意char型数据库值需要用引号包围，否则无法录入
}
/*
$openID = 'ohCgVuNDgJ7y9jXpg0-LFFg-0uxU';
$content = array(
	'userID' => 20149999,
	'ecardID' => 20149999,
	'name' => '张三',
	'descri' => '详细描述',
	'regTime' => time(),
	'status' => 2);
addNewUser($openID, $content);*/
?>








