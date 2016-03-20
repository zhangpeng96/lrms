<?php
	$myfile = fopen("guaranty.json", "w") or die("Unable to open file!");
	fwrite($myfile, $_POST['data']);
	fclose($myfile);
?>