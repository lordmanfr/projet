
<?php

// pour debug
//print_r($_REQUEST);

$nbInfo = count($_REQUEST);
if ($nbInfo > 0)
{
    $nom        = $_REQUEST["nom"];
    $email      = $_REQUEST["email"];
    $message    = $_REQUEST["message"];
    $phone      = $_REQUEST["phone"];
    

    
    $messageStocke =
<<<texte

    nom: $nom
    email: $email
    message:$message
    phone:$phone
 


texte;

    
    file_put_contents("php/model/contact.txt", $messageStocke, FILE_APPEND);

    echo "merci pour votre message $nom ($email). je vous recontacte.";
}

?>
