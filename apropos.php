<html>
   <head>
	   <title>Moi</title>
      <link rel="stylesheet" href="styles/bootstrap.min.css">
   </head>
   <body class="p-3">
      <?php include_once('includes/menu.php') ?>
      <?php require_once('malib/services.php') ?>
      <?php require_once('malib/connexion.php') ?>
      <?php 
        if(!empty($_GET)){
            if(isset($_GET['action'])){
                if($_GET['action']=='delete'){
                    //echo "Je veux supprimer";
                    deleteAgent($_GET['id']);
                }
            }
        } 
      ?>
      <h2>JE SUIS SINDIKA</h2>
      <div class="d-flex gap-3">
        <div>
            <p>
                <span>Lorem, ipsum dolor sit amet
                consectetur adipisicing elit. Ea quod 
                sapiente autem. Voluptatibus esse explicabo, 
                dignissimos 
                voluptatum illo quisquam deserunt, 
                minus libero nostrum id ratione iste! Eum,
                mollitia. Voluptatem, a!</span>
            </p>
        </div>
        <div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis veritatis repudiandae culpa animi quia voluptatem distinctio officiis hic repellat ea? Doloremque rem, deleniti mollitia cupiditate voluptatem aut perspiciatis veritatis dolorem?</p>
            <p>Ab possimus nostrum ducimus asperiores assumenda velit. Itaque expedita temporibus nostrum ab repudiandae mollitia quibusdam consectetur. Distinctio voluptatibus quae, iure voluptas vitae sit animi dolor excepturi sunt perferendis itaque cum.</p>
        </div>
      </div>

      <div class="m-4 bg-light p-3 border rounded-3">
        <h3>MES SERVICES</h3>
        <p>VOICI LA LISTE DE MES SERVICES</p>
            <ol class="list-group">
                <?php foreach($data as $item): ?>
                    <li class="list-group-item"><?= $item ?></li>
                <?php endforeach  ?>    
            </ol>
      </div>

      
      <?php $items = getAgents(); ?>
      <div class="p-3 m-3 bg-info rounded-3">
        <h3 class="text-white border-bottom">MON PERSONNEL</h3>
        <a class="btn btn-sm btn-success mb-2" href="/sindika/agents/create.php">Nouvel employe</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>MATRICULE</th>
                    <th>NOM COMPLET</th>
                    <th>SALAIRE</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($items as $agent): ?>
                    <tr>
                        <td><?= $agent['id'] ?></td>
                        <td><?= $agent['nom'] ?></td>
                        <td><?= $agent['salaire'] ?></td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="btn btn-warning btn-sm" href="./agents/edit.php?id=<?= $agent['id'] ?>">Modifier</a></li>
                                <li class="list-inline-item"><a class="btn btn-danger btn-sm" href="?id=<?= $agent['id']?>&action=delete">Desactiver</a></li>
                            </ul>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
      </div>
      
   </body>
</html>
