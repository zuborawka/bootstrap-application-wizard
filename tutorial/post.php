<!DOCTYPE html>
<html>
	<head>
		<title>Recieve the post data</title>
	</head>
	<body>
		<h1>Recieve the post data</h1>
		<div><?php
			if (!empty($_POST)):
				var_dump($_POST);
			endif;
			?></div>
	</body>
</html>
