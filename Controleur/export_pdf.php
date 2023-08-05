<?php

require_once(__DIR__ . '/tcpdf/tcpdf.php');

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

    // Créer un nouvel objet TCPDF
    $pdf = new TCPDF();

    // Titre du document PDF
    $pdf->SetTitle('Rapport des clients');

    // Ajouter une page
    $pdf->AddPage();

    // Entêtes des colonnes du PDF
    $headers = array('Nom', 'Adresse', 'Numéro de téléphone', 'E-mail', 'Sexe', 'Statut');

    // Contenu des clients
    foreach ($clients as $client) {
        $pdf->Cell(30, 10, $client['nom'], 1);
        $pdf->Cell(40, 10, $client['adresse'], 1);
        $pdf->Cell(40, 10, $client['telephone'], 1);
        $pdf->Cell(40, 10, $client['email'], 1);
        $pdf->Cell(20, 10, $client['sexe'], 1);
        $pdf->Cell(20, 10, $client['statut'], 1);
        $pdf->Ln();
    }

    // Afficher le document PDF
    $pdf->Output('export_clients.pdf', 'D');

} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

// Fermer la connexion à la base de données
$conn = null;
?>
