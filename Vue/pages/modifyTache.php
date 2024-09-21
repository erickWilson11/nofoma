<?php
$user_id=$_GET['id'];
if(isset($_POST['send'])){
    if(isset($_POST['nom']) &&
      isset($_POST['description']) &&
	 isset($_POS_T['dateDébut']) &&
	 isset($POST['dateFin']) &&
	 isset($POST['statut']) &&
   isset($_POST['projetAssocié']) &&
  

       $_POST['nom'] != "" &&
       $_POST['description'] != "" &&
	   $_POST['dateDébut'] != ""&& 
	   $_POST['dateFin'] != "" &&
     $_POST['statut'] != "" &&
	   $_POST['projetAssocié'] != "" 
       )
	   
	   $host = "localhost";
	   $username = "root";
	   $password = "";
	   $dbname="digitask";
	   
	   //create connection
	   $conn = mysqli_connect($host, $username, $password, $dbname);
	   
	   //check connection
	   if (!$conn) {
		   die("connection failed:".mysqli_connect_error()); 
	   }
		// include_once "../../public/config.php";
       extract($_POST);
    

       $sql = "UPDATE tâche SET nom = '$nom' WHERE id = '$user_id'";
       if(mysqli_query($conn, $sql)){
         header("location:./tache.php");


        }else{
        header("location:./tache.php?message=Addfail");
        }
    }else{
    //    header("location:./tache.php?message=Emptyfields");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="../styles/hub.css">
     <link rel="stylesheet" href="../styles/tache.css">

    <title>Tableau de bord </title>
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
            <a href="./compte.php">
              <i class="bx bx-category"></i>
              <span class="text">Projets</span>
            </a>
          </li>
          <li>
            <a href="./tache.php">
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
			<a href="#" class="nav-link">Taches</a>
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
					<h1>Taches</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Tableau de bord</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="./tache.php">Taches</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download'></i>
					<span class="text">Télécharger le PDF</span>
				</a>
</div>
  
</main>


</section>



<div id="myModal" class="tacheModal">


<div class="modal-content">
<span class="close">&times;</span>

  <div class="form-container">
  <?php
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname="digitask";
    
    //create connection
    $conn = mysqli_connect($host, $username, $password, $dbname);
    
    //check connection
    if (!$conn) {
        die("connection failed:".mysqli_connect_error()); 
    } 

    // liste des clients
    $sql = "SELECT * FROM tâche where id = $user_id";
    $result = mysqli_query($conn, $sql);
       //output data of each row
       while($row = mysqli_fetch_assoc($result)) {
       
        ?>

    <form action="" method="post" enctype="multipart/form-data">
      <h3>modifier une Tache </h3>

      <input type="text" name="nom" value="<?=$row['nom']?>"placeholder="Entrer le nom " class="box" required>
      <input type="text" name="descriptions" value="<?=$row['descriptions']?>"placeholder="Entrer le descriptions " class="box" required>
      <input type="text" name="dateDébut" value="<?=$row['dateDébut']?>"placeholder="Entrer la dateDébut" class="box" required>
      <input type="text" name="dateFin" value="<?=$row['dateFin']?>"placeholder="Entrer la dateFin " class="box" required>
      <input type="text" name="projetAssocié" value="<?=$row['projetAssocié']?>"placeholder="Entrer le projetAssocié" class="box" required>
      <input type="text" name="statut" value="<?=$row['statut']?>"placeholder="Entrer le statut " class="box" required>
      

      
      
<!--                     
                <select name="projets associe" id="">
                    role : 
                    <option value="">CTO</option>
                    <option value="">Responsable Marketing</option>
                    <option value="">Data Analyst</option>
                    
                    <option value="">Stagiare</option>
                </select> -->

      <input type="submit" name="send" value="valider" class="btn">
    </form>
    
          <?php
       }
    ?>

  </div>
</div>

</div>


<script src="../js/hub.js"></script>


    
</body>
</html>