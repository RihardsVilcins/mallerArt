<?php


class template{
    var $webName = "Maller art";

    static function getMeta(){
        echo '
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        ';

    }

    static function getLibs(){
        echo '
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/lightbox.css" rel="stylesheet">
        ';
    }

    static function getJsLibs(){
        echo '
         <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0e-OZ5ZuZtPZ2DwQnp8zeM9m2AMqs_lY&callback=myMap"></script>
         <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
         <script src="js/lightbox-plus-jquery.js"></script>
         <script src="js/functions.js"></script>
        ';
    }

    function showTitle(){
        echo $this->webName;
    }

    static function getMenu(){
      echo '
          <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
          <!-- Avatar image in top left corner -->
          <a href="#"><img src="img/ant.jpg" style="width:100%"></a>
          <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>SĀKUMS</p>
          </a>
            <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-eye w3-xxlarge"></i>
            <p>Par mums</p>
          </a>
          <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-eye w3-xxlarge"></i>
            <p>DARBI</p>
          </a>
          <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-envelope w3-xxlarge"></i>
            <p>KONTAKTI</p>
          </a>
        </nav>


        <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
          <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
            <a href="#" class="w3-bar-item w3-button" style="width:25% !important">Sākums</a>
           <!--  <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">Par kompāniju</a> -->
            <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">Par mums</a>
            <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">Darbi</a>
            <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">Kontakti</a>
          </div>
        </div>

        <!-- Page Content -->
        <div class="w3-padding-none" id="main">  

          <!-- Header/Home -->
          <header class="w3-container w3-padding-none w3-center">
        <!--   <img src="img/2.jpg" alt="wood" class="w3-image" width="100" height="100"> -->
            <h1 class="w3-jumbo"><span class="w3-hide-small"></span> Maller art.</h1>
          </header> ';
    }

}
?>


