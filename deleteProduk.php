		
		<?php 	
			$id=$_GET['id'];
			include('conn.php');
			$delete = mysqli_query($conn,"DELETE FROM produk WHERE id_produk='$id' ");
			header('location:edit-produk.php');
		?>