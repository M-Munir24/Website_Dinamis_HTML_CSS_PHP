
<?php 
require 'system/functions.php';

//menampilkan data santri dari databse
$santri = query("SELECT * FROM santri  ORDER BY id DESC");//ORDER BY .. ASC (urutan)

//tombol cari di klik

if (isset($_POST["cari"])) {

    $santri = cari($_POST["keyword"]);
    
}



 ?>

                <h1 class="judul_2">Daftar Santri YTI Angkatan_24</h1>

             
<hr color="silver"><br>




<form action="" method="post">
<div class="cari1">
    <button class="cari" type="submit" name="cari">Cari</button>
    <input class="icari" type="text" name="keyword" size="30"  placeholder="Masukkan keyword pencarian..." autocomplete="off"><!-- autofocus -->
   </div><br><br>

   

</form>
   
    <?php foreach ($santri as $row ) { ?>

    
       
        <figure class="fgr">

<a href="page/dtlsan.php?id= <?= $row["id"] ?>"><img class="imgt" src="admin/img/<?= $row["gambar"]; ?>"></a> 
      <figcaption class="figc" ><?= $row["nama"]; ?></figcaption>
        </figure>

                       <!-- <table>
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
                   </table> -->
 
                  

                
        
        

<?php } ?>





