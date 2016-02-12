/*
    配置页JS功能
    @version: 1.0.1
    @time:  2016.2.12 15:00
*/
  $(function(){

    /* 
      加载数据返回到表单上
    */
    $.getJSON("config.json",function(result){      
        $("[name='mainSwitch']").val(result[0].mainSwitch);
        $("[name='additionSwitch']").val(result[1].additionSwitch);
        //$("[name='additionNumber']").val(result[1].additionNumber);
        $("[name='denySuccess']").val(result[1].denySuccess);
        $("[name='denyFault']").val(result[1].denyFault);
        $("[name='autoAssignment']").val(result[1].autoAssignment);
        $("[name='seatSwitch']").val(result[2].seatSwitch);        
        $("[name='seatMethod']").val(result[2].seatMethod);
    });

/* 
    数字转制为人类可读的状态
*/
    function Num2Text(number){
      var getnum = parseInt(number);
      if(!getnum){
        return "关";
      }else if(getnum==1){
        return "开";
      }else{
        return String(getnum);
      }
    }

/*
    HTML展示当前的配置信息
        待完善接口函数 可配置功能对数据进行定期或手动刷新
*/
    function getMsgText(){
      $.getJSON("config.json",function(result){    
        globalNum = result[1].additionNumber;
        // 这个全局变量是提供给PostAdditionNumber函数的
        $("opr:eq(0)").text(Num2Text(result[0].mainSwitch));
        $("opr:eq(1)").text(Num2Text(result[1].additionSwitch));        
        // $("opr:eq(2)").text(getAdditionRemain());
        // 待完善的接口函数，用于获得当前补选座位的剩余数目
        $("[name='additionNumber']").prop("placeholder","当前设置为："+Num2Text(result[1].additionNumber));      
        $("opr:eq(3)").text(Num2Text(result[1].denySuccess));
        $("opr:eq(4)").text(Num2Text(result[1].denyFault));
        $("opr:eq(5)").text(Num2Text(result[1].autoAssignment));
        $("opr:eq(6)").text(Num2Text(result[2].seatSwitch));
        $("opr:eq(7)").text(result[2].seatMethod);
      });      
    }

  /*
    座位剩余数填写若为空，则以原数据返回  
  */
  function postAdditionNumber(){
    if( $("[name='additionNumber']").val()=='' ){
      return String(globalNum);
      // 非常不科学的写法，但是还没有更合适的逻辑
    }else{
      return $("[name='additionNumber']").val();
    }
  }
    getMsgText();
  //  alert($("[name='seatMethod").val());

  /*
    数据提交
  */
    $("#submit").click(function(){
      var postData = [
          {
              "mainSwitch": $("[name='mainSwitch']").val()
          },
          {
              "additionSwitch": $("[name='additionSwitch']").val(),
              "additionNumber": postAdditionNumber(),
              "denySuccess": $("[name='denySuccess']").val(),
              "denyFault": $("[name='denyFault']").val(),
              "autoAssignment": $("[name='autoAssignment']").val()
          },
          {
              "seatSwitch": $("[name='seatSwitch']").val(),
              "seatMethod": $("[name='seatMethod").val()
          }
      ];
      postString = JSON.stringify(postData);
     // alert(postString);
      $.post("action2.php",
          {
            data: postString
          },
        function(){
      });
    });


});
