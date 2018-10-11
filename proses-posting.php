<?php 
session_start();

$id 	= $_POST['id'];
$konten = $_POST['konten'];
$nim 	= $_POST['nim'];
$foto 	= $_POST['foto']['name'];

if (strlen($konten) < 30) {
	$_SESSION['konten_error'] = "Minimal 30 Kata";
	header("Location: posting.php");
}
$db 	= new mysqli("localhost", "root", "", "database");
$sql 	= "INSERT INTO posting(konten, publish, foto) VALUES ('$konten', '$id', '$foto') ";


if (mysqli_query($db, $sql)) {
	echo "Successfully";
}else{
	echo "Error : ".$sql."<br>".mysqli_error($db);
}

move_uploaded_file($_FILES['foto']['tmp_name'], "images/".$_FILES['foto']['name']);
mysqli_close($db);
 ?>