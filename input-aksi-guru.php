<?php 
include 'koneksi.php';
$nis = $_POST['nis'];
$nama= $_POST['nama'];
$kelas= $_POST['kelas'];
$jurusan= $_POST['jurusan'];
$b_indo= $_POST['b_indo'];
$b_ing= $_POST['b_ing'];
$matematika= $_POST['matematika'];
$p_agama= $_POST['p_agama'];
$kewarganegaraan= $_POST['kewarganegaraan'];
$penjas= $_POST['penjas'];
$seni_budaya= $_POST['seni_budaya'];
$total= $_POST['total'];
$rata_rata= $_POST['rata_rata'];
$peringkat= $_POST['peringkat'];

mysql_query("INSERT INTO input VALUES('','$nis','$nama','$kelas','$jurusan','$b_indo','$b_ing','$matematika','$p_agama','$kewarganegaraan','$penjas','$seni_budaya','$total','$rata_rata','$peringkat')");

header("location:input-opsi-guru.php?pesan=input");
?>
