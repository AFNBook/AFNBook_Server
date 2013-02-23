<?php
	$file = file_get_contents('./'.$_GET['file'], FILE_USE_INCLUDE_PATH);
	print $file;
?>
