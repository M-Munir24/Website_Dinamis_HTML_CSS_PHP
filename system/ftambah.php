<?php

require 'functions.php';

function tambah($data){
global $conn;

	// $nim = $data["nim"];
	// $nama = $data["nama"];
	// $email=$data["email"];
	// $jurusan=$data["jurusan"];
	// $gambar= $data["gambar"];

//untuk mencegah orang iseng/hack (htmlspecialchars)
	$nama = htmlspecialchars($data["nama"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$email=htmlspecialchars($data["email"]);
	$fb=htmlspecialchars($data["fb"]);
	$nohp = htmlspecialchars($data["nohp"]);
	$jurusan=htmlspecialchars($data["jurusan"]);
	$kesan=htmlspecialchars($data["kesan"]);
	$pesan=htmlspecialchars($data["pesan"]);




//upload gambar
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	$query="INSERT INTO santri 
					VALUES
   ('id','$nama','$alamat','fb','$email','$nohp','$jurusan','$kesan','$pesan','$gambar')
					";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}


function upload(){
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	//cekapakah tidak ada yg di upload
	if ($error === 4) {
		echo "<script>
		alert('pilih gambar');
		</script>";

		return false;
	}

//cek apakah yg di upload adalah gambar
	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);//exsplode : memecah sebuah string menjadi array
	$ekstensiGambar = strtolower(end($ekstensiGambar)); 
	//strtolower : memeaksa semua ekstensi menjadi huruf kecil semua JPG  //end : mengambil ekstensi paling akhir dari sebuah nama file

	if ( !in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
		alert('file tidak sesuai');
		</script>";
		return false;
	}

	//jika ukuranya tidak sesuai
///////pERLU KONFIGURASI FILE PHP.INI upload_max_filesize = 1000M dan post_max_size = 1000M
	if ( $ukuranFile > 1000000000) {

		echo "<script>

		alert('Ukuran gambar terlalu besar..');

		</script>";

		return false;
	}

	//lolos pengecekan gambar siap diaploaf
	//...
	//generate nama gambar
	$namaFileBaru = uniqid(); // untuk membangkitkan string rendem angka yg nantinya akan menjadi nama file gambar kita
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;



	move_uploaded_file($tmpName, 'img/'. $namaFileBaru);// diubah $namaFile

	return $namaFileBaru;

}


 ?>