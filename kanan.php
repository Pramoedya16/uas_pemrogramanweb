
      <div class="title_box">Alamat Kantor</div>  
      <div class="border_box">

      <?php 

        echo "<br /><p>Jl. Bido II No.1a
SURAKARTA
<br>Telp (081228792259) ,<br>Fax (021) 7290331
              </p><br />";

      ?>
      </div>  	 
	 
	 
     
     <div class="banner_adds">

<?php
$banner=mysql_query("SELECT * FROM banner ORDER BY id_banner DESC LIMIT 4");
while($b=mysql_fetch_array($banner)){
  echo "<p align='center'><a href='$b[url]'' target='_blank' title='$b[judul]'><img src='foto_banner/$b[gambar]' border=0></a></p>";
}

?>
     </div>        
