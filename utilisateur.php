
<?php
session_start(); // Démarre la session

// Informations de connexion à la base de données (à remplacer par vos propres informations)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "digitask";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec   
 de la connexion : " . $conn->connect_error);
}

// Traitement du formulaire de connexion (si la méthode est POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $password = $_POST['password'];

    // Préparation de la requête SQL pour éviter les injections SQL
    $stmt = $conn->prepare("SELECT * FROM utilisateur WHERE nom = ?");
    $stmt->bind_param("s", $nom);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $utilisateur = $result->fetch_assoc();
        $hashed_password = $utilisateur['password'];

        // Vérification du mot de passe
        if (password_verify($password, $hashed_password)) {
            // Authentification réussie
            $_SESSION['nom_utilisateur'] = $utilisateur['nom']; // Stockage du nom dans la session
            header("Location: hub.php"); // Redirection vers la page d'accueil
        } else {
            echo "Mot de passe incorrect";
        }
    } else {
        echo "Aucun utilisateur trouvé avec ce nom";
    }

    $stmt->close();
}

$conn->close();
?>








<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./Vue/Styles/connexion.css" />
    <title>DigiTask - Connexion</title>
  </head>
  <body>
    <div class="connexionForm">
      <div class="partGauche">
        <!-- <img src="./assets/images/fille.png" alt="">
            h² -->
        <span class="logo">
          <img src="./public/images/logo.png" alt="" />
        </span>
        <h1>Bienvenue sur DigiTask!</h1>
        <p>
          
          Entrez vos informations de connexions pour acceder au tableau de bord
        </p>
      </div>

      <div class="partDroite">
      <form action="" method="POST">
          <h2>connexion</h2>

          <div class="items">
            <span class="item">
              <label for="">nom</label>
              <input type="text" placeholder="Entrez votre nom d'utilisateur"id="nom" name="nom" />
            </span>
            <span class="item">
              <label for="">mot de passe </label>
              <input type="password" placeholder="Entrez votre mot de passe" id="password" name=" password" />
            </span>
          </div>
         <p>
         <a href="traitement.php">  
          <button type="submit"> Me  connecter </button>
          </a>
         </p>
        </form>
      </div>
    </div>
  </body>
</html>