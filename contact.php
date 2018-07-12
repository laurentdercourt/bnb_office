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
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/contact.css" />

</head>

<?php include "html/menu.html";?>


<body>
    <div class="container-fluid">
    </div class="row">
    <div class="col-md-12 row-logo-bnb">
    <a href="index.php" ><img src="img/bnb_office_logo_conciergerie_risoul_vars.jpg" class="logo-bnb" alt="BnB Office,votre conciergerie"></a>
    </div>
    </div>
    </div>

    <div class="contact-pageheader">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="contact-caption">
                        <h1 class="contact-title">N'hésitez pas.</h1>
                        <p class="contact-text">Nous nous ferons un plaisir de vous répondre dans les meilleurs délais, dès reception de votre message.</p>
                    </div>
                </div>
                <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12 col-xs-12">
                    <div class="contact-form">
                        <h3 class="contact-info-title">Contactez-nous !</h3>
                        <div class="row">
                            <form action="contact/demande-contact-version-mail.php" method="post">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only " for="Name"></label>
                                        <input name="nom" id="name" type="text" placeholder="Nom" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="email"></label>
                                        <input name="email" id="email" type="text" placeholder="Email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only " for="Phone"></label>
                                        <input name="telephone" id="phone" type="text" placeholder="Téléphone" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label required sr-only" for="select"></label>
                                        <select name="qui" class="form-control">
                                            <option value="">Vous êtes ?</option>
                                            <option value="">Locataire</option>
                                            <option value="">Propriétaire</option>
                                            <option value="">Autre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb20">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="textarea"></label>
                                        <textarea class="form-control pdt20" id="textarea" name="textarea" rows="4" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                    <button class="btn btn-primary">Envoyez</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    </div>



    <!-- FOOTER -->
    <footer>
        <?php include "html/footer.html";?>
    </footer>
    <!-- Footer -->


    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- SCRIPT  -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <!-- script -->
    <script src = "js/menu-app.js" ></script>
</body>

</html>