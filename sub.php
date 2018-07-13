<?php 
$dbconn = mysqli_connect("Localhost", "root", "azarath123", "void");
$name = mysqli_real_escape_string($dbconn, $_POST['fname']);
$email = mysqli_real_escape_string($dbconn, $_POST['email']);
$sql = "INSERT INTO subs (fullname, email ) VALUES ('$name', '$email')";
if (isset($_POST['register'])) {

	mysqli_query($dbconn, $sql);
	header('Location: index.html');
}

 ?>