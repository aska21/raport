<!DOCTYPE html>
<html>
<head>
	<title>Opsi Edit</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div class="judul">		
		<h1>Edit Nilai Siswa</h1>
		<h2>SMKN 1 B. Lampung</h2>
	</div>
	
	<br/>
	
	<a href="input-opsi-guru.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM input WHERE id='$id'")or die(mysql_error());
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update-guru.php" method="post">		
		<table>
			<tr>
				<td>Nis</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="nis" value="<?php echo $data['nis'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>					
			</tr>	
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas" value="<?php echo $data['kelas'] ?>"></td>					
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="jurusan" value="<?php echo $data['jurusan'] ?>"></td>					
			</tr>
			<tr>
				<td>B Indo</td>
				<td><input type="text" name="b_indo" value="<?php echo $data['b_indo'] ?>"></td>					
			</tr>
			<tr>
				<td>B Ing</td>
				<td><input type="text" name="b_ing" value="<?php echo $data['b_ing'] ?>"></td>					
			</tr>
			<tr>
				<td>Matematika</td>
				<td><input type="text" name="matematika" value="<?php echo $data['matematika'] ?>"></td>					
			</tr>
			<tr>
				<td>P Agama</td>
				<td><input type="text" name="p_agama" value="<?php echo $data['p_agama'] ?>"></td>					
			</tr>
			<tr>
				<td>Kewarganegaraan</td>
				<td><input type="text" name="kewarganegaraan" value="<?php echo $data['kewarganegaraan'] ?>"></td>					
			</tr>
			<tr>
				<td>Penjas</td>
				<td><input type="text" name="penjas" value="<?php echo $data['penjas'] ?>"></td>					
			</tr>
			<tr>
				<td>Seni Budaya</td>
				<td><input type="text" name="seni_budaya" value="<?php echo $data['seni_budaya'] ?>"></td>					
			</tr>
			<tr>
				<td>Total</td>
				<td><input type="text" name="total" value="<?php echo $data['total'] ?>"></td>					
			</tr>
			<tr>
				<td>Rata Rata</td>
				<td><input type="text" name="rata_rata" value="<?php echo $data['rata_rata'] ?>"></td>					
			</tr>
			<tr>
				<td>Peringkat</td>
				<td><input type="text" name="peringkat" value="<?php echo $data['peringkat'] ?>"></td>					
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>