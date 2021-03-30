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
                <li> <a href="index.html">Home</a> </li>
                 <li> <a href="artikel.html">Artikel</a> </li>
				<li> <a href="Produk.html">Produk</a> </li>
                <li > <a href=#>About</a> </li>
            </ul>

        </center>
        <div>

        </div>
    </header>
   
 <br/>
 <div class='page'>
 <?php 
 include("conn.php");
 $id= $_GET['id'];
 $tampil  = mysqli_query($conn,"SELECT * FROM artikel WHERE id_artikel='$id' ");
 while ($row = mysqli_fetch_array($tampil)) {
 ?>
	<diV class='read-content'>
		<center>
			<div class='judul'><?php echo $row['judul']; ?></div>
		</center>
		<br/>
		<center>
		<img src='<?php echo $row['gambar']; ?>' width='500px' />
		</center>
<div> 
		<div class='artikel-content' > 
<p>  
	<?php echo $row['content']; ?>  
</p>
		</div> 
	</div>
</div>
<?php } ?>
</div>
	 <br /><br /><br />
<center>
	<div class='gotoProduk'> 
		<a href>Klik Disini!!</a>
	</a>
	</div>
</center>
	<br /><br />
    <br /><br />
    <br /><br />
    <br /><br />
	   <footer>
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
