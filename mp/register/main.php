<?php
/*
*	返回错误码：0输入错误，1返回成功，-1其它错误
*/
	
	if(!$input){
		return -1;
	}else{
		$regData = explode("+",$input);
		if (count($regData) <= 1){
			return 0;
		}else{
			$name = $regData[0];
			$id = $regData[1];
		}
	}



?>