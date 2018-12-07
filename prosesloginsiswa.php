<?php 
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysql_query("select * from siswa where username='$username' and password='$password'");
$cek = mysql_num_rows($login);

if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:input_guru.php");
}else{
	echo "<script>alert('Ups ada yang salah, silahkan periksa kembali');window.location='login.php'</script>";	
}
?>