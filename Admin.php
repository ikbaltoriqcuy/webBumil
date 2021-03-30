<!DOCTYPE html>
<html>
<head>
    <title></title>
	<meta charset="utf-8" />
</head>
<body>
 <?php 
	session_start(); 
	if(!isset($_SESSION['login'])){
	?>
    <style>
        body {
            margin :0px;
            background-image : url("image/1.jpg");
			background-size : cover;
        }
        form {
			border-top:30px solid #101010;
            padding : 10px 0px 0px 10px;
            background-color : #fff;
            height : 400px;
            width : 300px; 
            margin-top : 100px;
			margin-left:38%;
			box-shadow : 3px 3px 4px 4px rgba(80,80,80,.4);
        }
        label {
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size : 15px;
        }
        input[type="text"] {
            height : 25px;
			width:200px;
			padding : 0px 10px 0px 10px;
        }
        
        input[type="password"] {
            height : 25px;
			width:200px;
			padding : 0px 10px 0px 10px;
        }
        button {
            height : 40px;
            width : 200px;
            border :1px solid #fff;
            background-color: #ffd800;
            font-size: 25px;
            color: #fff;

        }
            button:hover {
                 background-color: #ff6a00;    
            }
		#log{
			background-color:#a01937;
			border:1px solid #fff;
			padding : 5px 10px;
			font-size:20px;
			color : #fff;
			font-family: arial;
		}
		#log:hover{
			background-color:#1bca09;
		}
    </style>
    <div class='Daftar'>
			
			<form method='post'>
			<center>
			<h2 style='color:#ff6a00;'>Login Admin!!</h2>
			</center>
			<div style='margin-left:10%;margin-top:30px;'>
            <label>
                Masukkan Username:
            </label><br /><br />
            <input name='user' type="text" placeholder="Masukkan Username" required />
            <label><br /><br />
                Masukkan Password:
            </label><br /><br />
            <input name='pass' type="password" placeholder="Masukkan Password" required />
            <br /><br />
            <input id='log' type='submit' name='login' value='Login' />  
		 </div>
		 <?php
		 if(isset($_POST['login'])){
			include('conn.php');
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			$select = mysqli_query($conn,"SELECT * FROM account WHERE username='$user' and passwoord='".$pass."'");
			$check = mysqli_num_rows($select);
			if($check > 0) {
				session_start();
				$_SESSION['login'] = $user;
				header("location:account-info.php");
			}else{
				echo "<p style='color:red;'>* Maaf, Username dan Password anda Salah</p>";
			}
		}
		?>
        </form>
	</div>
    <?php 
		
	}else{
					header("location:account-info.php");
	
	}
	?>
</body>
</html>