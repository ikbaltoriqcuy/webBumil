		
		<?php 	
			$id=$_GET['id'];
			include('conn.php');
			$delete = mysqli_query($conn,"DELETE FROM artikel WHERE id_artikel='$id' ");
			header('location:edit-artikel.php');
		?>