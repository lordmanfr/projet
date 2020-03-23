<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <section>
    <table width=100%>
 <?php
function additionner ($tabNombre)
{
    // DEBUG
    var_dump($tabNombre);

    // ICI IL FAUT AJOUTER VOTRE CODE POUR REALISER LE TRAVAIL...
    $resultat = 1;  
    // AU DEPART, COMME ON N'A PAS ADDITIONNE ALORS LA SOMME EST EGALE A ZERO

    // ON PARCOURT CHAQUE NOMBRE DANS LE TABLEAU
    foreach($tabNombre as $indice => $nombre)
    {
        // DEBUG
        // var_dump($nombre);
        echo "($indice, $nombre)";

        $resultat -= $nombre;
        // $resultat = $resultat + $nombre;
    }

    return $resultat;
}

// APPEL DE LA FONCTION
$somme = additionner([ 3, 6, 7, 8 ]);   // 24
// $tabNombre = [ 3, 6, 7, 8 ]

echo "<h1>LE RESULTAT EST $somme</h1>";

function ajouterFor ($tabNombre)
{
    // AJOUTER LE CODE AVEC UNE BOUCLE FOR
    // JE METS LA PREMIERE VALEUR DANS LE RESULTAT
    $somme = $tabNombre[0];
    // ET ENSUITE, JE PARCOURS LE 
    for($i=1; $i < count($tabNombre); $i = $i +1)
    {
        $somme -= $tabNombre[$i];    
    }

    return $somme;
}

$somme = ajouterFor([ 3, 6, 7, 8 ]);   // 24

echo "<h1>LE RESULTAT EST $somme</h1>";
//function pour calculer la somme des nombres paires
/*function compter ( $nombres)
{
 $resultat=0;
foreach ($nombres as $nombre)
{
    if($nombre%2 ===0)
    {
        // $resultat += $nombre;
       $resultat = $resultat + $nombre;
    }
}
return $resultat;
}
 
 $resultat= compter([11,7,8,88,66]);

echo "<h1>LE RESULTAT EST $resultat </h1>";*/



 

//il te donne les chiffres pairess et impaires du tableau
  /*function nombrePaires($tabNombre)
  { 
    foreach ($tabNombre as $indice => $nombre)
 { 
  if ($nombre%2==1)      { 
  echo " $nombre.le nombre est impaire  ";     }

  else  {         echo " $nombre.le nombre est paire";     } 
   } } $resultat = nombrePaires([2,4,5,1]);*/
   // ENSUITE, IL FAUT TRADUIRE CES ETAPES EN CODE
   function compterPair($tabNombre)
   {
       // VALEUR INITIALE AU COMPTEUR
       $compteur = 0;
       // IL FAUT CODER LE FONCTIONNEMENT DU CERVEAU
       // MON CERVEAU PREND LES NOMBRES DU PREMIER AU DERNIER
       // EN PROGRAMMATION => BOUCLE
       foreach($tabNombre as $nombre)
       {
           // ET POUR CHAQUE NOMBRE, 
           // MON CERVEAU SE DEMANDE SI CE NOMBRE EST PAIR OU IMPAIR
           // EN PROGRAMMATION => CONDITION if...else...
           if (($nombre % 2) == 0) 
           {
               // PAIR
               // SI LE NOMBRE EST PAIR ALORS ON AUGMENTE LE COMPTEUR DE 1
               // EN PROGRAMMATION => 
               // $compteur++;
               $compteur = $compteur + 1;
           }
           else
           {
               // IMPAIR
               // OPTIONNEL
           }
       }

       return $compteur;
   }

   $resultat = compterPair([ 18, 4, 7, 0, 24, 22, 47, 199 ]);

   echo "<h1>ON A TROUVE $resultat NOMBRES PAIRS</h1>";

   
 
