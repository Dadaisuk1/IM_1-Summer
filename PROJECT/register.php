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

		<div class="form_container">
			<form action="POSt">
				<label>First Name</label>
				<input type="text" name="txtfname">

				<label>Middle Name</label>
				<input type="text" name="txtmname">

				<label>Last Name</label>
				<input type="text" name="txtlname">

				<label>Password</label>
				<input type="password" name="password">

				<label>Gender</label>
				<select name="gender">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>

				<label>Mobile Number</label>
				<input type="text" name="txtmobile" value="+63">

				<label>Email</label>
				<input type="email" name="txtemail">

				<input type="submit" name="bttnRegister" value="Register">
			</form>
		</div>
	</div>
</body>
</html>

<?php
	if (isset($_POST['bttnRegister'])) {
		$fname = $_POST['txtfname'];
		$mname = $_POST['txtmname'];
		$lname = $_POST['lname'];
		$pword = $_POST['password'];
		$gender = $_POST['gender'];
		$mobile = $_POST['txtmobile'];
		$email = $_POST['txtemail'];

		$sql1 = "Insert into tbluser (fname, mname, lname, password, gender, mobilenumber, email) values ('".$fname."', '".$mname."', '".$lname."', '".$pword."', '".$gender."', '".$mobile."', '".$email."')";
		mysqli_query($connection, $sql1);
		
		$sql2 = "Select * from tblaccount where email = '".$email."'";
		$result = mysqli_query($connection, $sql2);
		$row = mysqli_num_rows($result);

		if ($row == 0) {
			$sql = "Insert into tblaccount (email, password) values ('".$email."', '".$pword."')";
			mysqli_query($connection, $sql);
			echo "<script language = 'javascript'>
				alert('New Record Saved.');
			</script>";
			header("Location: register.php");
		} else {
			echo "<script language = 'javascrip'>
				alert('Email already existing');
			</script>";
		}

 		if(empty($fname) || empty($lname) || empty($gender) || empty($mobilenumber) || empty($email) || empty($email) || empty($pword)){
            echo "<script language='javascript'>
            	alert('Some Fields Are Empty');
            </script>";
            header("Location: register.php");
        }
 

	}
?>

<?php require_once 'includes/footer.php'; ?>