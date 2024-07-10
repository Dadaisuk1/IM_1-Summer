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
		<label for="username">User Name</label>
		<input type="text" name="username" id="username" required>
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