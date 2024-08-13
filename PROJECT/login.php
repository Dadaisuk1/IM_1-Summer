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
    <link href="https://cdn.prod.website-files.com/655f1188cf5e283d9d642d99/65ba1e3c98faa1cb92d0d63f_fenriz-fav" rel="shortcut icon" type="image/x-icon"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"></script>
    <script src="js/eye.js" defer></script>
    <link rel="stylesheet" href="css/login.css">
    <title>Login Page</title>
</head>
<body>
    <div class="nav-bar">
        <!-- Header Logo -->
        <div class="img-logo">
            <img src="https://cdn.prod.website-files.com/655f1188cf5e283d9d642d99/65782e12af1d447a19a36eac_fenriz-logo.svg">
        </div>
        <!-- End of the header logo -->
    </div>
    <div class="login-container">
        <!-- Right side of the container -->
        <div class="right-container">
            <h1 class="slideleft">login your<span>account</span></h1>
        </div>
        <!-- End of the right side container -->

        <!-- Left side of the container -->
        <div class="left-container">
            <form action="#" method="POST">
                <h3>Welcome Back!</h3>
                <div class="email">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                </div>

                <div class="password">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" maxlength="20">
                    <span class="material-symbols-outlined pass_icon" onclick="togglePasswordVisibility('password', 'pass_icon1')" id="pass_icon">
                        visibility_off
                    </span>
                </div>

                <button type="submit" name="login-btn">Login</button>
                <div class="link">
                    <a href="#">forgot password?</a>
                    <a href="register.php">create your account?</a>
                </div>
            </form>
            <!-- End of the left side container -->
        </div>  
    </div>
</body>
</html>

<?php
    if(isset($_POST['login-btn'])){
        $email = $_POST['email'];
        $pwd = $_POST['password'];

        $hashed_pword =  password_hash($pwd, PASSWORD_DEFAULT);	

        // Check tblaccount if email exists
        $sql = "SELECT * FROM tblaccount WHERE email='".$email."'";

        $result = mysqli_query($connection, $sql);

        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);

        if($count == 0){
            echo "<script>
                $.confirm({
                    title: 'Error!',
                    content: 'Email not existed!',
                    type: 'red',
                    typeAnimated: true,
                    boxWidth: '20%',
                    cssClass: 'custom-confirm',
                    useBootstrap: false,
                    buttons: {
                        close: function () {
                            window.location.href = 'login.php';
                        }
                    }
                });
            </script>";
        } else if(!password_verify($pwd,$hashed_pword)) {
            echo "<script>
                $.confirm({
                    title: 'Error!',
                    content: 'Incorrect password!',
                    type: 'red',
                    typeAnimated: true,
                    boxWidth: '20%',
                    useBootstrap: false,
                    buttons: {
                        close: function () {
                            window.location.href = 'login.php';
                        }
                    }
                });
            </script>";
            exit();
        } else {		
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role'];

            // Redirect based on role
            if($row['role'] == 'admin') {
                header("location: dashboard.php");
            } else if ($row['role'] == 'client') {
                header("location: home.php");
            } else if ($row['role'] == 'trainer') {
                header("location: trainer.php");
            }
            exit(); // Always use exit after header redirection
        }
    }
?>
