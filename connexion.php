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
      <form action="connexion.php" method="POST">
          <h2>connexion</h2>



          <?php 

$config = [
  'pseudo_valide' => 'admin',
  'mot_de_passe_valide' => 'fopa'
];

          
          if (isset($_POST['pseudo']) && isset($_POST['password'])) {
            $pseudo = ($_POST['pseudo']);
            $mot_de_passe = ($_POST['password']);
           
        
            if ($pseudo === $config['pseudo_valide'] && $mot_de_passe === $config['mot_de_passe_valide']) {
                // Authentification réussie
                session_start();
                $_SESSION['pseudo'] = $pseudo;
                header("Location: vue/pages/hub.php");
                exit;
            } else {
                // Authentification échouée
                 
                if($pseudo=""||$mot_de_passe=""){
                  echo " veillez remplir les champs";
                }
                else{
                   echo "<h2>Mot de pase incorrect </h2>";
                }
            }
        }
          
          
          ?>

          <div class="items">
            <span class="item">
              <label for="">Nom d'utilisateur</label>
              <input type="text" placeholder="Entrez votre nom d'utilisateur"id="nom" name="pseudo" />
            </span>
            <span class="item">
              <label for="">Mot de passe </label>
              <input type="password" placeholder="Entrez votre mot de passe" id="password" name="password" />
            </span>
          </div>

          <button type="submit"> Me connecter </button>
        </form>
      </div>
    </div>
  </body>
</html>

