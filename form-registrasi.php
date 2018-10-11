<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="proses-registrasi.php" method="post">
	<table>
		<h2>Formulir</h2>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td>
				<input type="radio" name="kelas" value="41-01">41-01
				<input type="radio" name="kelas" value="41-02">41-02
				<input type="radio" name="kelas" value="41-03">41-03
				<input type="radio" name="kelas" value="41-04">41-04
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki
				<input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
			</td>
		</tr>
		<tr>
			<td valign="top">Hobi</td>
			<td valign="top">:</td>
			<td>
				<input type="checkbox" name="hobi" value="Membaca">Membaca<br>
				<input type="checkbox" name="hobi" value="Membaca">Menulis<br>
				<input type="checkbox" name="hobi" value="Membaca">Menyanyi<br>
				<input type="checkbox" name="hobi" value="Membaca">Menari<br>
				<input type="checkbox" name="hobi" value="Membaca">Melukis
			</td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td>
				<select name="fakultas">
					<option value="FIF">Fakultas Ilmu Informatika</option>
					<option value="FIT">Fakultas Ilmu Terapan</option>
					<option value="FRI">Fakultas Rekayasa Industri</option>
					<option value="FTE">Fakultas Teknik Elektro</option>
					<option value="FIK">Fakultas Industri Kreatif</option>
					<option value="FEB">Fakultas Ekonomi Bisnis</option>
					<option value="FKB">Fakultas Komunikasi Bisnis</option>
				</select>
			</td>
		</tr>
		<tr>
			<td valign="top">Alamat</td>
			<td valign="top">:</td>
			<td><textarea rows="5" cols="40" name="alamat"></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Simpan"></td>
		</tr>
	</table>
</form>
</body>
</html>