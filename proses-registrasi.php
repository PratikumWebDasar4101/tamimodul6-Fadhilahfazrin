<?php 
$nama			= $_POST['nama'];
$nim 			= $_POST['nim'];
$password		= $_POST['password'];
$kelas			= $_POST['kelas'];
$jenis_kelamin	= $_POST['jenis_kelamin'];
$hobi			= $_POST['hobi'];
$fakultas		= $_POST['fakultas'];
$alamat			= $_POST['alamat'];

$db 	= new mysqli("localhost", "root", "", "database");

$sql 	= "INSERT INTO registrasi(nim, nama, password, kelas, jenis_kelamin, hobi, fakultas, alamat)
		VALUES ('$nim', '$nama', '$password', '$kelas', '$jenis_kelamin', '$hobi', '$fakultas', '$alamat')";
if (mysqli_query($db, $sql)) {
	echo "New record created successfully";
}else{
	echo "Error : ".$sql."<br>".mysqli_error($db);
}

mysqli_close($db);
echo "<br>";
echo "<a href = form-login.php>Login";
 ?>