<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysql_query("DELETE FROM input WHERE id='$id'")or die(mysql_error());

header("location:input-opsi-guru.php?pesan=hapus");
?>