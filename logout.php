<?php 
session_start();
session_destroy();
header("location:pilihan_login.php");
?>