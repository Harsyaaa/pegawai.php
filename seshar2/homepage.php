<html>
<body>
<?php
session_start();
 if (isset($_SESSION['username'])) {
  	include 'koneksi.php';
?>
<table border="0" width="500" align="center" height="200">
<form name='fhomepage' action="simpan.php" method='POST'>
<tr>
<td colspan="2" align="center" bgcolor="lightblue">Form input pegawai</td>
</tr>
<tr>
<td>NIP :</td>
<td><input type="nip" name="nip" size="20" maxlenght="20"></td>
</tr>
<td>Nama Pegawai :</td>
<td><input type="nama" name="nama" size="25" maxlenght="50"></td>
</tr>
<td>Tempat Lahir :</td>
<td><input type="tempatL" name="tempatL" size="20" maxlenght="25"></td>
</tr>
<td>Alamat :</td>
<td><textarea name="alamat"></textarea></td>
</tr>
<tr>
	<td colspan="2" align="center"><input type="submit" name="submit" value="Simpan">
	<input type="reset" name="reset" value="Batal">
	<input type="button"   "a href='logout.php'">
	<button onclick="goBack()">Kembali</button>
<script>
function goBack() {
  window.history.back();
}
</script>
</td>
</tr>
</form>
</table>
<br><br>
<a href="logout.php">Logout</a>
<?php
}
else{
	echo "anda tidak login <a href='index.php'>Login</a>"; 
}
 ?>
</body>
</html>
