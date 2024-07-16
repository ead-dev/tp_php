<html>
   <head>
	   <title>ACCUEIL</title>
      <link rel="stylesheet" href="styles/bootstrap.min.css">
   </head>
   <body>
      <?php require_once('malib/fonctions.php') ?>
      <?php include_once('includes/menu.php') ?>
     <h3>Hello Tout le monde</h3>
     <h5>Programmation en PHP</h5>
     <?php $mavar = 18; $car = carre($mavar); ?>
     <h4><?php echo $car  ?></h4>	
   </body>
</html>
