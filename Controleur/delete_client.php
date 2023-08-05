<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer l'ID du client à supprimer
    $client_id = $_POST["client_id"];

    // TODO: Insérer le code pour supprimer le client de la base de données

    // Exemple de connexion à la base de données (vous devrez configurer les informations de connexion appropriées)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "personne";

    try {
        $conn = new PDO("mysql:host=localhost;dbname=personne", $username, $password);
        // Configurer le mode d'erreur de PDO sur Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // TODO: Insérer le code pour supprimer le client de la base de données

        // Par exemple :
        $stmt = $conn->prepare("DELETE FROM client WHERE id = :id");
        $stmt->bindParam(':id', $id);

        $stmt->execute();

        echo "Client supprimé avec succès!";
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

    // Fermer la connexion à la base de données
    $conn = null;
}
?>
