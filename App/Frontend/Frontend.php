<?php

    const DefaultView = CONFIG['Frontend']['DefaultView'];
    const IsOnline = CONFIG['Frontend']['Online'];

    function ShowView()
    {
        // Créer une redirection 404 si la vue n'existe pas ou que l'URI est DefaultView (pour ne faut pas dupliquer les pages  dans l'indexation...).
        if ($_SERVER['REQUEST_URI'] != '/' && ($_GET['view'] == DefaultView || (!file_exists(ViewsPath . '/' . $_GET['view'] . '.php')))) {
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