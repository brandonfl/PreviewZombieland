<!DOCTYPE html>
<html lang="fr">
<?php require "config.php"; ?>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Zombieland RP by fivelife">
    <meta name="author" content="Glen McMahon">

    <title>Zombieland by FiveLife</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/coming-soon.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" href="img/icon.ico" />
    <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="img/icon.ico" /><![endif]-->

  </head>
  <style>
    html { overflow-y: hidden; }
  </style>

  <body>

    <div class="overlay"></div>

    <div class="masthead">
      <div class="masthead-bg"></div>
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-12 my-auto">
            <div class="masthead-content text-white py-5 py-md-0">
              <h1 class="mb-3" >Zombieland</h1><H2 CLASS="logo">by fivelife</H2><br>
              <p class="mb-5">Nos dirigeants se sont engrainés les uns les autres dans des propos politiques ayant pour unique but de mettre à terre son rival.
                Après des mois et des mois de "gueguerre" l'un d'eux a craqué... Les clefs utilisées, le bouton pressé, le virus envoyé....
                Effectivement, une attaque biochimique de grande ampleur a eu lieu et notre chère Los Santos n'a pas été épargnée !

                Nous sommes en 2019, vous êtes un survivant de cette attaque et devrez lutter pour votre vie, voir pour votre survie.
                <br><br>Rejoignez notre newsletter !</p>
              <div class="input-group input-group-newsletter">
                  <form action="post.php" method="post" class="input-group input-group-newsletter">
                <input type="email" id="email" name="email" class="form-control" placeholder="Entrez un email..." aria-label="Entrez un email..." aria-describedby="basic-addon">
                <div class="input-group-append">
                  <button class="btn btn-secondary" type="submit">Notifiez moi!</button>
                </div>
                  </form>
                  <?php
                  if(isset($_GET['notify'])){
                      if($_GET['notify']==1){
                          echo'<span style="color: green">Votre email a bien été ajouté</span>';
                          unset($_GET['notify']);
                      }else{
                          if ($_GET['notify']==0){
                              echo'<span style="color: red">Oops, une erreur c\'est produite</span>';
                          }
                          unset($_GET['notify']);
                      }
                  }
                  ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="social-icons">
      <ul class="list-unstyled text-center mb-0">
        <li class="list-unstyled-item">
          <a href="http://gta-fivelife.fr" target="_blank">
            <i class="fas fa-at"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="https://twitter.com/GrapsZLive" target="_blank">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="http://discord.gta-fivelife.fr" target="_blank">
            <i class="fab fa-discord"></i>
          </a>
        </li>

      </ul>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/vide/jquery.vide.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/coming-soon.min.js"></script>

    <embed src="mp3/bg.mp3" autostart="true" loop="true" width="0" height="0">﻿



  </body>

</html>
