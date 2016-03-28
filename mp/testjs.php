<?php
   $json = file_get_contents('guaranty.json');
   $data = json_decode($json);
   echo $data -> mainText;
?>