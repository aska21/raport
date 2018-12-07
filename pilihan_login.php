<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Halaman Awal</title>
<style type="text/css"> 
body  {
	font: 100% Verdana, Arial, Helvetica, sans-serif;
	background: #666666;
	margin: 0;
	padding: 0;
	text-align: center;
	color: #000000;
}

.twoColElsLt #container { 
	width: 50em;
	height: 42em;
	background: #FFFFFF;
	margin: -15 auto;
	border: 1px solid #000000;
	text-align: left;
	box-sizing: border-box;
} 

.twoColElsLt #sidebar1 {
	float: left; 
	width: 12em;
	height: 38em;
	background: #EBEBEB;
	padding: 15px 0;
}
.twoColElsLt #sidebar1 h3, .twoColElsLt #sidebar1 p {
	margin-left: 10px;
	margin-right: 10px;
}

.twoColElsLt #mainContent {
 	margin: 0 1.5em 0 15em;
	height: 20em;
} 

.fltrt {
	float: right;
	margin-left: 8px;
}
.fltlft {
	float: left;
	margin-right: 8px;
}
.clearfloat {
	clear:both;
    height:0;
    font-size: 1px;
    line-height: 0px;
}

.kotak_login{
	width: 350px;
	height: 530px;
	background: linear-gradient(#F5DEB3 50%, #fff 100%);
	/*meletakkan form ke tengah*/
	margin: -35px auto;
	padding: -5px 3px;
	border: 5px solid gray;
	border-radius: 5px;
}

input[type=submit]{
	font-size: 15px;
	background: linear-gradient(#53bd84 5%, #fff 100%);
	color: gray;
	font-weight: bold;
	cursor: pointer;
	width: 30%;
	padding: 10px;
	border-radius: 30px;
	outline: none;
}

.halaman_awal{
	/*membuat lembar form penuh*/
	box-sizing: border-box;
	padding: -5px 10px;
	font-size: 11pt;
	margin-bottom: 5px;
}

.masuk{
	width: 100px;
	background: linear-gradient(#F5DEB3 50%, #fff 100%);
	/*meletakkan form ke tengah*/
	margin: 5px auto;
	padding: 5px 5px;
	border: 2px solid cyan;
	margin-bottom:30px;
	border-radius: 10px;
}

</style></head>
<body class="twoColElsLt">
<div id="container">
  <div id="sidebar1">
    <h2><center>Wellcome To</center></h2>
    <center>
      <img src="images/logo.png" width="169" height="158">
    </center>
    <br/>
    <center>
    </center>
    <center><a href="index.php"><h4 class="masuk"><font face="verdana" color="black">Kembali</font></h4></a></center>
  </div>
  <div id="mainContent">
    <h1 align="center">Rapor Online SMKN 1</h1>
    <h2 align="center">Bandar Lampung</h2>
    <br/>
    <div class="kotak_login">
    <center><h3>Masuk Sebagai</h3></center>
    <hr/>
    <div class="halaman_awal">
		<center><img src="images/operator.png" width=100 height=100></center>
		<center><a href="loginadmin.php"><h4 class="masuk"><font face="verdana" color="black">Admin</font></h4></a></center>
		<center><img src="images/guru.png" width=100 height=100></center>
		<center><a href="login.php"><h4 class="masuk"><font face="verdana" color="black">Wali Kelas</font></h4></a></center>
		<center><img src="images/siswa.png" width=80 height=80></center>
		<center><a href="loginsiswa.php"><h4 class="masuk"><font face="verdana" color="black">Siswa<font></h4></a></center>
	</div>
    </div>
  </div>
</div>
</body>
</html>