<?php
   	//header("Content-type: ".$resul->tipo."\n");
   	$fp=fopen($_GET['file'].'.plist', "r");
	fpassthru($fp);
	echo $_GET['file'];
?>
