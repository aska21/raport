<!DOCTYPE html>
<html>
<head>
	<title>Input Nilai</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div class="judul">		
		<h1>Input Nilai Siswa</h1>
		<h2>SMKN 1 B. Lampung</h2>
	</div>
	
	<br/>

	<a href="input-opsi-guru.php">Lihat Semua Data</a>

	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi-guru.php" method="post">		
		<table>
			<tr>
				<td>Nis</td>
				<td><input type="text" name="nis"></td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas"></td>					
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="jurusan"></td>					
			</tr>
			<tr>
				<td>B Indo</td>
				<td><input type="text" name="b_indo"></td>					
			</tr>
			<tr>
				<td>B Ing</td>
				<td><input type="text" name="b_ing"></td>					
			</tr>
			<tr>
				<td>Matematika</td>
				<td><input type="text" name="matematika"></td>					
			</tr>
			<tr>
				<td>P Agama</td>
				<td><input type="text" name="p_agama"></td>					
			</tr>
			<tr>
				<td>Kewarganegaraan</td>
				<td><input type="text" name="kewarganegaraan"></td>					
			</tr>
			<tr>
				<td>Penjas</td>
				<td><input type="text" name="penjas"></td>					
			</tr>
			<tr>
				<td>Seni Budaya</td>
				<td><input type="text" name="seni_budaya"></td>					
			</tr>
			<tr>
				<td>Total</td>
				<td><input type="text" name="total"></td>					
			</tr>
			<tr>
				<td>Rata Rata</td>
				<td><input type="text" name="rata_rata"></td>					
			</tr>
			<tr>
				<td>Peringkat</td>
				<td><input type="text" name="peringkat"></td>					
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>
			<tr>
				<td></td>
				<td><a href="logout.php">Logout</a></td>					
			</tr>
		</table>
	</form>
</body>
</html>