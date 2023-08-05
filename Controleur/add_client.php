<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = $_POST["nom"];
    $adresse = $_POST["adresse"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];
    $sexe = $_POST["sexe"];
    $statut = $_POST["statut"];


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "personne";

    try {
        $conn = new PDO("mysql:host=localhost;dbname=personne", $username, $password);
        // Configurer le mode d'erreur de PDO sur Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // TODO: Insérer le code pour enregistrer les données du client dans la base de données

        // Par exemple :
        $stmt = $conn->prepare("INSERT INTO client(nom, adresse, telephone, email, sexe, statut) VALUES (:nom, :adresse, :telephone, :email, :sexe, :statut)");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':adresse', $adresse);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':sexe', $sexe);
        $stmt->bindParam(':statut', $statut);

        $stmt->execute();

        echo "Client ajouté avec succès!";
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

    // Fermer la connexion à la base de données
    $conn = null;
}
?>
