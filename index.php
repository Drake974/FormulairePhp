



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- CSS -->
    
    <link rel="stylesheet" href="src/css/style.css">
    

    <title>Formulaire d'enchère</title>
</head>
<body>
    <!-- header -->
        <?php include 'src/includes/header.php'; ?>
      
    <!--Affichage du Formulaire-->
    <?php include 'src/includes/formulaireEntrer.php'; ?>
    <?php  include 'libs/traitement.php'; ?>

    <?php include 'libs/encherirCarte.php'; ?>
    <!--Affichage des cartes-->
    
    <?php include 'src/includes/affichageCarte.php'; ?>
    <?php include 'libs/fonctionEtat.php';?>
    <?php include 'src/includes/affichageCarteBack.php'; ?>

    <?php include 'src/includes/formulaireModifierCarte.php'; ?>
    <?php include 'libs/modificationCarte.php'; ?>



 <!-- jQuery and JS bundle w/ Popper.js -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    </body>
    
  