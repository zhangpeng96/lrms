  $(function(){
    $.getJSON("guaranty.json",function(result){
        $("[name='mainText']").val(result[0].mainText);
        $("[name='questionType']").val(result[1].questionType);
        $("[name='confirmDelay']").val(result[1].confirmDelay);
        $("[name='context1']").val(result[2].context1);        
        $("[name='options1']:eq(0)").val(result[2].options1[0]);
        $("[name='options1']:eq(1)").val(result[2].options1[1]);
        $("[name='options1']:eq(2)").val(result[2].options1[2]);
        $("[name='options1']:eq(3)").val(result[2].options1[3]);
        $("[name='result1']").val(result[2].result1);

        $("[name='context2']").val(result[2].context2);        
        $("[name='options2']:eq(0)").val(result[2].options2[0]);
        $("[name='options2']:eq(1)").val(result[2].options2[1]);
        $("[name='options2']:eq(2)").val(result[2].options2[2]);
        $("[name='options2']:eq(3)").val(result[2].options2[3]);
        $("[name='result2']").val(result[2].result2);
        panelChange($("[name='questionType']").val());
    });
    function panelChange(opt){
      if( opt==1 ){
        $("#optionalPanel").show();
        $("#clozePanel").hide();
      }else if( opt==2 ){
        $("#optionalPanel").hide();
        $("#clozePanel").show();
      }else if( opt==0 ){
        $("#optionalPanel").hide();
        $("#clozePanel").hide();
      }
    }
    $("[name='questionType']").change(function(){
      panelChange($("[name='questionType']").val());
    });
    $("#submit").click(function(){
      var postData = [
          {
              "mainText": $("[name='mainText']").val()
          },
          {
              "questionType": $("[name='questionType']").val(),
              "confirmDelay": $("[name='confirmDelay']").val()
          },
          {
              "context1": $("[name='context1']").val(),
              "options1": [
                  $("[name='context1']").val(),     
                  $("[name='options1']:eq(0)").val(),
                  $("[name='options1']:eq(1)").val(),
                  $("[name='options1']:eq(2)").val(),
                  $("[name='options1']:eq(3)").val()
              ],
              "result1": $("[name='result1']").val(),
              "context2": $("[name='context2']").val(),
              "options2": [
                  $("[name='context2']").val(),     
                  $("[name='options2']:eq(0)").val(),
                  $("[name='options2']:eq(1)").val(),
                  $("[name='options2']:eq(2)").val(),
                  $("[name='options2']:eq(3)").val()
              ],
              "result2": $("[name='result2']").val()
          }
      ];
      postString = JSON.stringify(postData);
      //alert(postString);
      $.post("action.php",
          {
            data: postString
          },
        function(){
          $(".alert").show();
      });


      /*
      $.post("action.php",
          {
            data: postString
          },
        function(data){
          alert(data);
      },
      "text");
      */
    });


  });
