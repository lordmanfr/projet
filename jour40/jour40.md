## JOUR 40

    LIVESHARE

https://prod.liveshare.vsengsaas.visualstudio.com/join?8C9C82FB09A88B3AC4E9583C942CE184C6DC

    ZOOM

https://zoom.us/j/246790300?pwd=MDlRa0F1VlY4RWZmaVJuN0tpNkpsQT09


## QUESTIONS ?



    * EXERCICE EN JS ;-p

    GENERATEUR DE PDF AVEC QRCODE...

    https://media.interieur.gouv.fr/deplacement-covid-19/


## PROGRAMME DU JOUR

    09H45 - 11H00  WORDPRESS
    11H15 - 12H30  PHP+JS ORIENTE OBJET
    13H30 - 14H30  PROJET EN EQUIPE
    14H30 - 15H30  Vanessa Marcié sur le management par le rire
    15H45 - 16H15  CHECKPOINT PROJET EQUIPE
    16H15 - 17H30  TEMPS INDIVIDUEL



    Vanessa Marcié sur le management par le rire, voici le lien du Zoom pour rejoindre son intervention : https://us04web.zoom.us/meeting/register/vJMqdu-pqD0p67M9HWYYqHy-LGGF7SBtYg



## WORDPRESS DEV


    RESUME: COMBO GAGNANT

    WORDPRESS EN CMS
    AJOUTER EN EXTENSION ADVANCED CUSTOM FIELDS (ACF)
    DEVELOPPER LE THEME

    => PRODUCTIVITE ENORME POUR CREER DES SITES RAPIDEMENT ;-p
    => WP EST AU DESSUS DE 36% DES SITES DANS LE MONDE...

    SHORTCODE       CODE COURT
    PLUGIN          EXTENSION

### SHORTCODE API


    https://codex.wordpress.org/Shortcode_API


    LE CLIENT PEUT REDIGER DU TEXTE, MAIS IL PEUT AVOIR BESOIN D’INSERER UN CONTENU PLUS COMPLEXE (PAR EXEMPLE UNE CARTE GOOGLE MAP, OU UN FORMULAIRE, etc…)

    => LE CLIENT NE SERA PAS ASSEZ COMPETENT POUR LE FAIRE

```php
// SHORTCODE
// https://codex.wordpress.org/Shortcode_API
// LE CLIENT PEUT REDIGER DU TEXTE, 
// MAIS IL PEUT AVOIR BESOIN D’INSERER UN CONTENU PLUS COMPLEXE 
// (PAR EXEMPLE UNE CARTE GOOGLE MAP, OU UN FORMULAIRE, etc…)
// => LE CLIENT NE SERA PAS ASSEZ COMPETENT POUR LE FAIRE

// ON VA AJOUTER LE SHORTCODE [carte]
// [carte]
function carte_func( $atts )
{
    return
<<<CODEHTML
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5807.890850530489!2d5.360126598076349!3d43.294464566131154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9c0c6a1843729%3A0x7d3f3acf189dc3b1!2sVieux-Port%20de%20Marseille!5e0!3m2!1sfr!2sfr!4v1586246172170!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
CODEHTML;

}
// QUAND LE CLIENT VA ECRIRE DANS LE CONTENU [carte], 
// ALORS WORDPRESS VA APPELER LA FONCTION carte_func
// ET REMPLACER LE SHORTCODE PAR LE TEXTE RENVOYE PAR LA FONCTION
add_shortcode( 'carte', 'carte_func' );

```

    NOTE: LE PARAMETRE $atts PERMET DE RECUPERER LES VALEURS DES ATTRIBUTS DES SHORTCODES

    => TRES UTILISE PAR LES EXTENSIONS
    => ATTENTION A NE PAS AVOIR DE CONFLITS DANS LES NOMS DES SHORTCODE...

    NOTE: C'EST A VOUS DEVELOPPEUR DE FOURNIR AU CLIENT 
            LA DOCUMENTATION SUR LES SHORTCODES QU'IL PEUT UTILISER...


### EXTENSIONS/PLUGINS POUR AJOUTER DES FONCTIONNALITES


    AVEC UN PROJET WORDPRESS, LE CHOIX DU THEME EST TRES IMPORTANT
    => 80% DE VOTRE SITE
    => MAIS IL MANQUE TOUJOURS DES FONCTIONNALITES
    => IL FAUT RAJOUTER DES EXTENSIONS POUR COMPLETER

    => UNE EXTENSION POURRA ETRE REUTILISEE SUR PLUSIEURS SITES DIFFERENTS
        (AVEC DES THEMES DIFFERENTS...)

