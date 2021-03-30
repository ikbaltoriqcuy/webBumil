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
		include ("conn.php");
		?>	
		<div class='form-produk'> 
			<form method='post' enctype="multipart/form-data"> 
			<center>					 
				<h1>Isi Artikel Produk</h1> 
			</center>
			  <br>
			  	<label>Masukkan Judul  :</label><br/><br/>
				<input type='text' name='judul' />
				<br/><br/><br/>
			
			 <center>					 
			  <img src='image/photo.jpg' height='200px' />	
				<br/>
				<input type='file' name='gambar'/>
			 </center>
			
				<label>Masukkan Artikel  :</label><br/><br/>
				<textarea  name='artikel' > </textarea>
			<br/><br/><br/>
			<label>Masukkan Harga  :</label><br/><br/>
				<input type='text'  name='harga' />
			<br/><br/>
			<div align='right'>
				<input type='button' name='Preview' value='Preview'/>
				<input type='submit' name='Buat' value='Buat'/>
			</div>
			</form>
		</div>
		<?php 
		define ("CHRASET",'ISO-8859-1');
		define ("Replace_Flag",ENT_COMPAT | ENT_XHTML);
		
		if(isset($_POST['Buat'])){
			$folder		= 'image/';
			$file_type	= array('jpg','jpeg','png','gif','bmp');
			$file_name	= $_FILES['gambar']['name'];
			$file_size	= $_FILES['gambar']['size'];
			//cari extensi file dengan menggunakan fungsi explode
			$explode	= explode('.',$file_name);
			$extensi	= strtolower($explode[count($explode)-1]);
			if(!in_array($extensi,$file_type)){
				$eror   = true;
				echo "<script> alert('-Type file yang anda upload tidak sesuai-'); </script>";
			}else {
				$dir = $folder.$file_name;	
				$data = $_POST['artikel'];
				$judul = $_POST['judul'];
				$id = preg_replace('/[^A-Za-z0-9\-]/s', '',"prod".str_replace('-','',$judul));
				$harga  =$_POST['harga'];
				$check = mysqli_query($conn,"SELECT * FROM produk where id_produk ='$id' ");
									
				if(move_uploaded_file($_FILES['gambar']['tmp_name'],$dir )){ 
						$insert = mysqli_query($conn,"INSERT INTO produk VALUES('$id','$judul','$dir','$data','$harga') ");
						if ($insert) {
							echo "<script> alert('data telah masuk'); </script>";
						}else{
							echo "<script> alert('data gagal masuk'); </script>";
						}
					}
				
				
		  }
		}
		}else{
			header("location:Admin.php");
		}		 
	   ?>
	   
	</body>
</html>