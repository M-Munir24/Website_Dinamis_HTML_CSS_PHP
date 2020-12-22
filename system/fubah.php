<?php 
require 'functions.php';

function ubah($data){

	global $conn;

	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$fb = htmlspecialchars($data["fb"]);
	$email=htmlspecialchars($data["email"]);
	$nohp = htmlspecialchars($data["nohp"]);
	$jurusan=htmlspecialchars($data["jurusan"]);
	$kesan = htmlspecialchars($data["kesan"]);
	$pesan = htmlspecialchars($data["pesan"]);

//$gambar= htmlspecialchars($data["gambar"]);

	$gambarLama=htmlspecialchars($data["gambarLama"]);


	//cek apakah user pilih gambar baru atau tidak
	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambarLama;
	}else{
		$gambar = upload();
	}
	

	$query="UPDATE santri SET 
			nama = '$nama',
			alamat= '$alamat',
			email = '$email',
			fb = '$fb',
			nohp = '$nohp',
			jurusan = '$jurusan',
			kesan = '$kesan',
			pesan = '$pesan',
			gambar = '$gambar'

			WHERE id = $id

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
	if ( $ukuranFile > 100000000) {

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



	move_uploaded_file($tmpName, '../img/'. $namaFileBaru);// diubah $namaFile

	return $namaFileBaru;

}
 ?>