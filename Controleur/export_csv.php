<?php
// Exemple de connexion à la base de données (vous devrez configurer les informations de connexion appropriées)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "personne";

try {
    $conn = new PDO("mysql:host=localhost;dbname=personne", $username, $password);
    // Configurer le mode d'erreur de PDO sur Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les données des clients depuis la base de données
    $stmt = $conn->query("SELECT * FROM client");
    $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Définir le type de contenu pour le téléchargement
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="export_clients.csv"');

    // Ouvrir le fichier en écriture
    $file = fopen('php://output', 'w');

    // Entêtes des colonnes du CSV
    $headers = array('Nom', 'Adresse', 'Numéro de téléphone', 'E-mail', 'Sexe', 'Statut');
    fputcsv($file, $headers);

    // Écrire les données des clients dans le fichier CSV
    foreach ($client as $client) {
        fputcsv($file, $client);
    }

    // Fermer le fichier
    fclose($file);

} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

// Fermer la connexion à la base de données
$conn = null;
?>
