<?php
require_once "../Controleur/login.php";

session_start();

// Vérifier si le formulaire de connexion a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assurez-vous que les champs requis sont remplis
    if (empty($_POST['username']) || empty($_POST['password'])) {
        // Rediriger vers la page de connexion avec un message d'erreur
        header('Location: login.php?error=empty_fields');
        exit();
    }

    // Récupérer les valeurs du formulaire et effectuer une validation supplémentaire si nécessaire
    $username = htmlspecialchars(trim($_POST['username']));
    $password = $_POST['password'];

    // Remplacez les informations de connexion à la base de données par les vôtres
    $servername = "localhost";
    $username_db = "votre_nom_d_utilisateur";
    $password_db = "votre_mot_de_passe";
    $dbname = "nom_de_votre_base_de_donnees";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username_db, $password_db);
        // Configurer le mode d'erreur de PDO sur Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Récupérer les informations de l'utilisateur en fonction du nom d'utilisateur
        $stmt = $conn->prepare("SELECT id, password, role FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user || !password_verify($password, $user['password'])) {
            // Rediriger vers la page de connexion avec un message d'erreur
            header('Location: login.php?error=invalid_credentials');
            exit();
        }

        // Si les informations d'identification sont valides, stocker le rôle de l'utilisateur dans la session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];

        // Fermer la connexion à la base de données
        $conn = null;

        // Rediriger vers la page de tableau de bord ou autre page appropriée après la connexion réussie
        header('Location: dashboard.php');
        exit();

    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
        exit();
    }
}
