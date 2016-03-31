
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

        include('ctr_user.php');
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
                    $content = array(
                        'userID' => $id,
                        'ecardID' => $id,
                        'name' => $name,
                        'descri' => '',
                        'regTime' => time(),
                        'status' => 1);
                    addNewUser($openID, $content);
                    $fb = fopen('../database/debug.txt',"a");
                    fputs($fb,date("m/d H:i:s")." Wechat $id|$name|$openID|$input <br>");
                    fclose($fb);
                    return 1;
                }
            }
        }
        function transText($keyword, $fromUsername){
            // 不知道是否能调用同级函数中的include
            if($keyword=="功能" || $keyword=="菜单" || $keyword=="m" ){
                $transContent = array(
                    'type' => 'text',
                    'str' => "请回复以下数字办理考研自习室业务：\n 1.绑定帐号\n 2.选座\n 3.座位排队\n 4.关注官方微博\n(ฅ• . •ฅ)[测试消息，认真你就输辣]\n警察蜀黍，就是他做的系统\n zhangpeng96.com"
                );
                // 以数组的形式返回数据的内容和类型，注意转义符需要用双引号
            }else if(strlen($keyword) < 2){

                $uid = getUserID($fromUsername);
                switch($keyword){
                    case 1:
                        $transContent = array(
                            'type' => 'text',
                            'str' => "首次关注，请绑定信息。\n发送 姓名+学号（如“张鹏+20140349”）绑定帐号。"
                        );
                    break;
                    case 2:
                        $transContent = array(
                            'type' => 'text',
                            'str' => "戳开链接：http://tikumm.duapp.com/select.php?uid=$uid"
                        );
                    break;
                    case 3:
                        $transContent = array(
                            'type' => 'text',
                            'str' => "戳开链接：http://tikumm.duapp.com/queue.php?uid=$uid"
                        );
                    break;                    
                    case 4:
                        $transContent = array(
                            'type' => 'text',
                            'str' => "戳开链接：http://weibo.com/u/5231945858"
                        );
                    break;
                }
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