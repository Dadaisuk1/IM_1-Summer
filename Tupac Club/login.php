<?php
    require_once 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="css/style.css">
    <script src="js/visibility.js" defer></script>
</head>
<body>
    <form action="" id="login">
        <div class="login_layout">
            <div class="head">
                <h1>LOGIN</h1>
            </div>
            <div class="container">
                <div class="input_username">
                    <label>Username</label><br>
                    <input type="text" placeholder="Enter username" id="username" required>
                </div>

                <div class="input_password">
                    <label>Password</label><br>
                    <input type="password" placeholder="Enter password" id="password" required>
                    <span class="material-symbols-outlined pass_icon" onclick="togglePasswordVisibility('password')" id="pass_icon">
                        visibility_off
                    </span>
                </div>

                <div class="buttons">
                    <div class="button">
                        <button type="submit" name="login_button" id="login_button">Login</button>
                    </div>
    
                    <div class="button">
                        <button type="button" name="cancel"><a href="index.html">Cancel</a></button>
                    </div>
                </div>

                <div class="forgot_password">
                    <a href="#">Forgot Password?</a>
                </div>
            </div>
        </div>
    </form>
</body>
</html>

<?php
    require_once 'includes/footer.php';
?>
