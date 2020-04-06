<?php
/*
function hunter ($lord)
{
    echo "<h4>(PHP A BESOIN DE CHARGER $lord)</h4>";
    require_once "php/class/site.php";

}
spl_autoload_register("hunter");
//man:: display ("material");
box::math();

*/


function chargerCodeClasse ($parametre)
{
  //  echo "<h4>(PHP A BESOIN DE CHARGER $parametre)</h4>";

    // DEBUG 
    // echo "<h4>(PHP A BESOIN DE CHARGER $parametre)</h4>";
    // ???
    // SI ON VEUT FAIRE PLAISIR A PHP, IL FAUT CHARGER LE CODE DE LA CLASSE ATTENDUE
    // ON A ETE MALIN
    // LE FICHIER A LE MEME NOM QUE LA CLASSE
    require_once "php/class/$parametre.php";

}

// CE SERA PHP QUI VA APPELER LA FONCTION chargerCodeClasse
spl_autoload_register("chargerCodeClasse");

// ON FAIT DE LA POO
// ON APPELLE UNE METHODE RANGEE DANS UNE CLASSE
//site::math();
site::afficherPage("index");
lord::physique();
lord::math();

