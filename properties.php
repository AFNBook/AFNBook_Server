<?php
   	header("Content-type: application/x-plist");
   	$fp=fopen($_GET['file'].'.plist', "r");
	fpassthru($fp);
?>
