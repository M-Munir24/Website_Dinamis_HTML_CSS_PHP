<?php 
require '../system/functions.php';

//ambil data di url
$id = $_GET ["id"];

//query data san sesuai id nya
$san  = query("SELECT * FROM santri WHERE id = $id")[0];

 ?>


<html>
<head>
<title>Web pertamaku</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div id="site-container">
        <div id="header">
        	<a href="../login/login.php"><input type="button" value="Login" class="login1" ></a>
        </div><!--Akhir Header-->
         <div id="menu1">
             <a href="../index.php?p=home"><button>Home</button></a>
             <a href="../index.php?p=gallery"><button>Gallery</button></a>
             <a href="../index.php?p=artikel"><button>Blog</button></a>
             <a href="../index.php?p=kontak"><button>Kontak</button></a>

               
           
         </div>
        <div id="menu-content">
            <div id="menu">
            <h3 class="judul_1">Main Menu</h3>
            <ul>
      <li><a href="../index.php?p=datsan">Daftar Santri YTI 24</a></li>


            </ul>
            
            </div><!--Akhir Menu-->
            <div id="content">

			<h1>Profil</h1>
			<hr><br>

<input type="hidden" name="id" value="<?= $san["id"]; ?>">

<p>
<img class="imgdtl" src="../admin/img/<?= $san['gambar']; ?>" >

	<table cellspacing="20">
		<tr>
			<td><label for="nama">Nama </label></td>
			<td>:</td>
			<td><?= $san["nama"]; ?></td>
		</tr>
		<tr>
			<td><label for="alamat">Alamat</label></td>
			<td>:</td>
			<td><?= $san["alamat"]; ?></td>
		</tr>
		<tr>
			<td><label for="emial">Email </label></td>
			<td>:</td>
			<td><?= $san["email"]; ?></td>
		</tr>
		<tr>
			<td><label for="fb">Facebook </label></td>
			<td>:</td>
			<td>[....]</td>
		</tr>
		<tr>
			<td><label for="nohp">No.telp </label></td>
			<td>:</td>
			<td><?= $san["nohp"]; ?></td>
		</tr>
		<tr>
			<td><label for="jurusan">Jurusan </label></td>
			<td>:</td>
			<td><?= $san["jurusan"]; ?></td>
		</tr>
		
	</table>

</p><br>

<p>
	<h3>Kesan & Pesan Selama Belajar Di "YTI"</h3>
	<hr width ="400" color="lightblue"><br>
	
	<ul>
	<li>Kesan</li>
	<hr width ="200" color="orange">
		<p>[........]</p>
	
<br>

	<li>Pesan</li>
	<hr width ="200" color="orange">
		<p>[........]</p>

</p>	


			</div><!--Akhir Content-->
			<br class="floating"/>
		</div><!--Akhir menu-content-->
		<div id="footer">
			<p>Yayasan Tebar Iman&copy;2016.</p>
		</div><!--Akhir Footer-->
	</div><!--Akhir site-container-->
</body>
</html>
