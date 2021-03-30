<html>
<head>
<link rel="stylesheet" href="account.css" type="text/css" />
<title> Admin-Page </title>
</head>
<body>
	    <?php
		
		session_start();
		if (isset($_SESSION['login'])){
			
	    include("header.php");
		include("conn.php");
		?>	
		<div class='form'> 
			<?php 
				$tampil = mysqli_query($conn,"SELECT * FROM produk");
				while (($row = mysqli_fetch_array($tampil))) {
	   
			?>  
    
				<div class='artikel'>
					<center>
						<h3> <?php echo $row['judul']; ?> </h3>
						<div class="img-artikel">
							<img src="<?php echo $row['gambar']; ?>" height="150px" />
						</div>
						<div class="text-conten" style='width:300px;'>
							<p>
							<?php echo substr($row['content'],0,100); ?>
							</p>
						</div>
						
						<a href='read-produk.php?id=<?php echo $row['id_artikel']; ?>'>
						Preview						</a>
						
						<a href='update-produk.php?id=<?php echo $row['id_produk']; ?>'>
						Edit
						</a>
						
						<a href='deleteProduk.php?id=<?php echo $row['id_produk']; ?>'>
						Delete
						</a>
						
					</center>
				</div>
			<?php 
				}
		}else{
			header("location:Admin.php");
		}
			?>
			
		</div>
	   
	</body>
</html>