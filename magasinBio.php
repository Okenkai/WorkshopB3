<?php

try {
  // Connexion
  $db = new PDO('mysql:host=localhost;dbname=workshop', 'root', '');
} catch(PDOException $erreur) {
    echo "<p>Erreur : " . $erreur->getMessage() . "</p>\n";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Mon Bio</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
            <!-- <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="" /></a>-->
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
               data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
               aria-label="Toggle navigation">
               <i class="fas fa-bars ml-1"></i>
           </button>
           <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav text-uppercase ml-auto">
                   <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./index.html">Home</a></li>
                   <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./magasinBio.html">Magasins bio</a>
                   </li>
                   <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./enseigne.html">Enseignes Eco-responsable</a></li>
                   <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./restaurant.html">Restaurant bio</a></li>
                   <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./parrainage.html">Parrainage</a></li>
               </ul>
           </div>
           </div>
           </nav>

           <div class="container-fluid" style="width: 20%;">
        

           </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->'
    <script src="js/scripts.js"></script>


    <p>code en html</p>

    <?php
 
  //récupération des information à imprimer et filtrage
  $dbl = "SELECT * FROM entreprises
  WHERE nomentreprise != 'NULL'
  AND adressepostale != 'NULL'
  AND lien != 'NULL'
  AND description != 'NULL'
  AND image != 'NULL'";
  //Impression du tableau
  $res = $db->query($dbl);
   foreach ($res as $l)
   echo "nom:" . $l["nomentreprise"] . ", adress:" . $l["adressepostale"] . ", lien:" . $l["lien"] . ", description:" . $l["description"] .", image:" . $l["image"] . "\n";
   echo "</table>\n\n";
?>

    




</body>



</html>



<?php

$db = null;
$res = null;
$dbl = null;
?>