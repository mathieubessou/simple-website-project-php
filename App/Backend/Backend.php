<?php
    const DefaultView = CONFIG['Backend']['DefaultView'];
    const IsOnline = CONFIG['Backend']['Online'];
    const IsFrontendOnline = CONFIG['Frontend']['Online'];
    const SpecialPath = CONFIG['Backend']['SpecialPath'];


    // Si le chemin spécial est invalide
    $invalidePath = false;
    if (!preg_match('#^/backend/'.SpecialPath.'(?:$|/.*)#', $_SERVER['REQUEST_URI'])){
        $invalidePath = true;
    }
    // Créer une redirection vers le Frontend si la vue n'existe pas.
    $view = preg_replace('#^'.SpecialPath.'/?#', '', $_GET['view']);
    if ($invalidePath || ($view != '' && // Si l'URI est différente de /backend/SpecialPath/ ou /backend/SpecialPath
    !file_exists(ViewsPath . '/Backend/' . $view . '.php'))) {
        // Création de la fonction équivalente à Frontend
        function ShowView() {
            if (IsFrontendOnline) {
                $viewPath = ViewsPath . '/Warning/404.php';
                require $viewPath; // Affichage de la vue
            }
            else {
                echo CONFIG['Frontend']['OfflineMessage'];
            }
        }
        // Gestion du mode maintenance
        if (IsFrontendOnline) {
            header('HTTP/1.0 404 Not Found');
            require_once TemplatePath . '/frontend/online.php';
        }
        else {
            header('HTTP/1.1 503 Service Unavailable');
            header('Retry-After: 3600');
            require_once TemplatePath . '/frontend/offline.php';
        }
        exit(0);
    }

    

    function ShowBackendView()
    {
        $view = preg_replace('#^'.SpecialPath.'/?#', '', $_GET['view']);

        if (!IsOnline) {
            //echo CONFIG['Backend']['OfflineMessage']; n'est pas implémenté.
        }
        else
        {
            $viewPath;
            if ($view == '') {
                $viewPath = ViewsPath . '/Backend/' . DefaultView . '.php';
            }
            else {
                $viewPath = ViewsPath . '/Backend/' . $view . '.php';
            }
            require $viewPath; // Affichage de la vue
        }
    }


    
    // Gestion du mode maintenance
    if (IsOnline) {
        require_once TemplatePath . '/backend/online.php';
    }
    else {
        header('HTTP/1.1 503 Service Unavailable');
        header('Retry-After: 3600');
        require_once TemplatePath . '/backend/offline.php';
    }