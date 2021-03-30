<html>
<head>
<link rel="stylesheet" href="account.css" type="text/css" />
<title> Admin-Page </title>
</head>
<body>
 <style> 

.number {
 padding-top :100px; 
 float :left;
 height:100px;
 width: 100%;
}
	.number ul{
		width : 46.5%;
	}
    .number li {
	  height : 50px;
	  list-style-type : none;
      float:left;
    }

    .number li a {
	  text-decoration : none;
	  padding  : 7px 10px;
	  background-color : #f1f1f1;
	  color : #000;	  
    }
</style>
	    <?php
		session_start();
		if (isset($_SESSION['login'])){
			
	    include("header.php");
		include("conn.php");
		?>	
		<div class='form'> 
		
			<?php
	   if (isset($_GET['page'])) {
			$page = $_GET['page'];
			
			
			$select = mysqli_query($conn,"Select * from artikel");
			$jumlah = floor(mysqli_num_rows($select)/8);
			
			
			if ($page =='back' ) {
				if  (isset($_SESSION['page']) ){
					$page = $_SESSION['page'] == 0 ? 0 : $_SESSION['page']-1 ;
				}
			}else if ($page == 'awal') {
				$page = 0 ;
			}else if ($page == 'next') {
				if  (isset($_SESSION['page'])){
					$select = mysqli_query($conn,"Select * from artikel");
					$jumlah = floor(mysqli_num_rows($select)/8); 
					if ($_SESSION['page'] == $jumlah) {
							$page = $_SESSION['page'] ;
					}else  { 
						$page = $_SESSION['page']+1 ;
					}
					
				}
			}else if ($page == 'akhir') {
				$page = $jumlah ;
			}else {
				$page = $_GET['page']-1; 
			}
				$startpage = ($page)==0 ? 0 : $page*8 ;
				$endpage = ($page +1) * 8;
				$_SESSION['page'] = $page;
		
	   }else {
		$startpage = 0;
		$endpage = 8;
		$_SESSION['page'] = 0;
	   }   
		
				$tampil = mysqli_query($conn,"SELECT * FROM artikel LIMIT $startpage,$endpage");
				if ($tampil)
				while (($row = mysqli_fetch_array($tampil))) {
	   
			?>  
    
				<div class='artikel'>
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
						Preview						</a>
						
						<a href='update-artikel.php?id=<?php echo $row['id_artikel']; ?>'>
						Edit
						</a>
						
						<a href='delete.php?id=<?php echo $row['id_artikel']; ?>'>
						Delete
						</a>
						
					</center>
				</div>
			<?php 
				}else{
				}
		}else{
			header("location:Admin.php");
		}
			?>
			
		<div class='pagination'> 

		 <div class='number'> 
					 <center>
					<ul>
					 
						<li><a href='edit-artikel.php?page=awal' ><<</a> </li>
						<li><a href='edit-artikel.php?page=back' ><</a></<li>
			<?php
				include('conn.php');	   
				$select = mysqli_query($conn,"Select * from artikel");
				$jumlah = mysqli_num_rows($select);
				$perPage = $jumlah/8; 
					$start = 1;
					$endm  = 10;
					$max= $perPage+1;
				if ($_SESSION['page']+1 >5) {
						$start = $start + (($_SESSION['page']+1)-5);  
						$endm = $endm+(($_SESSION['page']+1)-5);
				}
				for ($i=$start; $i<=$endm;$i++) {
					if ($i <=$max) {
			?>
			
					<li><a style="background-color:
					<?php echo ($_SESSION['page']+1 ==$i ? '#abcabc' : '#f1f1f1') ; ?>" 
						href='edit-artikel.php?page=<?php echo $i; ?>' ><?php echo $i; ?> </a>
					<?php  }}  ?><li>
					
						<li><a  href='edit-artikel.php?page=next' >></a></li>
						<li><a href='edit-artikel.php?page=akhir' >>></a></li>
						
				</ul>
				</center>
		</div>
		</div>


		</div>
	   
	</body>
</html>