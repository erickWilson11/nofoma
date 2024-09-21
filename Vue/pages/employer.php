;/<?php
if(isset($_POST['send'])){
    if(isset($_POST['nom']) &&
      isset($_POST['prenom']) &&
	 isset($_POST['contact']) &&
	 isset($_POST['email']) &&
	
	isset($_POST['rôle']) &&

       $_POST['nom'] != "" &&
       $_POST['prenom'] != "" &&
	   $_POST['contact'] != ""&& 
	   $_POST['email'] != "" &&
	   $_POST['rôle'] != "" 
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
    
       $sql = "INSERT INTO employe (nom,prenom,contact,email,rôle) VALUES ('$nom','$prenom','$contact','$email','$rôle')";
       if(mysqli_query($conn, $sql)){
         header("location:./employer.php");


        }else{
        header("location:./employer.php?message=Addfail");
        }
    }else{
    //    header("location:./employer.php?message=Emptyfields");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

	<link rel="stylesheet" href="../Styles/hub.css">

	<title>Tableau de bord</title>
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
            <a href="./Tache.php">
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
            <a href="../logout.php">
              <i class="bx bxs-log-out-circle"></i>
              <span class="text">Logout</span>
            </a>
          </li>
        </ul>
      </section>
	




	<section id="content">
	
		<nav>
			<i class='bx bx-menu'></i>
			<a href="#" class="nav-link">Employer</a>
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
					<h1>Employé</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Tableau de bord</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Employé</a>
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
						<h3>Liste des employés Enregistré</h3>
						<i class='bx bx-search'></i>
						<i class='bx bx-filter'></i>
						<i class='bx bx-plus' id="add"></i>
					</div>
					<table>
						<thead>
							

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
                   $sql = "SELECT * FROM employe";
                   $result = mysqli_query($conn, $sql);
                   if (($result)){
                   //afficher les clients
   
        
                ?>

                            <tr>
								<th>Photo</th>
								<th>Nom </th>
								<th>prenom</th>
								<th>Email</th>
								<th>contact</th>
								<th>Role</th>
							</tr>
						</thead>
						<tbody>

						<?php




                 
                    while($row = mysqli_fetch_assoc($result)){
						
                     
                  ?>
							<tr>
								<td>
									<img src="../../public/images/fille.jpg" />
								</td>
								<td><?=$row['nom']?></td>
								<td><?=$row['prenom']?></td>
								<td><?=$row['email']?></td>
								<td><?=$row['contact']?></td>
								<td><span class="status completed"><?=$row['rôle']?></span></td>
								
								<td class="image"><a href="./edit.php?id=<?=$row['id']?>"> <img src="./edit.png" alt="edit"></a></td>
								<td class="image"><a href="./delet.php?id=<?=$row['id']?>"> <img src="./remove.png" alt=""></a></td>							
							</tr>
							<?php
                    }
                 }
                 else{
                     echo"<p class='message'>0 employé présent !</p>";
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
					<h3>Ajouter un employé</h3>

					<input type="text" name="nom" placeholder="Entrer le nom  " class="box" required>
					<input type="text" name="prenom" placeholder="Entrer le nom  " class="box" required>
					<input type="text" name="contact" placeholder="Entrer le numero de telephone" class="box">
					<input type="text" name="email" placeholder="Entrer l'adresse Email" class="box" required>
					<input type="text" name="rôle" placeholder="Entrer le rôle :" class="box" required>
					
<!--                     
                    <select name="rôle" id="">
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

</html>