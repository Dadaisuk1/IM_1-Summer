<?php
	require_once 'includes/header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/register.css">
	<title>Register</title>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>REGISTRATION</h1>

			<h2>User Information</h2>
		</div>
		<form>
			<label for="firstname">First Name</label>
			<input type="text" name="firstname" id="firstname" required>
			<br>
			<label for="lastname">Last Name</label>
			<input type="text" name="lastname" id="lastname" required>
			<br>
			<label for="middlename">Middle Name</label>
			<input type="text" name="middlename" id="middlename" required>
			<br>
			<label for="gender">Gender</label>
			<select name="gender" id="gender">
				<option value="Male">Male</option>
				<option value="Female">Female</option>
			</select>
			<label for="mobilenumber">Mobile Number</label>
			<input type="text" name="mobilenumber" id="mobilenumber" required>
			<br>
			<label for="emailaddress">Email Address</label>
			<input type="text" name="emailaddress" id="emailaddress" required>
			<br>
			<label for="password">Password</label>
			<input type="password" name="password" id="password" required>
			<br>
			<button type="submit">Submit</button>
		</form>
	</div>
</body>
</html>

<?php
	require_once 'includes/footer.php';
?>

<!-- 
<?php    
    include 'connect.php';    
    require_once 'includes/header.php'; 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/register.css">
	<title>Register</title>
</head>
<body>
	<div class="container">
		<h1>REGISTRATION</h1>
		<h2>User Information</h2>	

		<div class="form_container">
			<form method="post">
				<pre>
					Firstname:<input type="text" name="txtfname">
					Middlename:<input type="text" name="txtmname">
					Lastname:<input type="text" name="txtlname">			
					Gender:
					<select name="txtgender">
					<option value="">----</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					</select>
					
					Mobile Number:<input type="text" name="txtnumber" value="+63 "> 
					Email Address:<input type="email" name="txtemail">	
					Password:<input type="password" name="txtpassword">			
					
					<input type="submit" name="btnRegister" value="Register"> 
				</pre>
			</form>
		</div>
	</div>
</body>
</html>


<?php	
	if(isset($_POST['btnRegister'])){		
		//retrieve data from form and save the value to a variable
		//for tbluserprofile
		$fname=$_POST['txtfname'];
		$mname=$_POST['txtmname'];		
		$lname=$_POST['txtlname'];
		$gender=$_POST['txtgender'];
		$mobile=$_POST['txtnumber'];
		$email=$_POST['txtemail'];
		$pword=$_POST['txtpassword'];

							
		//save data to tbluserprofile			
		$sql1 ="Insert into tbluser(fname, mname, lname, gender, mobilenumber, email, password) values('".$fname."', '".$mname."', '".$lname."','".$gender."', '".$mobile."', '".$email."', '".$pword."')";
		mysqli_query($connection,$sql1);
		
		if(empty($fname) || empty($lname) || empty($gender) || empty($mobilenumber) || empty($email) || empty($email) || empty($pword)){
            echo "<script language='javascript'>
            alert('Some Fields Are Empty');
            </script>";
            exit();
           
            header("Location: ../register.php");
        }

		// //Check tbluseraccount if username is already existing. Save info if false. Prompt msg if true.
		// $sql2 ="Select * from tblaccount where username='".$uname."'";
		// $result = mysqli_query($connection,$sql2);
		// $row = mysqli_num_rows($result);
		// if($row == 0){
		// 	$sql ="Insert into tbluseraccount(emailadd,username,password) values('".$email."','".$uname."','".$pword."')";
		// 	mysqli_query($connection,$sql);
		// 	echo "<script language='javascript'>
		// 				alert('New record saved.');
		// 		  </script>";
		// 	header("location: dashboard.php");
		// }else{
		// 	echo "<script language='javascript'>
		// 				alert('Username already existing');
		// 		  </script>";
		// }
			
		
	}
		

?>

<?php require_once 'includes/footer.php'; ?> -->