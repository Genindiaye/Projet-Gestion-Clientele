<?php
require_once "../Controleur/auth.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Connexion</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../Asset/style/style4.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center">Connexion</h2>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
  
          <li class="nav-item">
            <a class="nav-link" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">Connexion</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
        
            <form action="login.php" method="post">
              <div class="form-group">
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" class="form-control" id="username" name="username" required>
              </div>
              <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <a href="gestionclientele.php" class="btn btn-primary btn-block">Se connecter</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
