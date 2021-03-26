<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style_burger.css">
    <link rel="stylesheet" type="text/css" href="css/navigation.css">

    <title>Mon portfolio en ligne</title>
  </head>
  <body>
    <!-- contenu du site -->
    <!-- header -->
    <header class="container-fluid header">
        <nav class="main-navigation">
          <div class="nav-wrapper">
            <p><a href="#" class="logo">Mon portfolio</a></p>
              <input type="checkbox" id="menu-checkbox" class="menu-checkbox">
              <label for="menu-checkbox" class="menu-toggle">&equiv; Menu</label>
              <ul class="menu">
                <li><a href="#">Accueil</a></li>
                <li><a href="#about">A propos</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
          </div>
        </nav>      
    </header>
    <!-- end header -->
    <!-- bannière -->
    <section class="container-fluid banner">
      <div class="ban">
        <img src="img/ban.jpg" alt="Bannière du Site">
      </div>
      <div class="inner-banner">
        <h1>Bienvenue sur mon portfolio</h1>
        <a href="#contact"><button class='btn btn-custom'>Contactez moi !</button></a>
      </div>
    </section>
    <!-- end banière -->
    <!-- à propos -->
    <section class="container-fluid about">
      <div class="container">
            <h2 id="about">A propos de moi</h2>
            <hr class="separator">
         <div class="row">
          <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
            <h2>Etudes</h2>
            <p>J'ai intégré le 11 mai 2020 la formation au "Titre professionelle développeur web et web mobile" de 1304 heures au Greta Côte d'Azur.</p>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p class="cv"><a href="CV_Développeur_web_23-09-2019.pdf" download="mon_cv_2020.pdf"><button class="btn btn-custom">Mon CV</button></a></p>
          </article> 
          <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
            <h2>Expérience</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </article>
          <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
            <h2>Hobies</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </article>
        </div>
      </div>
      
    </section>
    <!-- end à propos -->
    <!-- portfolio -->
    <section class="container-fluid portfolio">
      <div class="container">
        <h2 id="portfolio">Mon portfolio</h2>
        <hr class="separator">
        <div class="row">
          <article class="col-md-3 collg-3 col-xs-12 col-sm-12 item-folio">
            <img src="img/IMG01.jpg">
          </article>
          <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">
            <img src="img/IMG02.jpg">
          </article>
          <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">
            <img src="img/IMG03.jpg">
          </article>
          <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">
            <img src="img/IMG04.jpg">
          </article>
          <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">
            <img src="img/IMG05.jpg">
          </article>
          <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">
            <img src="img/IMG06.jpg">
          </article>
          <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">
            <img src="img/IMG07.jpg">
          </article>
          <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">
            <img src="img/IMG08.jpg">
          </article>
        </div>
      </div>

    </section>
    <!-- end portfolio -->
    <!-- footer / contact -->
    <footer class="container-fluid footer">
      <div class="container">
          <h2 id="contact">Contactez moi</h2>
          <hr class="separator">
            <?php 
              if(isset($_POST['envoyer']) AND $_POST['envoyer']='Envoyer'){
                /*echo "<pre>";
                print_r($_POST);
                echo "</pre>";*/
                $message="Nom : ".$_POST['name']."\nEmail : ".$_POST['email']."\nMessage : ".$_POST['message'];
                mail('gnut@gnut.eu','Message du formulaire du portfolio',$message);
                echo '<p class="alert">Votre message à bien été envoyé</p>';
              }
         
            ?>
            <div class="row">
            
              <div class="col-md-6 col-md-offset-3 formulaire">
                <div class="well well-sm">
                  <form class="form-horizontal" action="#contact" method="post">
                  <fieldset>
                             
                    <!-- Name input-->
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="name">Nom</label>
                      <div class="col-md-9">
                        <input id="name" name="name" type="text" placeholder="Votre nom" class="form-control" required>
                      </div>
                    </div>
            
                    <!-- Email input-->
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="email" >Votre E-mail</label>
                      <div class="col-md-9">
                        <input id="email" name="email" type="email" placeholder="Votre email" class="form-control" required>
                      </div>
                    </div>
            
                    <!-- Message body -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="message">Votre message</label>
                      <div class="col-md-9">
                        <textarea class="form-control" id="message" name="message" placeholder="Merci d'entrer your message ici..." rows="5"></textarea>
                      </div>
                    </div>
            
                    <!-- Form actions -->
                    <div class="form-group">
                      <div class="col-md-12 text-right">
                        <button type="submit" name="envoyer" value="Envoyer" class="btn btn-primary btn-custom">Envoyer</button>
                      </div>
                    </div>
                  </fieldset>
                  </form>
                </div>
              </div>
            
            </div>
          <p><?php
        $jours=['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche'];
        $mois=['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];
        echo "Nous sommes le ".$jours[date('N')-1].' '.date('j').' '.$mois[date('n')].' '.date('Y') ; ?>  -  Copyrignt Mr Gérald COL &copy; .Tous droits réservés.</p>
      </div>
      
    </footer>
    <!-- end footer / contact -->

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
