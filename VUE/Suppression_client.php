<!DOCTYPE html>
<html>
<head>
  <title>Supprimer un client</title>
  <link rel="stylesheet" href="../Asset/style/style1.css">
</head>
<body>
  <div class="container">
    <h2>Supprimer un client</h2>
    <form action="../Controleur/delete_client.php" method="post">
      <label for="client_id">ID du client :</label>
      <input type="text" id="client_id" name="client_id" required>

      <button type="submit">Supprimer</button>
    </form>
  </div>
</body>
</html>