function concatenerTexte($tablettre)
{
    $resultat =$tablettre[0];
   for ($i=1; $i <count($tablettre) ; $i++)
    { 
       $lettre =$tablettre[$i];
       $resultat ="$resultat,$lettre";
   }
   return $resultat;
}

 $texteconcatene= concatenerTexte([ 'a', 'b', 'c', 'd' ]);
 echo "<h1>ON A TROUVE $texteconcatene </h1>";
 // EXO 9

// CREER UNE FONCTION POUR CALCULER LE PRIX TOTAL
// LES 2 TABLEAUX ONT LE MEME NOMBRE D'ELEMENTS
function calculerPrixTotal ($tabQuantite, $tabPrixUnitaire)
{
    // ICI IL FAUT AJOUTER LE CODE MANQUANT
    // PRIXTOTAL = 1x10 + 2x20 + 3x30 + 4x40
    // J'AI PARCOURU LES 2 TABLEAUX
    // POUR PRENDRE CHAQUE ELEMENT
    // ET JE MULTIPLIE LES VALEURS => SOUS-TOTAL
    // ET JE RAJOUTE LE SOUS-TOTAL AU TOTAL
    
    // VALEUR INITIALE
    $total = 0;

    // J'AI PARCOURU LES 2 TABLEAUX
    // BOUCLE => for
    for ($indice=0; $indice < count($tabPrixUnitaire); $indice++)
    {
        // POUR PRENDRE CHAQUE ELEMENT
        // ET JE MULTIPLIE LES VALEURS => SOUS-TOTAL
        $prixUnitaire = $tabPrixUnitaire[$indice];
        $quantite     = $tabQuantite[$indice];
        $sousTotal    = $prixUnitaire * $quantite;

        // ET JE RAJOUTE LE SOUS-TOTAL AU TOTAL
        $total = $total + $sousTotal;    
    }

    return $total;
}


$tabQuantite     = [ 1,  2,  3,  4 ];
$tabPrixUnitaire = [ 10, 20, 30, 40 ];
$prixTotal       = calculerPrixTotal($tabQuantite, $tabPrixUnitaire);    
// $prixTotal => 300 EUROS 

echo "<h1>PRIX TOTAL PANIER: $prixTotal euros</h1>";



// EXO 11

function creerInsertSQL1 ($nomTable, $tabAssoColVal)
{
    // ON DOIT CONCATENER LES INFORMATIONS RECUES EN PARAMETRE
    // POUR OBTENIR LE CODE SQL ATTENDU

    // VALEURS INITIALES
    $liste1 = "";
    $liste2 = "";

    // JE VEUX EXTRAIRE LES CLES DU TABLEAU ASSOCIATIF
    // => BOUCLE
    // ATTENTION: JE SUIS OBLIGE DE CREER LA VARIABLE $valeur 
    // MEME SI ELLE NE SERT PAS

    // ASTUCE: SI J'AI BESOIN DE L'INDICE ALORS JE LE RAJOUTE EN PLUS 
    $indice = 0;
    foreach($tabAssoColVal as $cle => $valeur)
    {
        // echo "(DEBUG:$cle/$valeur)";

        if ($indice == 0)
        {
            // PREMIER ELEMENT: PAS DE VIRGULE
            $liste1 = $liste1 . $cle;
            $liste2 = $liste2 . ":". $cle;
        }
        else
        {
            // LES ELEMENTS APRES: AVEC VIRGULE
            $liste1 = $liste1 . ", " . $cle;
            $liste2 = $liste2 . ", :". $cle;

        }

        // IL NE FAUT PAS OUBLIER DE L'INCREMENTER
        $indice++;
    }

    $resultat = 
<<<CODESQL

INSERT INTO $nomTable
( $liste1 )
VALUES
( $liste2 )

CODESQL;


    // ON DOIT RENVOYER UN TEXTE QUI EST UN CODE SQL
    return $resultat;
}

$requeteSQLPreparee = creerInsertSQL1(
    "newsletter", 
    [ "nom" => "julie", "email" => "julie@nomail.me" ]);

echo "<pre>$requeteSQLPreparee</pre>";

