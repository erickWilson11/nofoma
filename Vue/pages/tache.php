;/<?php
if(isset($_POST['send'])){
    if(isset($_POST['nom']) &&
      isset($_POST['descriptions']) &&
	 isset($_POS_T['dateDébut']) &&
	 isset($POST['dateFin']) &&
	 isset($POST['statut']) &&
   isset($_POST['projetAssociés']) &&
  

       $_POST['nom'] != "" &&
       $_POST['descriptions'] != "" &&
	   $_POST['dateDébut'] != ""&& 
	   $_POST['dateFin'] != "" &&
     $_POST['statut'] != "" &&
	   $_POST['projetAssociés'] != "" 
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
    
       $sql = "INSERT INTO tâche (nom,descriptions,dateDébut,dateFin,projetAssociés,statut) VALUES ('$nom','$descriptions','$dateDébut','$dateFin','$projetAssociés ','$statut')";
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
							<a class="active" href="#">Taches</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download'></i>
					<span class="text">Télécharger le PDF</span>
				</a>
			</div>



			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Liste des Taches Enregistré</h3>
						<i class='bx bx-search'></i>
            
						<i class='bx bx-filter'></i>
						<i class='bx bx-plus' id="add"></i>
					</div>
          <table>
            <thead id="thead">
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
                   //liste des clients
                   $sql = "SELECT * FROM tâche";
                   $result = mysqli_query($conn, $sql);
                   if (($result)){
                   //afficher les clients
   
        
                ?>

          
          <tr class="suspet" id="suspect">
      

            <th id="t1">nom</th>
            
            <th id="t1">descriptions</th>
            
            <th id="t1">dateDébut</th>
            
            <th id="t1">dateFin</th>
            
            <th id="t1">projetAssocié</th>

            <th id="t1">statut</th>

             

          </tr>
        </thead>
          <tbody>
            

						<?php




                 
                    while($row = mysqli_fetch_assoc($result)){
						
                     
                  ?>  
          <tr>
            
             <td><?=$row['nom']?></td>
             <td><?=$row['descriptions']?></td>
             <td><?=$row['dateDébut']?></td>
             <td><?=$row['dateFin']?></td>
             <td><?=$row['projetAssociés']?></td>
             <td><span class="status completed"><?=$row['statut']?></span></td>
              
            <td> 
              <td class="image"><a href="./modifyTache.php?id=<?=$row['id']?>"> <img src="./edit.png" alt="edit"></a></td>
              <td class="image"><a href="./deletTache.php?id=<?=$row['id']?>"> <img src="./remove.png" alt=""></a></td>	
            </td>
         	  
          </tr>
          <?php
                 }
             }
              else{
                     echo"<p class='message'>0 tache ajouter !</p>";
              }
            ?>
        
        </tbody>
      </table>
    </div>

  </div>
</main>


</section>



<div id="myModal" class="modal">


<div class="modal-content">
  <span class="close">&times;</span>

  <div class="form-container">

    <form action="" method="post" enctype="multipart/form-data">
      <h3>Ajouter une Taches </h3>

      <input type="text" name="nom" placeholder="Entrer le nom " class="box" required>
      <input type="text" name="descriptions" placeholder="Entrer la description" class="box" required>
      <input type="text" name="dateDébut" placeholder="Entrer la dateDébut" class="box">
      <input type="text" name="dateFin" placeholder="Entrer la dateFin" class="box" required>
      <input type="text" name="projetAssociés" placeholder="Entrer le projetAssociés :" class="box" required>
       <input type="text" name="statut" placeholder="Entrer le statut:" class="box" required>
      
      
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

  </div>
</div>

</div>


<script src="../js/hub.js"></script>
</body>

    
</body>
</html>