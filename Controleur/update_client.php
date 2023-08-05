<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $client_id = $_POST["client_id"];
    $nom = $_POST["nom"];
    $adresse = $_POST["adresse"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];
    $sexe = $_POST["sexe"];
    $statut = $_POST["statut"];

    // TODO: Insérer le code pour mettre à jour les informations du client dans la base de données

    // Exemple de connexion à la base de données (vous devrez configurer les informations de connexion appropriées)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "personne";

    try {
        $conn = new PDO("mysql:host=localhost;dbname=personne", $username, $password);
        // Configurer le mode d'erreur de PDO sur Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // TODO: Insérer le code pour mettre à jour les informations du client dans la base de données

        // Par exemple :
        $stmt = $conn->prepare("UPDATE client SET nom = :nom, adresse = :adresse, telephone = :telephone, email = :email, sexe = :sexe, statut = :statut WHERE id = :id");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':adresse', $adresse);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':sexe', $sexe);
        $stmt->bindParam(':statut', $statut);
        $stmt->bindParam('id', $id);

        $stmt->execute();

        echo "Client mis à jour avec succès!";
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

    // Fermer la connexion à la base de données
    $conn = null;
}
?>
