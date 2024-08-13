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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"></script>
    <script src="js/eye.js" defer></script>
    <link rel="stylesheet" href="css/register.css">
    <title>Register Page</title>
</head>
<body>
    <!-- Start of navigation bar -->
    <div class="navbar">
        <div class="img-logo">
            <img src="https://cdn.prod.website-files.com/655f1188cf5e283d9d642d99/65782e12af1d447a19a36eac_fenriz-logo.svg">
        </div>
    </div>
    <!-- End of the navigation bar -->

    <!-- Starting point of the container / body -->
    <div class="container">
        <div class="register-container">
            <div class="left-container">
                <h1>register an<span>account</span></h1>
            </div>

            <div class="right-container">
                <!-- Starting point for form / inputs -->
                <form action="#" method="POST">
                    <div class="name-container">
                        <label for="fname">Full Name</label>
                        <div class="name-input">
                            <input type="text" name="fname" id="fname" placeholder="First Name">
                            <input type="text" name="mname" id="mname" maxlength="1" placeholder="Initial">
                            <input type="text" name="lname" id="lname" placeholder="Last Name">
                        </div>
                    </div>
                    <!-- Ending point for names -->

                    <!-- Gender -->
                     <div class="option-bar">
                        <div class="gender">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                        <div class="role">
                            <label for="role">Role</label>
                            <select name="role" id="role">
                                <option value="client">Client</option>
                                <option value="trainer">Trainer</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                     </div>
                    
                    <!-- End of gender -->

                    <!-- Staring point for crucial information -->
                    <div class="personal-info">
                        <div class="email">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="Enter Your Email">
                        </div>

                        <div class="phone-number">  
                            <label for="phone-number">Phone Number</label>
                            <input type="text" name="phone-number" id="phone-number" maxlength="11" maxlength="number" placeholder="Enter your phone number">
                        </div>
                    </div>
                    <!-- Ending point for the crucial information -->
                    
                    <!-- Password and Confirmation Password -->
                    <div class="password-info">
                        <div class="password">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="Enter Your Password">
                            <span class="material-symbols-outlined pass_icon" onclick="togglePasswordVisibility('password', 'pass_icon')" id="pass_icon">
                                visibility_off
                            </span>
                        </div>
                    
                        <div class="confirm-password">
                            <label for="confirm-password">Confirm Password</label>
                            <input type="password" name="confirm-password" id="confirm-password" placeholder="Enter Your Password Again">
                            <span class="material-symbols-outlined pass_icon" onclick="togglePasswordVisibility('confirm-password', 'pass_icon')" id="pass_icon">
                                visibility_off
                            </span>
                        </div>
                    </div>                    
                    <!-- Ending point for password -->

                    <!-- Starting point for address -->
                    <div class="address">
                        <label for="address">Full Address</label>
                        <div class="column-1">
                            <div class="barangay">
                                <input type="text" name="barangay" id="barangay" placeholder="Enter your barangay">
                            </div>
        
                            <div class="province">
                                <input type="text" name="province" id="province" placeholder="Enter your province">
                            </div>
                        </div>
                        
                        <div class="column-2">
                            <div class="city">
                                <input type="text" name="city" id="city" placeholder="Enter your city">
                            </div>
        
                            <div class="zip-code">
                                <input type="text" name="zip-code" id="zip-code" maxlength="6" placeholder="Enter your postal code">
                            </div>
                        </div>
                    </div>
                    <!-- End point for address -->
                   
                    <!-- Button submit -->
                    <div class="submit-btn">
                        <button type="submit" name="submit-btn">Register</button>
                    </div>

                    <div class="link">
                        <a href="login.php">already have an account?</a>
                    </div>
                    <!-- Ending point -->
                </form>
            </div>
            <!-- End of the form / inputs -->
        </div>
    </div>
    <!-- Ending of the container / body -->
     <div class="spacing"></div>
     <script>
        function showAlert(message) {
            $.alert({
                title: 'Alert!',
                content: message,
            });
        }
    </script>
</body>
</html>

<?php
    if (isset($_POST['submit-btn'])) {
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $role = $_POST['role'];
        $email = $_POST['email'];
        $mobile = $_POST['phone-number'];
        $pword = $_POST['password'];
        $barangay = $_POST['barangay'];
        $province = $_POST['province'];
        $city = $_POST['city'];
        $zip_code = $_POST['zip-code'];

        if (empty($fname) || empty($mname) || empty($lname) || empty($gender) || empty($role) || empty($email) || empty($mobile) || empty($pword) || empty($barangay) || empty($province) || empty($city) || empty($zip_code)) {
            echo "<script>
                $.confirm({
                    title: 'Error!',
                    content: 'Some fields are empty!',
                    type: 'red',
                    typeAnimated: true,
                    buttons: {
                        close: function () {}
                    }
                });
            </script>";
            exit();
        }
        
        // Insert into tblclient
        $sql1 = "INSERT INTO tblclient (role, fname, mname, lname, gender, email, password, phone_number, barangay, province, city, zip_code) VALUES ('$role', '$fname', '$mname', '$lname', '$gender', '$email', '$pword', '$mobile', '$barangay', '$province', '$city', '$zip_code')";
        if(mysqli_query($connection, $sql1)) {
            // Get the last inserted ID in tblclient
            $client_id = mysqli_insert_id($connection);

            // Insert into tblnon_member with the client_id if role is client
            if ($role == 'client') {
                $sql2 = "INSERT INTO tblnon_member (client_id) VALUES ('$client_id')";
                mysqli_query($connection, $sql2);
            } else if ($role == 'trainer') {
                // Insert into tbltrainer with the client details if role is trainer
                $sql2 = "INSERT INTO tbltrainer (fname, mname, lname) VALUES ('$fname', '$mname', '$lname')";
                mysqli_query($connection, $sql2);
            }

            // Check if email exists in tblaccount
            $sql3 = "SELECT * FROM tblaccount WHERE email = '$email'";
            $result = mysqli_query($connection, $sql3);
            $row = mysqli_num_rows($result);

            if ($row == 0) {
                // Insert into tblaccount
                $sql4 = "INSERT INTO tblaccount (email, password, role) VALUES ('$email', '$pword', '$role')";
                mysqli_query($connection, $sql4);

                echo "<script>
                    $.confirm({
                        title: 'Success!',
                        content: 'New record added!',
                        type: 'green',
                        typeAnimated: true,
                        buttons: {
                            ok: function () {
                                window.location.href = 'login.php';
                            }
                        }
                    });
                </script>";
            } else {
                echo "<script>
                    $.confirm({
                        title: 'Error!',
                        content: 'Email already existed!',
                        type: 'red',
                        typeAnimated: true,
                        buttons: {
                            close: function () {
                                window.location.href = 'register.php';
                            }
                        }
                    });
                </script>";
            }
        } else {
            echo "<script>
                $.confirm({
                    title: 'Error!',
                    content: 'Failed to add new record!',
                    type: 'red',
                    typeAnimated: true,
                    buttons: {
                        close: function () {}
                    }
                });
            </script>";
        }
    }
?>
