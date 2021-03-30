<!DOCTYPE html>

 <br/>
 <div class='page'>
 <?php 
 include("conn.php");
 $tampil  = mysqli_query($conn,"SELECT * FROM produk WHERE id_produk='$id' ");
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

<div class='form-pos'>
		<h2>Produk Lainnya</h2>
		<table>
		<?php
		$tampil  = mysqli_query($conn,"SELECT * FROM produk");
		while ($row = mysqli_fetch_array($tampil)) {
		?>
		<tr>
		<td>
		<img src='<?php echo $row['gambar'] ?>' width='60%';/>
		</td>
		<td> 
		  <?php echo substr($row['content'],0,60); ?>...
		 <form method='post'>
					<input type='submit' name='submit' style='background-color:#fff;border:1px solid #f1f1f1;' value='Read More' />
					<input type='text' name='id' style='display:none;' value='<?php echo $row['id_produk']; ?>' />
				</form>
		</td>
		</tr>
		<?php } ?>
		</table>
</div>
