<?php 

session_start();
//cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {

//cek user $ password
	$user = "admin";
	$password = "123";

if($_POST["username"]==$user  && $_POST["password"]== 
	$password ) {

				$_SESSION["login"]= true; //mencegah masuk directori admin tanpa login/izin


		//jika benar, masuk ke halaman admin
		header("Location:../admin/index.php");
		exit;
	}else {
		//jika salah, tampil pesan kesalahan
		$error = true;
	}
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
<?php if (isset($error)) { ?>
	echo "<script>
		alert('Username / Password Salah..!');
		</script>";
<?php } ?>

<center>
<div class="login">
<form action="" method="post">
	
		
		<h1 align="left">Login Admin</h1>
		<table>
		<tr>
			<td><label for="name">Username </label></td>
			<td>:</td>
			<td><input type="text" name="username" id="username" autocomplete="off"></td>
		</tr>
		<tr>
			<td><label for="name">Password </label></td>
			<td>:</td>
			<td><input type="password" name="password" id="password" autocomplete="off"></td>
		</tr>


	</table>
	
	
		<button  type="submit" name="submit">Login</button>


	
	
</form>

<a href="../index.php"><button >Kembali</button></a>
</center>
</div>
</body>
</html>