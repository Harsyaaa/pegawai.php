<?php
include 'koneksi.php';
session_start();

if (isset($_POST['username']) || isset($_POST['password'])) {
	$username = $_POST['username']; 
	$password = $_POST['password'];
}

$login =mysqli_query($conn,"SELECT * FROM tgb_user WHERE username='$username' AND password='$password'");
$ketemu =mysqli_num_rows($login);
$r=mysqli_fetch_array($login);

//found username & pass

if($ketemu > 0){
	$_SESSION[username] = $r[username];
	$_SESSION[password] = $r[password];
	$_SESSION[level] = $r[level];

	if($_SESSION[level]==1){
		header('location:homepage.php');
	}else if($_SESSION[level]==2){
		header('location:homepage.php');
	}else if($_SESSION[level]==3){
		header('location:homepage.php');
	}
}
else{
	echo "fail";
	header('location:index.php');
}
?>