### COMMENT CREER UNE EXTENSION DANS WORDPRESS ?

    DANS LE DOSSIER wp-content/ 
    IL Y A UN SOUS-DOSSIER plugins/
    ET ON VA CREER UN SOUS-SOUS-DOSSIER monplugin/

    wp-content/plugins/monplugin/

    ET ENSUITE CREER UN FICHIER index.php

    wp-content/plugins/monplugin/index.php

    ET ENSUITE RAJOUTER UNE ANNOTATION DANS LE FICHIER index.php

```php
<?php
    
/**
 * Plugin Name: MON SUPER PLUGIN DE LA MORT QUI TUE
 */


```

    => CA Y'EST ON A UNE EXTENSION QUI EST RECONNU PAR WORDPRESS ;-p

    => WORDPRESS DONNE LA POSSIBILITE D'ACTIVER OU DE DESACTIVER UNE EXTENSION
    => IL NE FAUT PAS OUBLIER D'ACTIVER L'EXTENSION POUR UTILISER CES FONCTIONNALITES

    LA RICHESSE DE WORDPRESS REPOSE SUR LES MILLIERS D'EXTENSIONS GRATUITES ET PAYANTES
    => AVANT DE CODER VOTRE EXTENSION, CHERCHER SUR INTERNET CAR ELLE EXISTE SUREMENT DEJA... ;-p

    ATTENTION: SECURITE
    LES DEVELOPPPEURS D'EXTENSIONS SONT PARFOIS DES AMATEURS
    => LA PLUPART DES FAILLES DE SECURITE PROVIENNENT DES EXTENSIONS...


    ASSEZ RECENT: IL Y A UN OUTIL DE SANTE DU SITE DANS LA PARTIE ADMIN
    /wp-admin/site-health.php

    SUIVRE LES ACTUALITES SUR LES PROBLEMES DE SECURITE...
    https://www.wpserveur.net/failles-de-securite-plugins-wordpress-semaine-15-6/

    POUR RENFORCER LA SECURITE
    IL Y A DES EXTENSIONS COMME 
    WORDFENCE
    SUCURI

    ET SUIVRE LES TUTOS SUR INTERNET... ;-p
    https://kinsta.com/fr/blog/securite-wordpress/


    PERFORMANCES DU SITE:
    CHAQUE EXTENSION ACTIVEE VA AJOUTER DU CODE A EXECUTER
    => ALOURDIR VOTRE SITE
    => SUIVRE LES PERFORMANCES DU SITE
    => IDEALEMENT: GARDER MOINS DE 10 EXTENSIONS ACTIVEES...
    => DANS LA REALITE: GENERALEMENT, LES SITES UTILISENT DES DIZAINES D'EXTENSIONS :-/

    => PIEGE COURANT DES CLIENTS QUI NE PASSENT PAS UN DEVELOPPEUR
    => ILS ACTIVENT PLEIN D'EXTENSIONS QUI NE SONT UTILISEES QUE A <10% DES POSSIBILITES
    => ATTENTION AUX CONFLITS ENTRE THEME ET LES EXTENSIONS ET AUSSI ENTRE EXTENSIONS

    => VEILLE REGULIERE A EFFECTUER POUR SE GARDER A JOUR...

    => AVANTAGE DE DEVELOPPER: 
        ON PEUT OPTIMISER EN NE RAJOUTANT QUE LE CODE NECESSAIRE AU PROJET...


## EXTENSION UTILE POUR LES FORMULAIRES: CALDERA FORMS

    VERSION GRATUITE

    https://fr.wordpress.org/plugins/caldera-forms/


    VERSION PAYANTE

    https://calderaforms.com/


    ON CREE LES FORMULAIRES EN GLISSER / DEPOSER

    => ET L'EXTENSION DONNE UN SHORTCODE

    [caldera_form id="CF5e8c402c3dd68"]

    QUI SERA REMPLACE PAR LE CODE HTML DU FORMULAIRE



## INTRODUCTION A LA METHODE AGILE

    MAINTENANT QUE VOUS AVEZ ETE CONFRONTE AUX PROBLEMATIQUES DU TRAVAIL EN EQUIPE ;-p

    IL Y A EU UN MANIFESTE SUR LA METHODE AGILE

    https://agilemanifesto.org/iso/fr/manifesto.html


    MANIFESTE: UN GROUPE QUI DECLARE DES VALEURS COMMUNES