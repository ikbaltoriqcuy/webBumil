<html>
<head>
<link rel="stylesheet" href="css1.css" type="text/css" />
<title> Admin-Page </title>
</head>
<body>
<header>
	<ul> 
	  <li><a href='edit-artikel.php'>Back</a></li>
	</ul>
</header>  
     <?php
		session_start();
		if (!isset($_SESSION['login'])){
			
			header("location:Admin.php");
		}
	?>	
<div class='page'>
 <?php 
 $id=$_GET['id'];
 include("conn.php");
 $tampil  = mysqli_query($conn,"SELECT * FROM artikel WHERE id_artikel='$id'  ");
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

	</body>
</html>