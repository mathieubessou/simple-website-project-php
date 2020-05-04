<?php
	// Connexion à la base de donnée
	/*$db = DbConnect::newConnection(
		CONFIG['DbInfo']['ServerName'],
		CONFIG['DbInfo']['DbName'],
		CONFIG['DbInfo']['Username'],
		CONFIG['DbInfo']['Password']
	);*/
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="robots" content="noindex">
		<link rel="icon" type="image/png" href="/template/images/icon.png" />
	</head>

	<body>
		<?=ShowBackendView()?>
	</body>
</html>