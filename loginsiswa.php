<!DOCTYPE html>
<html>
<head>
	<title>Validasi Siswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
	<br/>
	<center><h2>SILAHKAN LOGIN</h2></center>
	<br/>
	<div class="login">
	<br/>
		<form action="prosesloginsiswa.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" placeholder="Username..." />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" placeholder="*****" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol">
				<a class="kembali" href="pilihan_login.php">Kembali</a>
			</div>
		</form>
	</div>
</body>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username!="" && password!="") {
			alert('Klik "OK" untuk lanjutkan');
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}

</script>
</html>