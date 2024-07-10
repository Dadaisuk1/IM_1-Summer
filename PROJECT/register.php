<?php
	require_once 'includes/header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
</head>
<body>
	<h1>REGISTRATION</h1>

	<h2>User Information</h2>

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
</body>
</html>

<?php
	require_once 'includes/footer.php';
?>