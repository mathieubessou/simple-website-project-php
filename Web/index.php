<?php
    // Configuration
	require_once __DIR__ . "/../config.php";


	// Gère si c'est le frontend ou le backend qui doit être affiché
	if (isset($_GET['app']) && $_GET['app'] == 'Backend') {
		// Gestion de l'accès au backend
		if (CONFIG['backendOnline']) {
			require_once __DIR__ . '/template/backend/online.php';
		}
		else {
			require_once __DIR__ . '/template/backend/online.php';
		}
	}
	else {
		// Gestion du mode maintenance
		if (CONFIG['frontendOnline']) {
			require_once __DIR__ . '/template/frontend/online.php';
		}
		else {
			require_once __DIR__ . '/template/frontend/offline.php';
		}
	}
?>