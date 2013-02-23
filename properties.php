<?php
   	//header("Content-type: ".$resul->tipo."\n");
   	$fp=fopen($_GET['file'], "r");
	fpassthru($fp);
?>
