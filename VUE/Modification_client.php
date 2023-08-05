<!DOCTYPE html>
<html>
<head>
  <title>Modifier un client</title>
  <link rel="stylesheet" href="../Asset/style/styles.css">
</head>
<body>
  <div class="container">
    <h2>Modifier un client</h2>
    <form action="../Controleur/update_client.php" method="post">
      <input type="hidden" id="client_id" name="client_id" value="219635"> <!-- Remplacez "219635" par l'ID du client à modifier, récupéré depuis la base de données -->

      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="nom" value="Geneviève Ndiaye" required> <!-- Remplacez "Geneviève" par le nom du client récupéré depuis la base de données -->

      <label for="adresse">Adresse :</label>
      <input type="text" id="adresse" name="adresse" value="Maristes Cité Elisabeth" required> <!-- Remplacez"Maristes Cité Elisabeth" par l'adresse du client récupéré depuis la base de données -->

      <label for="telephone">Numéro de téléphone :</label>
      <input type="tel" id="telephone" name="telephone" value="781138071" required> <!-- Remplacez "781138071" par le numéro de téléphone du client récupéré depuis la base de données -->

      <label for="email">Adresse e-mail :</label>
      <input type="email" id="email" name="email" value="genindiaye15@gmail.com" required> <!-- Remplacez "genindiaye15@gmail.com" par l'adresse e-mail du client récupéré depuis la base de données -->

      <label for="sexe">Sexe :</label>
      <select id="sexe" name="sexe" required>
        <option value="masculin">Masculin</option>
        <option value="feminin">Feminin</option>
      </select>

      <label for="statut">Statut :</label>
      <input type="radio" id="actif" name="statut" value="actif" checked>
      <label for="actif">Actif</label>
      <input type="radio" id="inactif" name="statut" value="inactif">
      <label for="inactif">Inactif</label>

      <button type="submit">Modifier</button>
    </form>
  </div>
</body>
</html>
