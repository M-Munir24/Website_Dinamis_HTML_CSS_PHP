<?php 
session_start();

 if (!isset($_SESSION["login"])) {
 	
	header("Location:../login/login.php");
	exit;
} 

 ?>

<html>
<head>
<title>Web pertamaku</title>
<link rel="stylesheet" type="text/css" href="../css/admin.css">

</head>
<body>
	<div id="site-container">
		<div id="header">
		<h1>Selamat Datang Admin</h1>
		
		</div><!--Akhir Header-->
		<div id="menu-content">
			<div id="menu">
			<h3 class="judul_1">Main Menu</h3>
			<ul>
				<li><a href="index.php?p=home">Home</a></li>
				<li><a href="index.php?p=tambah">Input</a></li>
				<li><a href="index.php?p=output">Output</a></li>
				<li><a href="index.php?p=kontak">Contact</a></li>
				<li><a href="../index.php">Logout</a></li>
			</ul>
			</div><!--Akhir Menu-->

			<div id="content">

			<?php
			$pages_dir = 'pages';
			if(!empty($_GET['p'])){
				$pages = scandir($pages_dir, 0);
				unset($pages[0], $pages[1]);
			
				$p = $_GET['p'];
				if(in_array($p.'.php', $pages)){
				include($pages_dir.'/'.$p.'.php');
				} else {
					echo 'Halaman tidak ditemukan! :(';
				}
				} else {
					include($pages_dir.'/home.php');
					}
			?>
			</div><!--Akhir Content-->
			<br class="floating"/>
		</div><!--Akhir menu-content-->
		<div id="footer">
			<p>Yayasan Tebar Iman&copy;2016.</p>
		</div><!--Akhir Footer-->
	</div><!--Akhir site-container-->
</body>
</html>