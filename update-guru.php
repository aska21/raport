<?php 

include 'koneksi.php';
$id = $_POST['id'];
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

mysql_query("UPDATE input SET nis='$nis', nama='$nama', kelas='$kelas', jurusan='$jurusan', b_indo='$b_indo', b_ing='$b_ing', matematika='$matematika', p_agama='$p_agama', kewarganegaraan='$kewarganegaraan', penjas='$penjas', seni_budaya='$seni_budaya', total='$total', rata_rata='$rata_rata', peringkat='$peringkat' WHERE id='$id'");

header("location:input-opsi-guru.php?pesan=update");
?>