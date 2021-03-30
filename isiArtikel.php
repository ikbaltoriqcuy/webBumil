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
			<form method='post' enctype="multipart/form-data"> 
			<center>					 
				<h1>Isi Artikel Kesehatan</h1> 
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
			<div align='right'>
				<input type='button' name='Preview' value='Preview'/>
				<input type='submit' name='Buat' value='Buat'/>
			</div>
			</form>
		</div>
		
	   <?php 
		if(isset($_POST['Buat'])){
			$folder		= 'image/';
			$file_type	= array('jpg','jpeg','png','gif','bmp');
			$file_name	= $_FILES['gambar']['name'];
			$file_size	= $_FILES['gambar']['size'];
			//cari extensi file dengan menggunakan fungsi explode
			$explode	= explode('.',$file_name);
			$extensi	= strtolower($explode[count($explode)-1]);
			$date = date('y-m-d');
			if(!in_array($extensi,$file_type)){
				$eror   = true;
				echo "<script> alert('-Type file yang anda upload tidak sesuai-'); </script>";
			}else {
				$dir = $folder.$file_name;	
				$data = $_POST['artikel'];
				$judul = $_POST['judul']; 
				$id = "art_".$judul;
				$check = mysqli_query($conn,"SELECT * FROM artikel where id_artikel ='$id' ");
				$row = mysqli_fetch_array($check);
				if ($judul == $row['judul']) {	
							echo "<script> alert('data dengan nama $judul telah ada.Coba Lagi!!!'); </script>";
				}else {
					
				if(move_uploaded_file($_FILES['gambar']['tmp_name'],$dir )){ 
						$insert = mysqli_query($conn,"INSERT INTO artikel VALUES('$id','$judul','$dir','$data','$date') ");
						if ($insert) {
							echo "<script> alert('data telah masuk'); </script>";
						}else{
							echo "<script> alert('data gagal masuk'); </script>";
						}
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