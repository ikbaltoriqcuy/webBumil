<!DOCTYPE html>
<html>
<head>
    <title></title>
	<meta charset="utf-8" />
	<base href="http://localhost/websobib/artikel" />
    <link rel='stylesheet' href='css1.css' type='text/css' />
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true" >
</head>
<body>
 <?php 
	   include('conn.php');	
	   session_start();
	
 ?>
    <header>

        <div class="logo">

        </div>

        <center>
        
            <ul>
                <li> <a href="index">Home</a> </li>
                 <li> <a href="artikel">Artikel</a> </li>
				<li> <a href="produk">Produk</a> </li>
                <li> <a href="PesandanKonsultasi">Kontak</a></li>
            </ul>

        </center>
        <div>

        </div>
    </header>

    <div class="konten-artikel">
       
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
					if ($_SESSION['page'] == $jumlah) {
							$page = $_SESSION['page'] ;
					}else  {
						$page = $_SESSION['page']+1 ;
					}
				}
			}else if ($page == 'akhir') {
				$page = $jumlah;
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
		$tampil = mysqli_query($conn,"SELECT * FROM artikel  LIMIT $startpage,$endpage");
		
		if (!$tampil) {
			$startpage = 0;
			$endpage = 8;
			$tampil = mysqli_query($conn,"SELECT * FROM artikel  LIMIT $startpage,$endpage");	
		} 
		   
		while (($row = mysqli_fetch_array($tampil))) {	
	   ?>  
            <div class="artikel">
                <center>
					<p style='padding:0px 10px 0px 20px;'> <?php echo $row['judul']; ?> </p>
                    <div class="img-artikel">
                        <img src="<?php echo $row['gambar']; ?>" height="150px" />
                    </div>
                    <div class="text-conten">
                        <p>
							<?php echo substr($row['content'],0,20); ?>
                        </p>
                    </div>
							<a href='baca-artikel/<?php echo $row['id_artikel']; ?>'>
							<input type='submit' name='submit'  value='Baca' />
							</a>
				</center>
            </div>
       
	 <?php 
		}
	 ?>
	 </div>
	
 <br/><br/><br/>
 <center>

<div  class='pagination'> 

 <div class='number'> 
			 <center>
			<ul>
			 
				<li><a href='artikel/page/awal' ><<</a> </li>
				<li><a href='artikel/page/back' ><</a></<li>
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
				href='artikel/page/<?php echo $i; ?>' ><?php echo $i; ?> </a>
			<?php  }}  ?><li>
			
				<li><a  href='artikel/page/next' >></a></li>
				<li><a href='artikel/page/akhir' >>></a></li>
				
		</ul>
		</center>
</div>
</div>

<footer style='margin-top:100px;padding-top:100px;'>
			 <center>
                <ul >
                      <li > <a href="index.html">Home</a> </li>
					   <li> <a href="artikel.html">Artikel</a> </li>
                      <li > <a href='Produk.html'>Produk</a> </li>
                      <li> <a href=#>About</a> </li>
                  </ul>
             </center> 
</footer>
 
</body>
</html>
