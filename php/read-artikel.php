 
 <div class='page'>
 <?php 
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
<center>
<div class='form-pos'>
		<h2>Produk Lainnya</h2>
		<table>
		<?php
		$n = 0;
		$tampil  = mysqli_query($conn,"SELECT * FROM artikel");
		while ($row = mysqli_fetch_array($tampil)) { 
			if ($n<3) {
			$n++;
		?>
		<tr>
		<td width ='30%'>
		<img src='<?php echo $row['gambar'] ?>' width='90%';/>
		</td>
		<td> 
		  <?php echo substr($row['content'],0,60); ?>...
		 <form method='post'>
					<input type='submit' name='submit' style='background-color:#fff;border:1px solid #f1f1f1;' value='Read More' />
					<input type='text' name='id' style='display:none;' value='<?php echo $row['id_artikel']; ?>' />
		 </form>
		</td>
		</tr>
			<?php }} ?>
		</table>
</div>

</center>