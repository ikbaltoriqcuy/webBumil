<html>
<head>
<link rel="stylesheet" href="account.css" type="text/css" />
<title> Admin-Page </title>
</head>
<body>
	    <?php
		
		session_start();
		if (isset($_SESSION['login'])||isset($_GET['id'])){		
		$id = $_GET['id'];
	    include("header.php");
		include("conn.php");
		
		$tampil = mysqli_query($conn,"SELECT * FROM produk where id_produk='$id' ");
		$row = mysqli_fetch_array($tampil);
		?>	
		<div class='form'> 
			<form method='post' enctype="multipart/form-data"> 
			<center>					 
				<h1>Update Artikel <?php echo $row['judul']; ?></h1> 
			</center>
			  <br>
			  	<label>Masukkan Judul  :</label><br/><br/>
				<input type='text' name='judul' value='<?php echo $row['judul']; ?>' />
				<br/><br/><br/>
			
			 <center>					 
			  <img src='<?php echo $row['gambar']; ?>' height='200px' />	
				<br/>
				<input type='file' name='gambar' />
			 </center>
			
				<label>Masukkan Artikel  :</label><br/><br/>
				<textarea  name='artikel' ><?php echo $row['content']; ?></textarea>
				<br/><br/><br/>
				
				<label>Masukkan Harga  :</label><br/><br/>
				<input type='text' name='harga' value='<?php echo $row['harga']; ?>' />
				<br/><br/><br/>
				
			<div align='right'>
				<input type='submit' name='Update' value='Update'/>
			</div>
			</form>
		</div>
		<?php 	
			if (isset($_POST['Update'])){
					$folder		= 'image/';
					$file_type	= array('jpg','jpeg','png','gif','bmp');
					$file_name	= $_FILES['gambar']['name'];
					$file_size	= $_FILES['gambar']['size'];
					//cari extensi file dengan menggunakan fungsi explode
					$explode	= explode('.',$file_name);
					$extensi	= strtolower($explode[count($explode)-1]);
					$dir = $folder.$file_name;	
					$data = $_POST['artikel'];
					$judul = $_POST['judul']; 
					$harga = $_POST['harga'];
					$new_id = preg_replace('/[^A-Za-z0-9\-]/s', '',str_replace('-','',"prod".$judul));
		
				if ($file_name == '') {
					$insert = mysqli_query($conn,"UPDATE produk SET id_produk='$new_id',judul='$judul',harga='$harga',content='$data' WHERE id_produk ='$id' ");
						if ($insert) {
							echo "<script> alert('data telah di update'); </script>";
							header("location:edit-produk.php");
						}else{
							echo "<script> alert('data gagal di update'); </script>";
						}
				}else{
				
				if(!in_array($extensi,$file_type)){
					$eror   = true;
					echo "<script> alert('-Type file yang anda upload tidak sesuai-'); </script>";
				}else {
					if(move_uploaded_file($_FILES['gambar']['tmp_name'],$dir )){ 
						$insert = mysqli_query($conn,"UPDATE produk SET id_produk='$new_id',judul='$judul',gambar='$dir',content='$data' WHERE id_produk ='$id' ");
							if ($insert) {
								echo "<script> alert('data telah di update'); </script>";
								header("location:edit-produk.php");
							}else{
								echo "<script> alert('data gagal di update'); </script>";
						}
					}
				}
				
			}
						
					
		}
		}else {
			header("location:Admin.php");
		}
		?>
	</body>
</html>