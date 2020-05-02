<?php
/*
    NOTICE:
    - Pour insérer le caractère " il faut utiliser le caractère d'échappement \ placé devant comme ceci: \"
    
*/


const CONFIG = [
    /* Paramètres du Backend */
    "Backend" => [
        // Définit si la partie Administration est accessible.
        // Valeur: true|false
        "Online" => true,

        // Définit le chemin pour se connecter à l'administration (Backend).
        // Exemple: Si le chemin indiqué est path-for-connection, l'adresse pour se connecter sera:
        // domain.ext/backend/path-for-connection ou domain.ext/backend/path-for-connection/
        // Ceci est une protection supplémentaire. Si personne d'autre que l'administrateur connait ce chemin, il sera plus difficile de s'y connecter pour un autre utilisateur.
        // Ca évite aussi que des personnes tentent de se connecter et finissent par bloquer l'accès au Backend.
        "SpecialPath" => "path-for-connection",

        // Définit le mot de passe pour accéder à l'administration (Il faut utiliser un mot de passe long pour plus de sécurité.)
        "Password" => "password-for-connect-to-backend",

        // Définit la vue à afficher par défaut
        "DefaultView" => "home"
    ],


    /* Paramètres du Frontend */
    "Frontend" => [
        // Définit si la partie visible par les visiteurs est accessible. False affiche un message indiquant que le site est en maintenance.
        // Valeur: true|false
        "Online" => true,

        // Définit le message qui est affiché lorsque le site est hors ligne.
        "OfflineMessage" => "The site is currently under maintenance.",

        // Définit la vue à afficher par défaut
        "DefaultView" => "home"
    ],


    /* Paramètres du formulaire de contact */
    "ContactForm" => [
        // Définit si le formulaire de contact est actif.
        // Valeur: true|false
        "IsContactFormEnabled" => false,
        // Adresse email où les messages seront transmis.
        "ContactEmail" => "",
        // Définit le texte qui sera affiché en dessous du formulaire.
        "FormMentions" => "",
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