/*
ON DEVRAIT OBTENIR LE TEXTE CONCATENE

INSERT INTO newsletter
( nom, email )
VALUES
( :nom, :email )

*/
// EXO 10
echo "<h1>--- EXO 10</h1>";

/*
    * exo10: CREER UNE FONCTION creerDeleteSQL  
        LA FONCTION PREND 2 PARAMETRES: $nomTable ET $id
        ET RENVOIE LE CODE SQL POUR UN DELETE
        
        ET SI ON APPELLE LA FONCTION
        creerDeleteSQL("contact", 5);

        DEVRA RENVOYER LE TEXTE CONCATENE SUIVANT:

        DELETE FROM contact
        WHERE id = 5

*/

// ETAPE1
// CE CODE SERA DANS UN FICHIER A PART QUI SERA CHARGE AU DEBUT
function creerDeleteSQL ($nomTable, $id)
{
    // IL FAUT CONCATENER LES PARAMETRES POUR OBTENIR LE CODE SQL
    $resultat = 
<<<CODESQL

DELETE FROM $nomTable
WHERE id = $id

CODESQL;

    // LA FONCTION DOIT RENVOYER UN TEXTE QUI EST DU CODE SQL
    return $resultat;
}


// ETAPE2:
$codeSQL = creerDeleteSQL("contact", 5);
echo "<h1>LE CODE SQL EST: $codeSQL</h1>";


echo "<h1>--- EXO 11</h1>";

function creerInsertSQL2 ($nomTable, $tabAssoColVal)
{
    // ON DOIT CONCATENER LES INFORMATIONS RECUES EN PARAMETRE
    // POUR OBTENIR LE CODE SQL ATTENDU

    // VALEURS INITIALES
    $liste1 = "";
    $liste2 = "";

    // JE VEUX EXTRAIRE LES CLES DU TABLEAU ASSOCIATIF
    // => BOUCLE
    // ATTENTION: JE SUIS OBLIGE DE CREER LA VARIABLE $valeur 
    // MEME SI ELLE NE SERT PAS

    // ASTUCE: SI J'AI BESOIN DE L'INDICE ALORS JE LE RAJOUTE EN PLUS 
    $indice = 0;
    foreach($tabAssoColVal as $cle => $valeur)
    {
        // echo "(DEBUG:$cle/$valeur)";

        // ASTUCE: ON UTILISE $indice POUR SAVOIR SI ON EST SUR LE PREMIER ELEMENT
        if ($indice == 0)
        {
            // PREMIER ELEMENT: PAS DE VIRGULE
            $liste1 = $liste1 . $cle;
            $liste2 = $liste2 . ":". $cle;
        }
        else
        {
            // LES ELEMENTS APRES: AVEC VIRGULE
            $liste1 = $liste1 . ", " . $cle;
            $liste2 = $liste2 . ", :". $cle;

        }

        // IL NE FAUT PAS OUBLIER DE L'INCREMENTER
        $indice++;
    }

    $resultat = 
<<<CODESQL

INSERT INTO $nomTable
( $liste1 )
VALUES
( $liste2 )

CODESQL;


    // ON DOIT RENVOYER UN TEXTE QUI EST UN CODE SQL
    return $resultat;
}

$requeteSQLPreparee = creerInsertSQL2(
    "newsletter", 
    [ "nom" => "julie", "email" => "julie@nomail.me" ]);

echo "<pre>$requeteSQLPreparee</pre>";



echo "<h1>--- EXO 12</h1>";

