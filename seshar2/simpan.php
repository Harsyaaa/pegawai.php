<?php
	include 'koneksi.php';

		$nip='';
		$nama='';
		$tempat_lahir='';
		$alamat='';


if (isset($_POST['nip']) || isset($_POST['nama']) || isset($_POST['tempatL']) || isset($_POST['alamat'])) {
		 $nip = $_POST['nip'];
 		 $nama = $_POST['nama'];
 		 $tempat_lahir = $_POST['tempatL'];
 		 $alamat = $_POST['alamat'];
 		 mysqli_query($conn,"INSERT INTO tb_pegawai VALUES('','$nip','$nama','$tempat_lahir',
	'$alamat')");
 		 echo "data berhasil di simpan <a href='homepage.php'>Ok</a>";
}
	else{
		echo "data tidak lengkap";
		die("kembali input <a href='homepage.php'>disini</a>");
	}
 		
?>