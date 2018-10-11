<?php
session_start();
if (!empty($_GET['id'])) {
	$id = $_GET['id'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="proses-posting.php" method="post" enctype="multipart/form-data">
	<h2>Posting</h2>
	<table>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<tr>
			<td valign="top">Konten</td>
			<td valign="top">:</td>
			<td><textarea cols="80" rows="20" name="konten"></textarea></td>
		</tr>
		<?php if(isset($_SESSION['konten_error'])) echo "*".$_SESSION['konten_error']."<br>"?>
		<tr>
			<td>Foto</td>
			<td>:</td>
			<td><input type="file" name="foto"></td>
		</tr>
		<tr>
			<td><input type="submit" name="posting" value="Posting"></td>
		</tr>
	</table>
</form>
</body>
</html>

<?php 
unset($_SESSION['konten_error']);
unset($_SESSION['post_error']);
?>