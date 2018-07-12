<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Locataire, BnB Office, votre conciergerie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- MATERIALIZE -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <!-- TYPO MENU NAVIGATION -->
    <link href="https://fonts.googleapis.com/css?family=Raleway+Dots" rel="stylesheet">
    <!-- TYPO CHIFFRE -->
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <!-- TYPO TITRE HEADER -->
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <!-- TYPO TITRE SERVICES -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <!-- FOOTER -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <!-- ICONS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="confirmation.css" />


</head>



<body>
    <div class="contact-pageheader">
        <div class="container scale-up-center">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="contact-caption">
                        <h1 class="contact-title">Message bien reçu !</h1>
                        <p class="contact-text">On se dépêche de vous répondre, surveillez votre boîte mail.</p>
                        <p >Retour automatique à l'accueil du site d'ici quelques instants </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
<?php

$nomInternaute = htmlspecialchars($_POST['nom']);
$emailInternaute = $_POST['email'];
$telephoneInternaute = $_POST['telephone'];
$quiInternaute = $_POST['qui'];
echo $_POST['qui'];
$messageInternaute = $_POST['textarea'];

$mail = 'contact@bnb-office.fr'; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{
    $passage_ligne = "\r\n";
} else {
    $passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
// $message_txt = $messageInternaute; // à changer
$message_html = "<html><head></head><body>
<div>Nom : ".$nomInternaute."</div>
<div>Téléphone : ".$telephoneInternaute."</div>
<div>Email : ".$emailInternaute."</div>
<div>Type : ".$quiInternaute."</div>
<div>Message : ".$messageInternaute."</div>
</body></html>";

//==========

//=====Création de la boundary
$boundary = "-----=" . md5(rand());
//==========

//=====Définition du sujet.
$sujet = "demande d'information site BnB Office";
//=========

//=====Création du header de l'e-mail.
$header = "From:" . $emailInternaute . $passage_ligne;
$header .= "Reply-to:" .$emailInternaute . $passage_ligne;
$header .= "MIME-Version: 1.0" . $passage_ligne;
$header .= "X-Priority: 3".$passage_ligne;
$header .= "Content-Type: multipart/alternative;" . $passage_ligne . " boundary=\"$boundary\"" . $passage_ligne;
//==========

//=====Création du message.
$message = $passage_ligne . "--" . $boundary . $passage_ligne;
//=====Ajout du message au format texte.
$message .= "Content-Type: text/plain; charset=\"ISO-8859-1\"" . $passage_ligne;
$message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
$message .= $passage_ligne . "Nom : ". $nomInternaute . $passage_ligne;
$message .= $passage_ligne . "Téléphone : ". $telephoneInternaute . $passage_ligne;
$message .= $passage_ligne . "type : ". $quiInternaute . $passage_ligne;
$message .= $passage_ligne . "voici la demande : ".$messageInternaute . $passage_ligne;
//==========
$message .= $passage_ligne . "--" . $boundary . $passage_ligne;
//=====Ajout du message au format HTML
$message .= "Content-Type: text/html; charset=\"ISO-8859-1\"" . $passage_ligne;
$message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
$message .= $passage_ligne . $message_html . $passage_ligne;
//==========
$message .= $passage_ligne . "--" . $boundary . "--" . $passage_ligne;
$message .= $passage_ligne . "--" . $boundary . "--" . $passage_ligne;
//==========

//=====Envoi de l'e-mail.
mail($mail, $sujet, $message, $header);
//==========



?>

<script>
setTimeout(" window.location.href='../index.php' ", 5500);
</script>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- SCRIPT  -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</body>

</html>