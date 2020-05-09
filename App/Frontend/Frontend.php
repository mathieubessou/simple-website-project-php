<?php

	/*
		This file is part of the simple-website-project-php package.

		Copyright (c) Mathieu BESSOU

		MIT License

		For the license information, view the LICENSE file distributed with this source code.
	*/
	

	
	
    const DefaultView = CONFIG['Frontend']['DefaultView'];
    const IsOnline = CONFIG['Frontend']['Online'];

    function ShowView()
    {
        // Créer une redirection 404 si: 
        // La vue n'existe pas
        // L'URI est DefaultView (pour ne faut pas dupliquer les pages  dans l'indexation...).
        // Un point d'intérogation (?) y est présent. (Plutôt que d'utiliser $_GET, créer des pages pour chaques paramètres. C'est une des limitation de ce projet pour rester le plus simple possible).
        if ($_SERVER['REQUEST_URI'] != '/' && ($_GET['view'] == DefaultView || (!file_exists(ViewsPath . '/Frontend/' . $_GET['view'] . '.php')) || strpos($_SERVER['REQUEST_URI'], '?'))) {
            header('HTTP/1.0 404 Not Found');
            if (IsOnline) {
                $viewPath = ViewsPath . '/Warning/404.php';
                require $viewPath; // Affichage de la vue
            }
            else {
                echo CONFIG['Frontend']['OfflineMessage'];
            }
        }
        elseif (!IsOnline) {
            header('HTTP/1.1 503 Service Unavailable');
            header('Retry-After: 3600');
            echo CONFIG['Frontend']['OfflineMessage'];
        }
        else
        {
            $viewPath;
            if ($_SERVER['REQUEST_URI'] == '/') {
                $viewPath = ViewsPath . '/Frontend/' . DefaultView . '.php';
            }
            else {
                $viewPath = ViewsPath . '/Frontend/' . $_GET['view'] . '.php';
            }
            require $viewPath; // Affichage de la vue
        }
    }


    
    // Gestion du mode maintenance
    if (IsOnline) {
        require_once TemplatePath . '/frontend/online.php';
    }
    else {
        require_once TemplatePath . '/frontend/offline.php';
    }