
    <!DOCTYPE html>
    <html>
    <head>
    <title>Ajouter un client</title>
    <link rel="stylesheet" href="../Asset/style/style.css">
    </head>
    <body>
    <div class="container">
        <h2>Ajouter un client</h2>
        <form action="../Controleur/add_client.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse" required>

        <label for="telephone">Numéro de téléphone :</label>
        <input type="tel" id="telephone" name="telephone" required>

        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="email" required>

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

        <button type="submit">Ajouter</button>
        </form>
    </div>
    </body>
    </html>