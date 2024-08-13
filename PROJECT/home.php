<?php
    session_start();
    include 'includes/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css">
    <link href="https://cdn.prod.website-files.com/655f1188cf5e283d9d642d99/65ba1e3c98faa1cb92d0d63f_fenriz-fav" rel="shortcut icon" type="image/x-icon"/>
    <link rel="stylesheet" href="css/home.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"></script>
    <title>Home Page</title>
</head>
<body>
    
</body>
</html>

<?php
    if (!isset($_SESSION['email'])) {
        header("Location: login.php");
        exit();
    }
    
    // Get the user's role from the database
    $email = $_SESSION['email'];
    $sql = "SELECT role FROM tblaccount WHERE email = '$email'";
    $result = mysqli_query($connection, $sql);
    
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $role = $row['role'];
    
        // Check if the role is not client
        if ($role !== 'client') {
            header("Location: login.php");
            exit();
        }
    } else {
        // In case of a query error, redirect to login
        header("Location: login.php");
        exit();
    }
?>