<!DOCTYPE html>
<html>
<head>
    <title></title>
	<meta charset="utf-8" />
	<base href="http://localhost/websobib/baca-produk" />
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
		
    </header>

	<br/><br/><br/><br/>
 	<?php 
		if(isset($_GET['id'])) {
			$id = $_GET['id'];
	?>
		
 <div class='page'>
 <?php 
 include("conn.php");
 $tampil  = mysqli_query($conn,"SELECT * FROM produk WHERE id_produk='$id'");
	/*if(mysqli_num_rows($tampil) == 0)
		header('location:produk.php');*/
		
 while ($row = mysqli_fetch_array($tampil)) {
 ?>
	<diV class='read-content'>
		<center>
			<div class='judul'><?php echo $row['judul']; ?></div>
		</center>
		<br/>
		<center>
		<img src='<?php echo $row['gambar']; ?>' width='60%' />
		</center>
		<div> 
		<div class='artikel-content' > 
  
		<?php echo $row['content']; ?>  

		</div> 
	</div>
</div>
<?php } ?>
</div>

<div class='form-pos'>
		<center>
		<p style='font-size:25px;'>Produk Lainnya</p>
		
		<?php
		$tampil  = mysqli_query($conn,"SELECT * FROM produk where id_produk<>'$id'");
		while ($row = mysqli_fetch_array($tampil)) {
			$id=$row['id_produk'];
		?>
		<div style="background-color:#fff;box-shadow:0px 0px 1px 1px rgba(80,80,80,.3);width:80%;overflow:hidden;padding-bottom:10px;">
		 <p style='font-size:20px;'> <?php echo $row['judul']; ?> </p>
		 <img src='<?php echo $row['gambar']; ?>' height='100px' />
		 <div style="color:#000; margin-top:10px;padding:0px 10px 10px 10px;">
		  <?php echo substr($row['content'],0,150); ?>...
		 </div>
		 <a href='baca-produk/<?php echo preg_replace('/[^A-Za-z0-9\-]/', '',$row['id_produk']); ?>'>
							<input type='submit' name='submit'  value='Baca' />
		 </a>
		</div> 
		
		<?php } ?>
		</center>
</div>
</div>
<?php } ?>
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

