<html>
   <head>
	   <title>NOUVEL AGENT</title>
      <link rel="stylesheet" href="../styles/bootstrap.min.css">
   </head>
   <body>
      <?php include_once('../includes/menu.php') ?>
      <?php require_once('../malib/connexion.php') ?>
      <?php
            if(!empty($_POST)){
               createAgent($_POST['nom'],$_POST['salaire']);
            } 
      ?>
     <div style="justify-content: center;" class="d-flex m-5">
         <div class="card w-50 bg-light">
            <div class="card-body">
               <h6>AJOUTER UN AGENT</h6>
               <div>
                  <form action="" method="post">
                     <div class="form-group">
                        <input type="hidden" name="id" >
                        <label for="">NOM</label>
                        <input type="text" name="nom" class="form-control">
                     </div>
                     <div class="form-group mt-3">
                        <label for="">SALAIRE</label>
                        <input type="text" name="salaire" class="form-control">
                     </div>
                     <div class="form-group mt-5">
                        <button type="submit" class="btn btn-success">ENREGISTRER</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
     </div>
     
   </body>
</html>
