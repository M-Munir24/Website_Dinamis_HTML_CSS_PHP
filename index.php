

<html>
<head>
<title>Web pertamaku</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div id="site-container">
        <div id="header">
            <a href="login/login.php"><input type="button" value="Login" class="login1" ></a>
        </div><!--Akhir Header-->
         <div id="menu1">
             <a href="index.php?p=home"><button>Home</button></a>
             <a href="index.php?p=gallery"><button>Gallery</button></a>
             <a href="index.php?p=artikel"><button>Blog</button></a>
             <a href="index.php?p=kontak"><button>Kontak</button></a>

               
           
         </div>
        <div id="menu-content">
            <div id="menu">
            <h3 class="judul_1">Data Santri</h3>
            <ul>
                <li><a href="index.php?p=datsan">Daftar Santri YTI 24</a></li>
            </ul>
            <br>
            <h3 class="judul_1">Kalender</h3>
            <ul>
             <li><a href="#"><?php echo date("l, d / M / Y"); ?></a></li>
            </ul>
            <br>
            <h3 class="judul_1">Video</h3>
            <ul>
                <li>
                        <iframe width="300" height="auto" src="https://www.youtube.com/embed/7bn3XeA6u7k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </li>
            </ul>
            <br>
            <h3 class="judul_1">Peta Lokasi</h3>
            <ul>
                <li>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.501637409512!2d106.74987691384129!3d-6.3289848636873876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69efbc657b7975%3A0xe092a7b2d12432e1!2sYayasan+Tebar+Iman!5e0!3m2!1sid!2sid!4v1552740721382" width="300" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
                </li>
            </ul>
            <br>
            <h3 class="judul_1">Kalender</h3>
            <ul>
                <li>
                        <!-------Do not change below this line-------><div align="center"><iframe src="//widget.calendarlabs.com/v1/calendar.php?cid=1001&ver=1.2&uid=6782543920&c=22&l=en&cbg=C3D9FF&cfg=000000&hfg=000000&hfg1=000000&ct=1&cb=1&cbc=2275FF&cf=verdana&cp=bottom&sw=0&hp=t&ib=0&ibc=&i=" align="center"  width="170" height="155" marginwidth=0 marginheight=0 frameborder=no scrolling=no allowtransparency='true'>Loading...</iframe><div align="center" style="width:140px;font-size:10px;color:#333;">Calendar Widget by <a href="https://www.calendarlabs.com/" target="_blank" rel="nofollow" style="font-size:10px;text-decoration:none;color:#333;">CalendarLabs</a></div></div><!-------Do not change above this line-------> 
                </li>
            </ul>
            
            </div><!--Akhir Menu-->
            <div id="content">
                
                <?php



            $page_dir = 'page';
            if(!empty($_GET['p'])){
                $page = scandir($page_dir, 0);
                unset($page[0], $page[1]);
            
                $p = $_GET['p'];
                if(in_array($p.'.php', $page)){
                include($page_dir.'/'.$p.'.php');
                } else {
                    echo 'Halaman tidak ditemukan! :(';
                }
                } else {
                    include($page_dir.'/home.php');
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