<?php
    require_once 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="css/login.css">
    <script src="js/visibility.js" defer></script>
</head>
<body>
    <form action="" id="login">
        <div class="login_layout">
            <div class="head">
                <h1>LOGIN</h1>
            </div>
            <form action="POST">
                <div class="container">
                    <div class="input_email">
                        <label>Username</label><br>
                        <input type="text" placeholder="Enter email address" name="txtemail" required>
                    </div>

                    <div class="input_password">
                        <label>Password</label><br>
                        <input type="password" placeholder="Enter password" name="txtpassword" required>
                        <span class="material-symbols-outlined pass_icon" onclick="togglePasswordVisibility('password')" id="pass_icon">
                            visibility_off
                        </span>
                    </div>

                    <div class="buttons">
                        <div class="button">
                            <button type="submit" name="bttnLogin">Login</button>
                        </div>
        
                        <div class="button">
                            <button type="button" name="cancel"><a href="index.html">Cancel</a></button>
                        </div>
                    </div>

                    <div class="forgot_password">
                        <a href="#">Forgot Password?</a>
                    </div>
                </div>
            </form>
            
        </div>
    </form>
</body>
</html>

<?php	
	if(isset($_POST['bttnLogin'])){
		$email=$_POST['txtemail'];
		$pwd=$_POST['txtpassword'];
		//check tbluseraccount if username is existing
		$sql ="Select * from tbluseraccount where email='".$email."'";
		
		$result = mysqli_query($connection,$sql);	
		
		$count = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result);
		
		if($count== 0){
			echo "<script language='javascript'>
						alert('username not existing.');
				  </script>";
		}else if($row[3] != $pwd) {
			echo "<script language='javascript'>
						alert('Incorrect password');
				  </script>";
		}else{
			$_SESSION['username']=$row[0];
			header("location: dashboard.php");
		}
			
		
	}
		

?>

<?php
    require_once 'includes/footer.php';
?>
