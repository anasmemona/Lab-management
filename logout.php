<?php
session_start();
session_destroy();
header("refresh:5;url=login.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logging Out...</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: linear-gradient(to right, #56ccf2, #2f80ed);
      color: white;
      text-align: center;
      font-family: Arial, sans-serif;
      animation: fadeIn 1s ease-in-out;
    }
    
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    .logout-container {
      background: rgba(255, 255, 255, 0.2);
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
      backdrop-filter: blur(10px);
      transition: transform 0.3s ease-in-out;
    }

    .logout-container:hover {
      transform: scale(1.05);
    }

    .btn-logout {
      background-color: white;
      color: #2f80ed;
      border: none;
      padding: 12px 24px;
      font-size: 18px;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
      transition: all 0.3s ease;
    }

    .btn-logout:hover {
      background-color: #2f80ed;
      color: white;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    .countdown {
      font-weight: bold;
      font-size: 20px;
    }
  </style>
</head>
<body>

  <div class="logout-container">
    <h1>👋 You have been logged out</h1>
    <p>Redirecting to login page in <span class="countdown" id="countdown">5</span> seconds...</p>
    <a href="login.php">
      <button class="btn-logout">Go to Login</button>
    </a>
  </div>

  <script>
    let countdown = 5;
    setInterval(() => {
      countdown--;
      document.getElementById('countdown').textContent = countdown;
      if (countdown <= 0) {
        window.location.href = "login.php";
      }
    }, 1000);
  </script>

</body>
</html>
