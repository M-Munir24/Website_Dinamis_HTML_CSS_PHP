<?php 

require '../system/functions.php';

$santri = query("SELECT * FROM santri  ORDER BY id DESC");//ORDER BY .. ASC (urutan)

//tombol cari di klik
if (isset($_POST["cari"])) {
	$santri = cari($_POST["keyword"]);
	
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>	
</head>
<body>


<h1>Daftar Santri</h1>
<hr color="silver"><br>

<a href="index.php?p=tambah"><button class="tambah">Tambah Data Santri</button></a>


<form action="" method="post">

	<input class="icari" type="text" name="keyword" size="30"  placeholder="Masukkan keyword pencaarian..." autocomplete="off"><!-- autofocus -->
	<button class="cari" type="submit" name="cari">Cari</button>	
</form>


<br>
	<?php  $i = 1; ?>
	<?php foreach ($santri as $row ) { ?>
<div class="output">
	<img class="imgt" src="img/<?= $row["gambar"]; ?>">
	
	<p>
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?= $row["nama"]; ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?= $row["alamat"]; ?></td>
		</tr>
		<tr>
			<td>Facebook</td>
			<td>:</td>
			<td><?= $row["fb"]; ?></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td>:</td>
			<td><?= $row["email"]; ?></td>
		</tr>
		<tr>
			<td>No.telp</td>
			<td>:</td>
			<td><?= $row["nohp"]; ?></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td><?= $row["jurusan"]; ?></td>
			
		</tr>
		<tr>
			
			<td>Kesan</td>
			<td>:</td>
			<td><?= $row["kesan"]; ?></td>
			
		</tr>
		<tr>
			
			<td>Pesan</td>
			<td>:</td>
			<td><?= $row["pesan"]; ?></td>
			
		</tr>

	</table>
	<h5 class="num"><?= $i; ?></h5>
<a  href="pages/ubah.php?id= <?= $row["id"] ?>">
		<button type="submit" class="ubah">ubah</button></a>

		<a  href="pages/hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin Hapus..!'); ">
		<button type="submit" class="hapus">hapus</button></a>
</div>
</p>

<?php $i++ ?>
<?php } ?>




</table>


</body>
</html>