<?php 
$db			= new mysqli("localhost", "root", "", "database");
$nim 		= $_POST['nim'];
$password	= $_POST['password'];
$sql		= mysqli_query($db, "SELECT * FROM registrasi WHERE nim='$nim' && password='$password'");

$no 		= mysqli_num_rows($sql);

if ($no == 1) {
	session_start();
	$_SESSION['nim'] = $nim;
	header("Location: halamanawal.php");
}else{
	echo "<h4>Maaf, data anda belum terdaftar<h4>";
	header("Location: form-registrasi.php");
}

 ?>