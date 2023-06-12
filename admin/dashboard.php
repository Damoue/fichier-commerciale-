<?php 
try {
    $bdd= new PDO('mysql:host=localhost;dbname=commerce','root','' );
} catch (Exception $e) {
    die( 'Erreur : ' . $e->getMessage());
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
   
</head>
<body>
  <div class="body">
<nav class="navbar navbar-expand-md navbar-light ">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="../photos/logof.jpg" alt="Logof" width="200">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
              <a class="nav-link" href="#">Acceuil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Produits</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<br><br><br><br>
<div class="container">
        <h3 class="fw-bold pt-5 text-center" id="acceuil">Dashboard </h3>
        <hr>
        <div class="row  pb-5 pt-4  ">
            <div class="col-md-4 text-center d-grid gap-2 d-block offset-md-1 mb-md-0 mb-5">
                <!-- <div class="pb-5"> -->
                    <a href="#voir_liste" class="btn btn-primary mb-5 p-3"> Voir la liste des produits</a>
                <!-- </div> -->
                <!-- <div> -->
                    <a href="" class="btn btn-primary  mt-5  p-3">Voir la liste des ventes </a>
                <!-- </div> -->
            </div>
            <div class="col-md-4 text-center d-grid gap-2 d-block offset-md-2 mt-md-0 mt-5">
                <!-- <div class="pb-5"> -->
                    <a href="#ajout_prod" class="btn btn-primary btn-block mb-5 p-3 "> Ajouter un produits</a>
                <!-- </div> -->
                <!-- <div> -->
                    <a href="" class="btn btn-primary  btn-block mt-5 p-3">Ajouter une vente</a>
                <!-- </div> -->

            </div>
        </div>
        <hr>
        <h5 class="fw-bold pb-5" id="voir_liste">Listes des Produits</h5>
       
       
       
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">libellé</th>
      <th scope="col">Prix Unitaire</th>
    </tr>
  </thead>
  <?php 
   $reponse = $bdd-> query("SELECT * FROM produits");
   while ($donne= $reponse->fetch()) { ?> 

  <tbody>
    <tr class="table-active">
      <th scope="row"> <?= $donne ['id'] ?> </th>
      <td><?= $donne['libelle']?></td>
      <td><?= $donne['prix_unitaire']?></td>
      <td>FCFA</td>
    </tr>
    
  </tbody>  <?php }  $reponse->closeCursor();?>
</table>
  
     
   
    
        <h5 class="fw-bold pt-5" id="ajout_prod">Ajout de Produits</h5>

        <hr>

        <form action="a.php" method="post">
<div class="row pt-4">
<div class="col-md mb-md-0 mb-3">
<div class="form-outline ">


                <label class="fw-bold pb-3" for="">Libellé :</label>
              <input type="text" id="" class="form-control" name="libelle" required />
              
            </div>
</div>
<div class="col-md">
<div class="form-outline ">
                <label class="fw-bold pb-3" for="">Prix :</label>
              <input type="text" id="" class="form-control" name="prix" required />
              
            </div>
</div>
</div>
<div class="text-center pt-4">
        <button type="submit" class="btn btn-success btn-block mb-4 ">Enregistrer</button>
        </div>


    </div>
    </form>
    <div class="pt-5">
        <footer class="card-footer " style="height: 200%;">
            <div class="text-center fw-bold text-white bg-black p-2 ">Copyright©2023</div>
        </footer>
    </div>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    
    </div> 
</body>
</html>



