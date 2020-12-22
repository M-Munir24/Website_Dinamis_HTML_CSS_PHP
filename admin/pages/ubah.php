<?php 
require '../../system/fubah.php';

//ambil data di url
$id = $_GET ["id"];

//query data san sesuai id nya
$san  = query("SELECT * FROM santri WHERE id = $id")[0];

// var_dump($san[0]["nim"]);


//cek apakah tomboal submit sudah ditekan
if (isset($_POST["submit"])) {

//apakah data berhasil diubah
if (ubah($_POST) > 0) {
echo "

			<script>
				alert('Data Berhasil Diubah.!');
				document.location.href='../index.php?p=output';
			</script>

			";
	}else{
		// echo "data gagal ditambahkan!";
		echo "

			<script>
				alert('Data Tidak Diubah.!');
				document.location.href='../index.php?p=output';
			</script>

			";
	}


}


 ?>



<html>
<head>
<title>Web pertamaku</title>
<link rel="stylesheet" type="text/css" href="../../css/admin.css">

</head>
<body>
	<div id="site-container">
		<div id="header">
		<h1>Website Pertamaku</h1>
		</div><!--Akhir Header-->
		<div id="menu-content">
			<div id="menu">
			<h3 class="judul_1">Main Menu</h3>
			<ul>
				<li><a href="../index.php">Home</a></li>
				<li><a href="../index.php?p=tambah">Input</a></li>
				<li><a href="../index.php?p=output">Output</a></li>
				<li><a href="../index.php?p=kontak">Contact</a></li>
			</ul>
			</div><!--Akhir Menu-->

			<div id="content">

			<h1>Edit Data Santri</h1>


<form action="" method="post" enctype="multipart/form-data">

	<input type="hidden" name="id" value="<?= $san["id"]; ?>">
	<input type="hidden" name="gambarLama" value="<?= $san["gambar"]; ?>">

	<table class="tbli" cellspacing="6">
		<tr>
			<td><label for="nama">Nama </label></td>
			<td>:</td>
			<td><input size="55" type="text" name="nama" id="nama" required value="<?= $san["nama"]; ?>"></td>
		</tr>
		<tr>
			<td><label for="alamat">Alamat</label></td>
			<td>:</td>
			<td><input size="55" type="text" name="alamat" id="alamat" value="<?= $san["alamat"]; ?>"></td>
		</tr>
		<tr>
			<td><label for="emial">Email </label></td>
			<td>:</td>
			<td><input size="55" type="text" name="email" id="email" value="<?= $san["email"]; ?>" ></td>
		</tr>
		<tr>
			<td><label for="fb">Facebook </label></td>
			<td>:</td>
			<td><input size="55" type="text" name="fb" id="fb" value="<?= $san["fb"]; ?>" ></td>
		</tr>
		<tr>
			<td><label for="nohp">No.telp </label></td>
			<td>:</td>
			<td><input size="55" type="text" name="nohp" id="nohp" value="<?= $san["nohp"]; ?>"></td>
		</tr>
		<tr>
			<td><label for="jurusan">Jurusan </label></td>
			<td>:</td>
			<td><input size="55" type="text" name="jurusan" id="jurusan" value="<?= $san["jurusan"]; ?>"></td>
		</tr>
		<tr>
			<td><label for="kesan">Kesan </label></td>
			<td>:</td>
			<td><input size="55" type="text" name="kesan" id="kesan" value="<?= $san["kesan"]; ?>" ></td>
		</tr>

		<tr>
			<td><label for="pesan">Pesan</label></td>
			<td>:</td>
			<td><input size="55" type="text" name="pesan" id="pesan" value="<?= $san["pesan"]; ?>" ></td>
		</tr>
		<tr>
			<td><label for="gambar">Gambar</label></td>
			<td>:</td>
			<td><img src="../img/<?= $san['gambar']; ?>" width="100" >
			<input size="55" type="file" name="gambar" id="gambar"  ></td>
		</tr>
	</table>

		<button class="but" type="submit" name="submit">Ubah Data Santri</button>
	
</form>

			</div><!--Akhir Content-->
			<br class="floating"/>
		</div><!--Akhir menu-content-->
		<div id="footer">
			<p>Yayasan Tebar Iman&copy;2016.</p>
		</div><!--Akhir Footer-->
	</div><!--Akhir site-container-->
</body>
</html>
