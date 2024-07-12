<?php
    include 'connect.php';
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
    <title>Login</title>
</head>
<body>
    <div class="login_container">
        <div class="login_layout">
            <div class="head">
                <h1>LOGIN</h1>
            </div>
            <form method="POST">
                <div class="container">
                    <div class="input_email">
                        <label>Username</label>
                        <input type="text" placeholder="Enter email address" name="txtemail" required>
                    </div>

                    <div class="input_password">
                        <label>Password</label>
                        <div class="password_container">
                            <input type="password" placeholder="Enter password" name="txtpassword" id="password" required>
                            <span class="material-symbols-outlined pass_icon" onclick="togglePasswordVisibility('password')" id="pass_icon">
                                visibility_off
                            </span>
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="button">
                            <button type="submit" name="bttnLogin">Login</button>
                        </div>
                    </div>

                    <div class="other_button">
                        <div class="forgot_password">
                            <a href="#">Forgot Password?</a>
                        </div>

                        <div class="register">
                            <a href="register.php">Create Account</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>    
</body>
</html>

<?php
    session_start();

    if(isset($_POST['bttnLogin'])){
        $email = $_POST['txtemail'];
        $password = $_POST['txtpassword'];

        // Check tbluseraccount if username is existing
        $sql = "SELECT * FROM tblaccount WHERE email = '$email'";
        $result = mysqli_query($connection, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            if ($row['password'] === $password) {
                $_SESSION['email'] = $row['email'];
                header("Location: home.php");
                exit();
            } else {
                echo "<script>alert('Incorrect password');</script>";
            }
        } else {
            echo "<script>alert('Email not existing');</script>";
        }
    }
?>

<?php
    require_once 'includes/footer.php';
?>