/*
ON DEVRAIT OBTENIR LE TEXTE CONCATENE

INSERT INTO newsletter
( nom, email )
VALUES
( :nom, :email )

*/
/*exo12: CREER UNE FONCTION creerUpdateSQL 
    LA FONCTION PREND 3 PARAMETRES
    LE NOM DE LA TABLE SQL:     $nomTable
    UN TABLEAU ASSOCIATIF:      $tabAssoColVal

    EXEMPLE D'UTILISATION:

    $requeteSQLPreparee = creerUpdateSQL(
                            "newsletter", 
                            [ "nom" => "julie", "email" => "julie@nomail.me" ]);

    echo "<pre>$requeteSQLPreparee</pre>";

    
    ON DEVRAIT OBTENIR LE TEXTE CONCATENE

    UPDATE newsletter
    SET
    nom = :nom,
    email = :email
    WHERE 
    id = :id

 
    // ATTENTION: 
    // LES VALEURS DU TABLEAU ASSOCIATIF NE SONT PAS UTILISEES
    // ON MET DES JETONS (TOKENS) A LA PLACE DES VALEURS
    // SEULS LES CLES DU TABLEAU ASSOCIATIF SERVENT...

    */
  
    echo "<h1>--- EXO 13</h1>";  

$ligne=4;
$colonne=4;
  for ($i=0;$i<$ligne; $i++){
     for ($j=0;$j<$colonne; $j++){
      if(($j+$i)%2==0)
echo 'X';
     else
echo '0';
    }
    echo '<br>';
  }
  echo "<h1>--- EXO 13</h1>"; 

 
 
  $ligne=8;
  $colonne=8;
    for ($i=0;$i<$ligne; $i++){
        echo'<tr>';
       for ($j=0;$j<$colonne; $j++){
        if(($j+$i)%2==0)
  echo '<td>&nbsp</td>';
       else
  echo '<td bgcolor=red>&nbsp</td>';
      }
      echo '</tr>';
    }
   echo "<h1>test</h1>"



   /* function calculerPrixTotal1 ($tabQuantite1, $tabPrixUnitaire)
{
    // ICI IL FAUT AJOUTER LE CODE MANQUANT
    // PRIXTOTAL = 1x10 + 2x20 + 3x30 + 4x40
    // J'AI PARCOURU LES 2 TABLEAUX
    // POUR PRENDRE CHAQUE ELEMENT
    // ET JE MULTIPLIE LES VALEURS => SOUS-TOTAL
    // ET JE RAJOUTE LE SOUS-TOTAL AU TOTAL
    
    // VALEUR INITIALE
    $resultat = 0;

    // J'AI PARCOURU LES 2 TABLEAUX
    // BOUCLE => for
    for ($indice=0; $indice < count($tabPrixUnitaire); $indice++)
    {
        // POUR PRENDRE CHAQUE ELEMENT
        // ET JE MULTIPLIE LES VALEURS => SOUS-TOTAL
        $prixUnitaire = $tabPrixUnitaire[$indice];
        $quantite     = $tabQuantite1[$indice];
        $sousTotal    = $prixUnitaire * $quantite;

        // ET JE RAJOUTE LE SOUS-TOTAL AU TOTAL
        $total = $resultat + $sousTotal;    
    }

    return $total;
}


$tabQuantite1     = [ 1,  2,  3,  4 ];
$tabPrixUnitaire = [ 5, 10, 20, 50, 100, 200, 500 ];
$prixTotal       = calculerPrixTotal($tabQuantite1, $tabPrixUnitaire);    
// $texte = distribuerBillets(240);

echo "<h1>PRIX TOTAL PANIER: $prixTotal euros</h1>";





   /* ON CONSIDERE QU'ON A DES BILLETS DE 5, 10, 20, 50, 100, 200, 500 euros

// CREER UNE FONCTION QUI PREND UN MONTANT EN PARAMETRE
// ET QUI DISTRIBUE LE BON NOMBRE DE BILLETS
// (ON DISTRIBUE LE MOINS DE BILLETS POSSIBLE...)

function distribuerBillets ($montant)
{
    // AJOUTER LE CODE DE LA FONCTION...
    return $resultat;
}

$texte = distribuerBillets(240);
// $texte = "1x200 2x20";

$texte = distribuerBillets(670);
// $texte = "1x500 1x100 1x50 1x20";
*/
  
  ?>


  </table>

  
</html>

 

