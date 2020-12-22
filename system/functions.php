<?php 

//koneksi ke Dabes
// mysqli_connect("localhost","root","","phpdasar");
$server = "localhost";
$user  = "root";
$password = "";
$nama_db = "datasantri";

$conn = mysqli_connect($server,$user,$password,$nama_db);

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}

// function hapus($id){
// 	global $conn;
// 	mysqli_query($conn, "DELETE FROM santri WHERE id = $id");

// 	return mysqli_affected_rows($conn);
// }

// function cari($keyword){
// 	$query = "SELECT * FROM santri 
// 				WHERE
// 				nama LIKE '%$keyword%' OR
// 				alamat LIKE '%$keyword%' OR
// 				fb LIKE '%$keyword' OR
// 				email LIKE '%$keyword%' OR
// 				nohp LIKE '%$keyword%' OR
// 				jurusan LIKE '%$keyword%'
// 				";

// 	return query($query);
// }
//  ?>