<?php
	// Connexion BDD
    require_once __DIR__ . "/../../../Framework/DbConnect.php";
	$bdd = DbConnect::newConnection(
		CONFIG['DbInfo']['ServerName'],
		CONFIG['DbInfo']['DbName'],
		CONFIG['DbInfo']['Username'],
		CONFIG['DbInfo']['Password']
	);

	
?>
<!DOCTYPE HTML>
<html>
	<head>

	</head>

	<body>

	</body>
</html>