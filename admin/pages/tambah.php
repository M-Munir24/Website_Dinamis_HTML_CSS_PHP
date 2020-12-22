<?php 
//koneksi dabes
// $conn=mysqli_connect("localhost","root","","phpdasar");

//
require '../system/ftambah.php';


//cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {
	// var_dump($_POST); 
	// var_dump($_FILES); die;


	//cek apakah data berhasil ditambah atau tidak 2
	if (tambah($_POST) > 0) {
		// echo "Data barhasil ditambahkan.!";
		echo "

			<script>
				alert('Data Berhasil Ditambahkan.!');
				document.location.href='index.php?p=output';
			</script>

			";
	}else{
		// echo "data gagal ditambahkan!";
		echo "

			<script>
				alert('Data Gagal Ditambahkan.!');
				document.location.href='index.php?p=output';
			</script>

			";
	}


}

//misal orang iseng : <div style="position:absolute; bottom:0; left:0; right:0; background-color:#000; font-size:100px; color:red; text-align:center;">HAHAHAHA ANDA TELAH DI HACK!!!!</div>

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Santri</title>
</head>
<body>
<h1>Tambah Data Santri</h1>


<form action="" method="post" enctype="multipart/form-data">
	<table class="tbli" cellspacing="25">
		<tr>
			<td><label for="nama">Nama </label></td>
			<td>:</td>
			<td><input type="text" name="nama" id="nama" required size="60"></td>
		</tr>
		<tr>
			<td><label for="alamat">Alamat </label></td>
			<td>:</td>
			<td><input type="text" name="alamat" id="alamat" size="60"></td>
		</tr>
		<tr>
			<td><label for="email">E-mail </label></td>
			<td>:</td>
			<td><input type="text" name="email" id="email" size="60" ></td>
		</tr>
		<tr>
			<td><label for="fb">Facebook</label></td>
			<td>:</td>
			<td><input type="text" name="fb" id="fb" size="60" ></td>
		</tr>
		<tr>
			<td><label for="nohp">No.telp </label></td>
			<td>:</td>
			<td><input type="text" name="nohp" id="nohp" size="40" ></td>
		</tr>
		<tr>
			<td><label for="jurusan">Jurusan</label></td>
			<td>:</td>
			<td>
		<input type="radio" name="jurusan" id="komputer" value="komputer"><label name="jurusan" for="komputer">Komputer</label>

		<input type="radio" name="jurusan" id="Otomotif" value="Otomotif"><label name="jurusan" for="Otomotif">Otomotif</label>

		<input type="radio" name="jurusan" id="Menjahit" value="Menjahit"><label name="jurusan" for="Menjahit">Menjahit</label>
			</td>
		</tr>
		<tr>
			<td><label for="kesan">Kesan </label></td>
			<td>:</td>
			<td><input type="text" name="kesan" id="kesan" size="60" ></td>
		</tr>
		<tr>
			<td><label for="pesan">E-mail </label></td>
			<td>:</td>
			<td><input type="text" name="pesan" id="pesan" size="60" ></td>
		</tr>

		<tr>
			<td><label for="gambar">Gambar</label></td>
			<td>:</td>
			<td><input type="file" name="gambar" id="gambar"></td>
		</tr>
		


	</table>
<button class="but"  type="submit" name="submit">Tambah Data Santri</button>

</form>



</body>
</html>