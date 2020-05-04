<?php
/*
    This file is part of the simple-website-project-php package.

    Copyright (c) Mathieu BESSOU

    MIT License

    For the license information, view the LICENSE file distributed with this source code.
*/


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

        // Définit l'identifiant pour se connecter à l'administration (Backend).
        // Ceci est une protection supplémentaire. Si personne d'autre que l'administrateur connait cet identifiant, il sera plus difficile d'accéder au Backend (à l'administration) pour un autre utilisateur.
        // Il est conseillé de le personnaliser pour qu'il soit encore plus difficile pour une tiers personne de se connecter au Backend.
        // Pour être valide, l'identifiant contenir au moins 3 caractères.
        "Username" => "admin",

        // Définit le mot de passe pour accéder à l'administration (Il faut utiliser un mot de passe long pour plus de sécurité.)
        // Attention! Il est conseillé de créer un mot de passe réservé exclusivement pour la connexion au backend de ce projet (site).
        // Pour être valide, le mot de passe doit contenir au moins: 10 caractères et au moins 1 de chaque type suivant: minuscule, majuscule, chiffre.
        // Après 3 tentatives de connexion échouée, l'accès au backend sera bloqué. Pour le débloquer, il faut supprimer le fichier lockedBackend qui se trouve à la racine du projet.
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