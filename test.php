<?php 
	   include('conn.php'); 
	   $tampil = mysqli_query($conn,"SELECT * FROM produk");
	   while (($row = mysqli_fetch_array($tampil))) {
	   
	   ?>  
            <div class="artikel">
                <center>
					<h3> <?php echo $row['judul']; ?> </h3>
                    <div class="img-artikel">
                        <img src="<?php echo $row['gambar']; ?>" height="150px" />
                    </div>
                    <div class="text-conten">
                        <p>
							<?php echo $row['content']; ?>
                        </p>
                    </div>
					<a href='read-artikel.php?id=<?php echo $row['id_artikel']; ?>'>
						<button> Read More</button>
					</a>
                </center>
            </div>
       
	 <?php 
	   }
	 ?>
	 
<?php 
	   	   include('conn.php'); 
	   $tampil = mysqli_query($conn,"SELECT * FROM produk");
	   while (($row = mysqli_fetch_array($tampil))) { 
?>  
<h1><?php echo $row['content']; ?></h1>
     <div class='product-content'>
		<img src='<?php $row['gambar']; ?>' height='250' />
		<div class='harga'> 
			<p class='product-name'> <?php $row['judul']; ?></p>
			<p class='text-info'><?php substr($row['content'],0,30); ?></p>
			<p class='Harga'><?php $row['harga']; ?></p>
			
		</div>
	 </div>
	   <?php 
	   } 
	   ?>
	 