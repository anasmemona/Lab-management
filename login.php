<?php
session_start();

// Check if already logged in
if (isset($_SESSION['user_id'])) {
    // Redirect based on role
    switch ($_SESSION['role']) {
        case 'Admin':
            header("Location: admin-dashboard.php");
            break;
        case 'Maintenance':
            header("Location: maintenance-dashboard.php");
            break;
        case 'Staff':
            header("Location: staff-dashboard.php");
            break;
    }
    exit;
}

$error = '';

// Handle login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "lab_management";

    $conn = new mysqli($host, $user, $pass, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare statement to avoid SQL injection
    $sql = "SELECT UserID, Username, Password, FullName, Role FROM Users WHERE Username = ? AND IsActive = TRUE";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        
        // Verify password (plain text comparison as per your current system)
        // Note: This should be replaced with password_verify() for hashed passwords
        if ($password === $row['Password']) {
            // Set session variables
            $_SESSION['user_id'] = $row['UserID'];
            $_SESSION['username'] = $row['Username'];
            $_SESSION['full_name'] = $row['FullName'];
            $_SESSION['role'] = $row['Role'];
            
            // Redirect based on role
            switch ($row['Role']) {
                case 'Admin':
                    header("Location: admin-dashboard.php");
                    break;
                case 'Maintenance':
                    header("Location: maintenance-dashboard.php");
                    break;
                case 'Staff':
                    header("Location: staff-dashboard.php");
                    break;
                default:
                    header("Location: index.php");
            }
            exit;
        } else {
            $error = "Invalid password!";
        }
    } else {
        $error = "Invalid username or user inactive!";
    }
    
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Lab Management System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 450px;
            margin: 100px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo-container img {
            max-width: 150px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <div class="logo-container">
                <img src="pictures/logo.jpg" alt="Lab Management System Logo" class="img-thumbnail">
                <h2>Lab Management System</h2>
            </div>
            
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>
            
            <form method="POST" action="login.php">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" required>
                        <button type="button" class="btn btn-outline-secondary toggle-password" data-target="password">👁</button>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
            <div class="mt-3 text-center">
                <a href="forgot-password.php">Forgot Password?</a>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle password visibility
        document.querySelector('.toggle-password').addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const input = document.getElementById(targetId);
            input.type = input.type === 'password' ? 'text' : 'password';
        });
    </script>
</body>
</html>