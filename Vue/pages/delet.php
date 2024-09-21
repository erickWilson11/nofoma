<?php
$user_id = $_GET['id'];


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


$sql = "DELETE FROM employe where id =$user_id";
if (mysqli_query($conn,$sql)){
    header ("location:./employer.php?message=DeleteSucces");
}else{
  header("location:./employer.php?message=DeleteFail");
}

?>
