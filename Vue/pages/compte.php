
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <link rel="stylesheet" href="../styles/hub.css">
    <link rel="stylesheet" href="../styles/compte.css">

    <title>Tableau de bord </title>

 <style>
  .infosBox{
    width: 100%;
    height: 100%;
    border-radius: 24px;
    padding: 2% 6%;
    background: white;
}
.cadre{
  border-bottom: 1px solid gray;
  padding: 4% 1%;
  
}
button{
  
  
}

  .edit-icon {
            color: #007bff; /* Couleur de l'icône */
            font-size: 74px; /* Taille de l'icône */
            cursor: pointer; 
          }
img{
border-radius:50%;
width: 400px;
height: 350px;
position: absolute;


}
  
 </style>
</head>
<body>
    
<section id="sidebar">
        <span class="logo">
           <img src="../../public/images/logo.png" alt="">
           <a href="#" class="brand"> DigiTask </a>
        </span>
        <ul class="side-menu top">
          <li class="active">
            <a href="./hub.php">
              <i class="bx bx-clipboard"></i>
              <span class="text">Tableau de Bord</span>
            </a>
          </li>
          <li>
            <a href="./projet.php">
              <i class="bx bx-category"></i>
              <span class="text">Projets</span>
            </a>
          </li>
          <li>
            <a href="./Taches.php">
              <i class="bx bx-book"></i>
              <span class="text">Taches</span>
            </a>
          </li>
          <li>
            <a href="./employer.php">
              <i class="bx bx-user"></i>
              <span class="text">Employés</span>
            </a>
          </li>
        </ul>
        <ul class="side-menu">
          <li>
            <a href="./compte.php">
              <i class="bx bxs-cog"></i>
              <span class="text">Mon compte</span>
            </a>
          </li>
          <li>
            <a href="./logout.php" class="logout">
              <i class="bx bxs-log-out-circle"></i>
              <span class="text">Logout</span>
            </a>
          </li>
        </ul>
      </section>

    <section id="content">
	
		<nav>
			<i class='bx bx-menu'></i>
			<a href="#" class="nav-link">Mon compte</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell'></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="../../public/images/fille.jpg" />
			</a>
		</nav>
		

		<main>
			<div class="head-title">
				<div class="left">
					<h1>Mon compte</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Tableau de bord</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Mon compte</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download'></i>
					<span class="text">Télécharger le PDF</span>
				</a>
			</div>

      <!-- partie pour les informations du compte    -->

     <div class="modal-content">
      
			


<div class="infosBox">
</span><h1>Mes informations personelles</h1><br><br>
 <img src="../../public/images/fille.jpg" alt="mon image">

      <div style="margin-left:auto; width: 500px;">
      <div class="cadre">
        <b><p>Nom :</b>  <span style="font-weight:blod;">fopa</span></p>
      </div>
      <div class="cadre">
       <b> <p>prenom : </b> <span style="font-weight:blod;">erick wilson</span></p>
       </div>
       <div class="cadre">
        <b><p>Adresse email :</b>  <span style="font-weight:blod;">erickfopa11@gmail.com</span></p>
        </div>
        <div class="cadre">
       <b> <p>contact : </b> <span style="font-weight:blod;"> +237 657478827</span></p>
       </div>
       <div class="cadre">
       <b><p>Rôle : </b> <span style="font-weight:blod;">Administrateur</span></p>
       </div>
       <div class="cadre">
       
       <b><p>Mots de passe : </b> <span style="font-weight:blod;">FOpa123@.</span>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="material-icons">edit</i></p>
      
       
       </b>

       </div>
       

        
       </div>
   

	
</div>
 
    </main>


     </section>

</div>

</div>


   <script src="../js/hub.js"></script>
  <style>
  

    .cadre {
  background-image: url('DigiTask/public/images/modifier.png');
  background-size: cover;
  /* Autres styles selon vos besoins */
}

  </style>
  

</body>
</html>