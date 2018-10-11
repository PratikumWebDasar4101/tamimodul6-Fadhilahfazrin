<?php
$nama 			= $_POST['nama'];
$nim 			= $_POST['nim'];
$password 		= $_POST['password'];
$kelas 			= $_POST['kelas'];
$jenis_kelamin 	= $_POST['jenis_kelamin'];
$hobi 			= $_POST['hobi'];
$fakultas 		= $_POST['fakultas'];
$alamat 		= $_POST['alamat'];
$id 			= $_POST['id'];

$db 	= new mysqli("localhost", "root", "", "database");
$sql 	= "UPDATE registrasi SET nama='$nama', nim='$nim', password='$password', kelas='$kelas', jenis_kelamin='$jenis_kelamin', 		hobi='$hobi', fakultas='$fakultas', alamat='$alamat' WHERE id='$id' ";

if (mysqli_query($db, $sql)) {
	echo "Update Successfully";
}else{
	echo "Error update : ".$sql."<br>".mysqli_error($db);
}


mysqli_close($db);
echo "<br>";
echo "<a href = halamanawal.php>List Data</a>";
?>