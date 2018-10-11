<?php
session_start();
$nim 	= $_SESSION['nim'];
$db 	= new  mysqli("localhost", "root", "", "database");
$sql 	= "SELECT * FROM registrasi WHERE nim='$nim'";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		echo "<h2>Profile</h2>";
		echo "Nama : ".$row['nama']."<br>";
		echo "NIM :".$row['nim']."<br>";
		echo "Kelas :".$row['kelas']."<br>";
		echo "Jenis Kelamin :".$row['jenis_kelamin']."<br>";
		echo "Hobi :".$row['hobi']."<br>";
		echo "Fakultas :".$row['fakultas']."<br>";
		echo "Alamat :".$row['alamat']."<br>";
		echo "<br><br><a href='editprofile.php?id=$id'>Edit Profil</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='posting.php?id=$id'>Posting</a>";
	}
}else{
	echo "0 result";
}
mysqli_close($db);
?>