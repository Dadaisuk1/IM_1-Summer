<?php
    session_start();
    include 'includes/connect.php';
    include 'includes/record_reader.php';

    if (!isset($_SESSION['email'])) {
        header("Location: login.php");
        exit();
    }
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"></script>
    <title>Dashboard</title>
</head>
<body>
    <body>

        <div class="container">
            <!-- Sidebar Section -->
            <aside>
                <div class="toggle">
                    <div class="logo">
                        <h2><span class="danger">Fenriz</span></h2>
                    </div>
                    <div class="close" id="close-btn">
                        <span class="material-icons-sharp">
                            close
                        </span>
                    </div>
                </div>
    
                <div class="sidebar">
                    <a href="dashboard.php" class="active">
                        <span class="material-icons-sharp">
                            dashboard
                        </span>
                        <h3>Dashboard</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">
                            person_outline
                        </span>
                        <h3>Users</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">
                            receipt_long
                        </span>
                        <h3>History</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">
                            insights
                        </span>
                        <h3>Analytics</h3>
                    </a>
                    <a href="register.php">
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>New Record</h3>
                    </a>
                    <a href="logout.php">
                        <span class="material-icons-sharp">
                            logout
                        </span>
                        <h3>Logout</h3>
                    </a>
                    
                </div>
            </aside>
            <!-- End of Sidebar Section -->
    
            <!-- Main Content -->
            <main>
                <h1>Dashboard</h1>
                <!-- All users table -->
                <div class="recent-orders">
                    <h2>All Data</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($row = $resultset->fetch_assoc()):
                                    $id = $row['client_id'];
                            ?>
                            <tr>
                                <td><?php echo $id ?></td>
                                <td><?php echo $row['fname'], " ",$row['mname'], ". ", $row['lname'] ?></td>
                                <td class="td-email"><?php echo $row['email'] ?></td>
                                <td><?php echo $row['role'] ?></td>

                                <td>
                                        <div class='buttons'>
                                            <a href='update.php?updateid=" . $row["client_id"] . "' class='btnUpdate'>Update</a>
                                            <a href='delete.php? deleteid=" . $row["client_id"] . "' class='btnDel' onclick='return confirmDelete()'>Delete</a>
                                        </div>
                                    </td>               
                            </tr>
                            <?php endwhile;?>
                        </tbody>
                    </table>
                </div>
                <!-- End of Recent Orders -->
    
            </main>
            <!-- End of Main Content -->
    
            <!-- Right Section -->
            <div class="right-section">
                <div class="nav">
                    <button id="menu-btn">
                        <span class="material-icons-sharp">
                            menu
                        </span>
                    </button>
                    <div class="dark-mode">
                        <span class="material-icons-sharp active">
                            light_mode
                        </span>
                        <span class="material-icons-sharp">
                            dark_mode
                        </span>
                    </div>
    
                    <div class="profile">
                        <div class="profile-photo">
                            <img src="images/profile-1.jpg">
                        </div>
                    </div>
    
                </div>
                <!-- End of Nav -->
    
                <div class="user-profile">
                    <div class="logo">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="currentColor"><path d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z"></path></svg>
                        
                        <p>Admin</p>
                    </div>  
                </div>
            </div>
    
    
        </div>
        <script src="js/dashboard.js"></script>
        <script>
            function confirmDelete() {
                return confirm('Are you sure you want to delete this record?');
            }
        </script>
    </body>
</body>
</html>

<?php
    if (isset($_POST['logout-btn'])) {
        session_destroy();
        header("Location: login.php");
        exit();
    }
?>