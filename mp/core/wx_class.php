<?php
/**
  * wechat php
*/
class weChat
{
	public function valid()
    {
        $echoStr = $_GET["echostr"];
        //valid signature , option
        if($this->checkSignature()){
        	echo $echoStr;
        	exit;
        }
    }
    public function responseMsg()
    {
		//get post data, May be due to the different environments
        function register($input, $openID){
            if(!$input){
                return -1;
            }else{
                $regData = explode("+",$input);
                if (count($regData) <= 1){
                    return 0;
                }else{
                    $name = $regData[0];
                    $id = $regData[1];
                    include('ctr_user.php');
                    $content = array(
                        'userID' => $id,
                        'ecardID' => $id,
                        'name' => $name,
                        'descri' => '',
                        'regTime' => time(),
                        'status' => 1);
                    addNewUser($openID, $content);
                    $fp = fopen('id.txt',"a");
                    fputs($fp,$openID.'|'.$name.'|'.$id);
                    fclose($fp);                
                    return 1;
                }
            }
        }
        function transText($keyword, $fromUsername){
            if($keyword=='1'){
                $transContent = array(
                    'type' => 'text',
                    'str' => '菜单列表'
                );
            }else{                
                switch(register($keyword, $fromUsername)){
                    case 0:
                        $transContent = array(
                            'type' => 'text',
                            'str' => '输入错误'
                        );
                    break;
                    case 1:
                        $transContent = array(
                            'type' => 'text',
                            'str' => '成功绑定！'
                        );                    
                    break;
                    default:
                    $transContent = array('type' => 'text','str' => 'data3');
                }
            }
            return $transContent;            
        }


		$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
      	//extract post data
		if (!empty($postStr)){
                /* libxml_disable_entity_loader is to prevent XML eXternal Entity Injection,
                   the best way is to check the validity of xml by yourself */
                libxml_disable_entity_loader(true);
              	$postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
                $fromUsername = $postObj->FromUserName;
                $toUsername = $postObj->ToUserName;
                $keyword = trim($postObj->Content);
                $textTpl = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[%s]]></MsgType>
							<Content><![CDATA[%s]]></Content>
							<FuncFlag>0</FuncFlag>
							</xml>";             
                
				if(!empty( $keyword ))
                {
                    $strData = transText($keyword, $fromUsername);
              		$msgType = $strData['type'];
                	$contentStr = $strData['str'];
                	$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                	echo $resultStr;
                }else{
                	echo "Input something...";
                }

        }else {
        	echo "";
        	exit;
        }
    }
		
	private function checkSignature()
	{
        // you must define TOKEN by yourself
        if (!defined("TOKEN")) {
            throw new Exception('TOKEN is not defined!');
        }
        
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        		
		$token = TOKEN;
		$tmpArr = array($token, $timestamp, $nonce);
        // use SORT_STRING rule
		sort($tmpArr, SORT_STRING);
		$tmpStr = implode( $tmpArr );
		$tmpStr = sha1( $tmpStr );
		
		if( $tmpStr == $signature ){
			return true;
		}else{
			return false;
		}
	}
}

?>