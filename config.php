<?php
/*
    NOTICE:
    - Pour insérer le caractère " il faut utiliser le caractère d'échappement \ placé devant comme ceci: \"
    
*/


const CONFIG = [
    // Définit le mot de passe pour accéder à l'administration (Il faut utiliser un mot de passe long pour plus de sécurité.)
    "PasswordAdmin" => "password-for-connect-to-backend",

    // Définit si la partie Administration est accessible (passe automatiquement à false au bout de 5 essais de connexion échoué).
    // Valeur: true|false
    "backendOnline" => true,

    // Définit si la partie visible par les visiteurs est accessible. False affiche un message indiquant que le site est en maintenance.
    // Valeur: true|false
    "frontendOnline" => false,

    // Définit le message qui est affiché lorsque le site est hors ligne.
    "offlineMessage" => "The site is currently under maintenance.",

    // Définit le chemin pour se connecter à l'administration (Backend).
    // Exemple: Si le chemin indiqué est path-for-connection, l'adresse pour se connecter sera:
    // domain.ext/backend/path-for-connection ou domain.ext/backend/path-for-connection/
    // Ceci est une protection supplémentaire. Si personne d'autre que l'administrateur connait ce chemin, il sera plus difficile de s'y connecter pour un autre utilisateur.
    // Ca évite aussi que des personnes tentent de se connecter et finissent par bloquer l'accès au Backend.
    "backendSpecialPath" => "path-for-connection",


    /* Paramètres du formulaire de contact */
    "contactForm" => [
        // Définit si le formulaire de contact est actif.
        // Valeur: true|false
        "isContactFormEnabled" => false,
        // Adresse email où les messages seront transmis.
        "contactEmail" => "",
        // Définit le texte qui sera affiché en dessous du formulaire.
        "formMentions" => "",
    ],
    

    /* Informations de connexion à la base de données */
    "DbInfo" => [
        // Adresse du serveur de la base de données.
        "ServerName" => "localhost",
        // Nom de la base de données.
        "DbName" => "data_base_name",
        // Nom d'utilisateur.
        "Username" => "my_username",
        // Mot de passe de l'utilisateur.
        "Password" => "my_password"
    ]
];