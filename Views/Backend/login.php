<?php

	/*
		This file is part of the simple-website-project-php package.

		Copyright (c) Mathieu BESSOU

		MIT License

		For the license information, view the LICENSE file distributed with this source code.
	*/
	

	

    // Connexion au Backend
    $connectionError = false;
    if (isset($_POST['backendUsername'], $_POST['backendPassword'])) {
        BackendLogin::login($_POST['backendUsername'], $_POST['backendPassword']);
        $connectionError = true;
    }

    echo BackendLogin::isLogged();
    // Si on est connecté: rediriger vers la page par défaut du backend
    if (BackendLogin::isLogged()) {
        header('location:/backend/' . CONFIG['Backend']['SpecialPath'] . '/');
    }
?>
<h1>Backend login</h1>
<?php
    if ($connectionError) {
        $errorMessage;
        if (BackendLogin::isBackendLocked()) {
            $errorMessage = BackendLogin::LockedMessage;
        }
        else {
            $errorMessage = BackendLogin::WarningMessage;
        }
        echo '<div id="swpp_WarningMessage"><p>'.$errorMessage.'</p></div><br><br>';
    }
?>


<form action="" method="post">
    <label for="backendUsername">Backend username</label><br>
    <input type="text" id="backendUsername" name="backendUsername" required><br>
    <label for="backendPassword">Backend password</label><br>
    <input type="password" id="backendPassword" name="backendPassword" required><br><br>
    <input type="submit" value="Se connecter">
</form>