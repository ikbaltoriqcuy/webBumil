<html>
<head>
<link rel="stylesheet" href="account.css" type="text/css" />
<title> Admin-Page </title>
</head>
 
      <?php
		session_start();
		if (isset($_SESSION['login'])){
			
		
	    include("header.php");
		?>	
		<div style='padding-bottom : 100px;'>
		<div class='form'> 
			<form> 
				<div class='form-group'> 
					<label> Nama	: </label>
					<br/>
					<input type='text' class='form-control'/>
				</div>
				<br/>
				<div class='form-group'> 
					<label> Username : </label>
					<br/>
					<input type='text' class='form-control'/>
				</div>
				<br/>
				<div class='form-group'> 
					<label> Password : </label>
					<br/>
					<input type='Password' class='form-control'/>
				</div>
			</form>
		</div>
		</div>
	   <?php 
		}else{
			header("location:Admin.php");
		}
	   ?>
	</body>
</html>