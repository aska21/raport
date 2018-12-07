<!DOCTYPE html>
<html>
<head>
	<title>Input Nilai Siswa</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div class="judul">		
		<h1>Input Nilai Siswa</h1>
		<h2>SMKN 1 B. Lampung</h2>
	</div>
	<br/>

	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "<script>alert('Data berhasil di input')</script>";
		}else if($pesan == "update"){
			echo "<script>alert('Data berhasil di update')</script>";	
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="inputguru.php">+ Tambah Data Baru</a>
	<br/>
	<a href="logout.php">Logout</a>
	<h3>Data Siswa</h3>
	<table border="1" class="table">
		<tr>
			<th>Nis</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Jurusan</th>
			<th>B Indo</th>
			<th>B Ing</th>
			<th>Matematika</th>
			<th>P Agama</th>
			<th>Kewarganegaraan</th>
			<th>Penjas</th>
			<th>Seni Budaya</th>
			<th>Total</th>
			<th>Rata Rata</th>
			<th>Peringkat</th>
			<th>Opsi</th>
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM input")or die(mysql_error());
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $data['nis']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['kelas']; ?></td>
			<td><?php echo $data['jurusan']; ?></td>
			<td><?php echo $data['b_indo']; ?></td>
			<td><?php echo $data['b_ing']; ?></td>
			<td><?php echo $data['matematika']; ?></td>
			<td><?php echo $data['p_agama']; ?></td>
			<td><?php echo $data['kewarganegaraan']; ?></td>
			<td><?php echo $data['penjas']; ?></td>
			<td><?php echo $data['seni_budaya']; ?></td>
			<td><?php echo $data['total']; ?></td>
			<td><?php echo $data['rata_rata']; ?></td>
			<td><?php echo $data['peringkat']; ?></td>
			<td>
				<a class="edit" href="edit-guru.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" href="hapus-guru.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>