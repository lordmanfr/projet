radio   or chucbox

### TODOLIST

    EXERCICE QUI FAIT PRATIQUER FRONT ET BACK => FULLSTACK

    VERSION AVEC AJAX ET AVEC POO => TECHNOLOGIES RECENTES

    SUR UNE SEULE PAGE => SPA SINGLE PAGE APPLICATION
    * ON VA AVOIR LE FORMULAIRE DE CREATION D'UNE TACHE     (CREATE)
    * ON VA AFFICHER LA LISTE DES TACHES                    (READ)
    * ON POURRA AUSSI SUPPRIMER UNE TACHE                   (DELETE)
    * ON POURRA MODIFIER LE STATUT D'UNE TACHE              (UPDATE)
            TODO        (A FAIRE)
            ONGOING     (EN COURS)
            DONE        (FINI)

    SINGLE PAGE APPLICATION (SPA)
    => WEB APP (APPLICATION WEB)
    => PROGRAMMES QUI S'EXECUTENT DANS UN NAVIGATEUR
    => PLUS D'UN TIERS DES APPS SUR GOOGLE PLAY OU APPSTORE SONT DES WEB APPS
        (DANS LES APPLICATIONS ANDROID OU IOS, IL Y A UN COMPOSANT NAVIGATEUR QUI PERMET DE CREER DES PAGES WEB...)


    ETAPES POUR CREER UN SITE OU UNE APPLICATION
    * MODELISER L'APPLICATION
    * CREER LA MAQUETTE HTML ET CSS
    * MODELISER LA BASE DE DONNEES
    * COMMENCER A AJOUTER LE CODE POUR TRAITER LE FORMULAIRE DE CREATION (CREATE)
    * AJOUTER LE CODE POUR AFFICHER LA LISTE DYNAMIQUE DES TACHES (READ)
    * AJOUTER LA SUPPRESSION (DELETE)
    * AJOUTER LA MODIFICATION (UPDATE)


    * CREER LE DOSSIER todolist-lh
    * CREER LE FICHIER index.php
    * CREER LE CODE HTML POUR UNE PAGE WEB 
    * AJOUTER LA SECTION POUR LE FORMULAIRE DE CREATION
        AJOUTER LE CODE HTML POUR LE FORMULAIRE
        => DE QUELLES INFOS J'AI BESOIN POUR UNE TACHE ?
            titre
            description
            statut
            photo

            ON DOIT RANGER LA TABLE SQL DANS UNE DATABASE   todolist-lh
            ON VA CONNECTER CES INFOS A UNE TABLE SQL       todo
            id              INT             INDEX=PRIMARY   A_I
            titre           VARCHAR(160)
            description     TEXT
            statut          VARCHAR(160)
            photo           VARCHAR(160)

    NOTE: AVEC UN VARCHAR ON PRECISE LA LONGUEUR MAXIMALE DU TEXTE
            VARCHAR(160)    TOUT CE QUI DEPASSE 160 CARACTERES SERA PERDU...
            (TEXT AVEC UNE LONGUEUR MAX DE 65535 CARACTERES...)

    MAINTENANT JE VAIS CREER AVEC PHPMYADMIN LA DATABASE ET LA TABLE SQL...
        DATABASE    todolist-lh    AVEC LE CHARSET utf8mb4_general_ci
        TABLE SQL   todo AVEC 5 COLONNES...

    JE PEUX RETOURNER DANS LE HTML ET COMPLETER MON FORMULAIRE
    ET FAIRE UN PEU DE CSS POUR RENDRE LA PAGE PLUS JOLIE... ;-p

    * ET MAINTENANT POUR LE TRAITEMENT DU FORMULAIRE
        => ON PEUT AJOUTER DE L'AJAX ;-p


    ETAPE1: AJOUTER LE JS POUR BLOQUER L'ENVOI CLASSIQUE DU FORMULAIRE
    ETAPE2: AJOUTER LE JS POUR ENVOYER LES INFOS DU FORMULAIRE AVEC AJAX (fetch)

    https://developer.mozilla.org/fr/docs/Web/Guide/Using_FormData_Objects

    https://developer.mozilla.org/fr/docs/Web/API/Fetch_API/Using_Fetch

## TODOLIST - PARTIE 2

    EN JS, fetch A LE SENS DE "RECUPERER" 
    DONC PLUTOT DANS UN CONTEXTE DE LECTURE D'INFORMATIONS DU SERVEUR WEB
    ICI, ON VA UTILISER fetch AUTANT POUR LA LECTURE QUE L'ECRITURE
    ET COMME JE COMMENCE PAR LE SCENARIO CREATE
    JE COMMENCE A UTILISER fetch DANS UN CONTEXTE EN ECRITURE...

    ON MET EN PLACE UN MOYEN DE COMMUNICATION ENTRE LE NAVIGATEUR ET LE SERVEUR
    NAVIGATEUR                                  => SERVEUR WEB
    JS (formulaires + fetch)                    => PHP ( $_REQUEST )

    SERVEUR WEB                                 => NAVIGATEUR
    PHP ( TABLEAUX ASSOCIATIF + json_encode)    => objet JS (JSON)

    AJOUTER LE CODE PHP ET SQL POUR LE CREATE...

    AJOUTER LE CODE JS ET PHP ET SQL POUR LE READ

    JUSTE AVEC CREATE + READ
    => ON A UN VOLUME DE CODE ASSEZ IMPORTANT
        ET ON SAIT QU'ON DOIT AJOUTER DU CODE POUR LE UPDATE + DELETE

    POUR LE MOMENT, ON TRAVAILLE SUR UNE SEULE TABLE SQL
    => LE CRUD IL FAUT EN FAIRE UN POUR CHAQUE TABLE SQL
    
