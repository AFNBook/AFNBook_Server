<?php
   	//header("Content-type: ".$resul->tipo."\n");
   	$fp=fopen($_GET['file'], "r");
	fpassthru($fp);
	echo $_GET['file'];
?>
