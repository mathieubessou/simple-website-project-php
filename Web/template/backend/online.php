<?php
	// Connexion à la base de donnée
	/*$db = DbConnect::newConnection(
		CONFIG['DbInfo']['ServerName'],
		CONFIG['DbInfo']['DbName'],
		CONFIG['DbInfo']['Username'],
		CONFIG['DbInfo']['Password'],
		CONFIG['DebugMode']
	);*/

	/* Récupère le chemin de la vue (dans l'URI)
	$view = '';
	$pos = strpos($_SERVER['REQUEST_URI'], '?');
	if ($pos === false) {
		$view = $_SERVER['REQUEST_URI'];
	}
	else {
		$view = substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], '?'));
	}
	*/
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
		<?=ShowView()?>
	</body>
</html>