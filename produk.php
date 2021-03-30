<!DOCTYPE html>

<html>
<head>
    <title></title>
	<meta charset="utf-8" />
    <link rel='stylesheet' href='css1.css' type='text/css' />
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true" >
</head>
<body>
 
   <header>

        <div class="logo">

        </div>

        <center>
        
            <ul>
                <li> <a href="index">Home</a> </li>
                 <li> <a href="artikel">Artikel</a> </li>
				<li> <a href="produk">Produk</a> </li>
                <li> <a href="PesandanKonsultasi">Kontak</a></li>
            </ul>

        </center>
        <div>

        </div>
    </header>
	<br/><br/><br/><br/>
 <div class='konten'> 
	<div>
	 <?php 
	   include('conn.php'); 
	   $tampil = mysqli_query($conn,"SELECT * FROM produk ORDER BY id_produk ASC");
	   while (($row = mysqli_fetch_array($tampil))) { 
	   ?>  
     <div class='product-content'>
		<img src='<?php echo $row['gambar']; ?>' width='200px' />
		<div class='harga'> 
			<p class='product-name'><b> <?php echo $row['judul']; ?></b></p>
			<br/>
			<div>
			<p class='text-info'><?php echo substr($row['content'],0,150); ?></p>
			</div>
				<a href='baca-produk/<?php echo $row['id_produk']; ?>'>
							<input type='submit' name='submit'  value='Baca' />
				</a>
				
			<br/><br/>
	
			<p class='Harga'><?php echo $row['harga']; ?></p>
			<div>
			</div>
		</div>
	 </div>
	 <br/>
	   <?php } ?>
	   <div>
</div> 

		
		<br/><br/><br/>
  	   <footer style='margin-top:100px;padding-top:100px;'>
			 <center>
                <ul >
                      <li > <a href="index.html">Home</a> </li>
					   <li> <a href="artikel.html">Artikel</a> </li>
                      <li > <a href='Produk.html'>Produk</a> </li>
                      <li> <a href=#>About</a> </li>
                  </ul>
             </center> 
   </footer>
 
</body>
</html>