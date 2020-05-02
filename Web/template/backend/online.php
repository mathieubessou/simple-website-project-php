<?php
	// Connexion BDD
    require_once __DIR__ . "/../../../Tools/DbConnect.php";
	DbConnect::newConnection(
		CONFIG['DbInfo']['ServerName'],
		CONFIG['DbInfo']['DbName'],
		CONFIG['DbInfo']['Username'],
		CONFIG['DbInfo']['Password']
	);

	if (preg_match('#^/backend/'.$backendSpecialPath.'(?:$|/.*)#', $_SERVER['REQUEST_URI'])) {
		$isBackendSpecialPath = true;
	}
		// Extraction de la vue
		$view = preg_replace('#^'.$backendSpecialPath.'/?#', '', $_GET['view']);

		// créer une redirection 404 si la vue n'existe pas'.
		if (... || !$isBackendSpecialPath) {
			header('HTTP/1.0 404 Not Found');
			require __DIR__ . '/../../template/frontend/online.php';
			exit(0);
		}
		else {
			session_start();
			if ($view == '') { // vue par défaut
				
			}
			else
			{
				
			}
		}
?>
<!DOCTYPE HTML>
<html>
	<head>

	</head>

	<body>

	</body>
</html>
