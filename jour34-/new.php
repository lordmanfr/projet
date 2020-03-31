<?php


// ETAPE1: DECLARATION DE LA CLASSE ET DES METHODES
class Enseignant
{
    // PROGRAMMATION PAR CLASSE => METHODE static
    static function faireGreve ()
    {
        echo "(ON FAIT GREVE)";
    }

    static function corrigerExamen ()
    {

    }

    static function expliquer ()
    {

    }
}

// ETAPE2: APPEL A LA METHODE STATIC EN PASSANT PAR LA CLASSE
Enseignant::faireGreve();


