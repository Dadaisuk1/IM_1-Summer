<?php
    session_start();
    include 'connect.php';
    require_once 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/logout.js" defer></script>
    <title>Home</title>
</head>
<body>
    <div class="container">
        <form method="POST" onsubmit="return confirmLogout();">
            <button type="submit" name="bttnLogout">Logout</button>
        </form>
    </div>
    <script>
        function confirmLogout() {
            return confirm('Are you sure you want to log out?');
        }
    </script>
</body>
</html>

<?php
    if (!isset($_SESSION['email'])) {
        header("Location: login.php");
        exit();
    }

    if (isset($_POST['bttnLogout'])) {
        session_destroy();
        header("Location: login.php");
        exit();
    }

?>

<?php require_once 'includes/footer.php'; ?>