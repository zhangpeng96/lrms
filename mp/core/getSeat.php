<?php

include('class.sqlite3.php');
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
		//循环赋值
		/*
		print_r($str);
		echo "<br>";
		$foo_json = json_encode($obj);
		echo $foo_json;*/
	}
refreshList();

?>