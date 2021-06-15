<?php 
session_start();
 
session_destroy();
 
header("location:login.php?pesan=anda berhasil logout.");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="index.php">kembali</a>
</body>
</html>