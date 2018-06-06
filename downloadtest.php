<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Redirect</title>
</head>
<style>
a {
background-color: blue;
color: black;
transition-duration: 0.25s;
text-align: center;
}
a:hover {
background-color: black;
color: blue;
}
</style>
<body>
	<?php
	$download_src = htmlspecialchars($_GET["q"]);
	echo('<a href="http://hax4u.repl.co/src/' . $download_src . '" download="' . $download_src . '">Download<!download>');
?>
</body>
</html>