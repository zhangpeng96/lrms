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


function refreshList(){
		$data = new SQlite('../database/global.db');
		$str = $data -> RecordArray("SELECT id,descri,avali FROM seat");
		//读列表
		$time = time();
		$obj = array(
			'resData' => array(
				'results' => array(
				),
				'agru' => array(
					'number' => 15,
					'count' => 1,
					'token' => '5ds450zFfsdf',
					'timestamp' => $time
				)
			),
			'resStatus' => 200
		);
		//创建数组
		$i = 0;
		foreach($str as $value){
			$obj['resData']['results'][$i]['id'] = (int)$value['id'];
			$obj['resData']['results'][$i]['avali'] = (int)$value['avali'];
			$obj['resData']['results'][$i]['content'] = $value['descri'];			
			$i ++;
		}		
		$foo_json = json_encode($obj);
		$fp = fopen('../database/seat_status.json',"w");
        fputs($fp,$foo_json);
        fclose($fp);
////////////   Debug Thread		///////////
		$fb = fopen('../database/debug.txt',"a");
        fputs($fb,date("m/d H:i:s")." refreshJSON <br>");
        fclose($fb);   
//////////////////////////////////////////

}
function selectSeat($uid, $order){
	$data = new SQlite('../database/global.db');
	// 注意路径的使用，不适当将报错
	$data -> query(
	"UPDATE seat
	SET	avali = 0,
		owner = $uid,
		timestamp = ".time()." 
	WHERE  id = $order"
	);
	refreshList();
	echo 'success';
	// 这里直接使用update函数，暂时不做查询avali值以判断是否可选的安全措施
}
selectSeat($_POST['uid'], $_POST['order']);
?>








