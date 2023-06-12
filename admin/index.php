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
<div class="tout">
<h1>Connexion</h1>
<hr>
<br>
<div class="container">

        <div class="row">
            
            <?php
            $ok = false;
            if (isset($_GET['login'])) {
                $ok = ($_GET['login'] == "nemadamoue@gmail.com" && $_GET['password'] == "password"); // $ok  soit true  or false 

            }

            if (isset($_GET['login']) && !$ok) {
            ?> 
                <div class="col-12 card bg-danger">
                    <h1>Echec de votre connexion</h1>
                </div>

            <?php  }
            if (!$ok) {
            ?>

                <div class="col-6">
                   
                    <form method="get" action="">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Login</label>
                            <input type="email" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Saisir vore mail" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="saisir votre mot de passe" required>
                        </div>

                        <div class="col text-center">
                            <br>
                            <button type="submit" class="btn btn-success">Se connecter</button>

                        </div>
                    </form>
                </div>
            <?php
            } else { ?>

                <div class="col-8">
                    <div class="card bg-success">
                        <h1>Félicitations vous êtes connectés</h1>
                    </div>
                </div>
            <?php
            } ?>






        </div>
    </div>

  


</body>
</html>