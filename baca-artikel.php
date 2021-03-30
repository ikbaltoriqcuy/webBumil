<!DOCTYPE html>
<html>
<head>
    <title></title>
	<meta charset="utf-8" />
	<base href="http://localhost/websobib/baca-artikel"/>
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
	<?php 
		if(isset($_GET['id'])) {
			$id = $_GET['id'];
	?>
<div class='konten'>
 
 <div class='page'>
 <?php 
 include("conn.php");
	$tampil  = mysqli_query($conn,"SELECT * FROM artikel WHERE id_artikel='$id'  ");
	
	/*if(mysqli_num_rows($tampil) == 0)
		header('location:artikel.php');
	*/
	if($tampil)
	while ($row = mysqli_fetch_array($tampil)) {
 ?>
	<div class='read-content'>
		<center>
			<div class='judul'><?php echo $row['judul']; ?></div>
		</center>
		<br/>
		<center>
		<img src='<?php echo $row['gambar']; ?>' width='60%' />
		</center>
		<br/>
		<div> 
			<div class='artikel-content' > 
			<?php echo $row['content']; ?>  

		</div> 
	</div>
	</div>
<?php }else{
	header("location:artikel.php");
} ?>
</div>
<center>
<div class='form-pos'>
		<h2>Artikel Terbaru</h2>
		<center>
		<?php
		$n = 0;
		$tampil  = mysqli_query($conn,"SELECT * FROM artikel ORDER BY tanggal DESC LIMIT 5");
		while ($row = mysqli_fetch_array($tampil)) { 
			
		?>
		 
		<a href='baca-artikel/<?php echo $row['id_artikel']; ?>'>
							<button  name='submit'> <?php echo $row['judul']; ?> </button>
		</a>
			<?php } ?>
		</center>
		<h2>Artikel Random</h2>
		
		<?php
		$n = 0;
		$tampil  = mysqli_query($conn,"SELECT * FROM artikel ORDER BY RAND() LIMIT 0,5");
		
		while ($row = mysqli_fetch_array($tampil)) { 
			
		?>
		<a href='baca-artikel/<?php echo $row['id_artikel']; ?>'>
							<button  name='submit'> <?php echo $row['judul']; ?> </button>
		</a>
			<?php }

		}
		?>
</div>
</center>
</div>
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