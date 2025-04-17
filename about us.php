<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <style>
    .navbar-nav .nav-link {
      font-weight: 500;
      color: #333 !important;
      margin: 0 10px;
      transition: color 0.3s ease;
    }
    .container {
      width: 90%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 1rem;
    }
    .navbar-nav .nav-link:hover {
      color: #0056b3 !important;
    }
    
   
    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }
    </style>
</head>
<body>
  
<nav class="navbar navbar-expand-lg" style="background-color: rgb(125, 199, 255);">
    <div class="container-fluid">
      <div class="logo">
        <img src="pictures/logo.jpg" class="img-thumbnail" alt="Lab Management Logo">
      </div>
     
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about us.php">About Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>About Us</h1>
        <p class="lead">We are dedicated to providing the best lab equipment repair services.</p>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-md-6">
        <img src="pictures/homepage.png" class="img-fluid" alt="Company Image">
      </div>
      <div class="col-md-6">
        <h3>Our Mission</h3>
        <p>Our mission is to ensure that laboratories operate efficiently and without interruption. We strive to provide high-quality repair services for a wide range of lab equipment.</p>
        <h3>Our Values</h3>
        <ul>
          <li>Integrity</li>
          <li>Customer Satisfaction</li>
          <li>Innovation</li>
          <li>Quality</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="bg-danger py-4 mt-4">
    <div class="container">
      <div class="row">
        <div class="col-md-3 text-center">
          <img src="pictures/anas.png" class="rounded-circle mb-2" alt="Anas Memon" width="150" height="150">
          <h4>Anas memon</h4>
          
        </div>
        <div class="col-md-3 text-center">
          <img src="pictures/abhishek.png" class="rounded-circle mb-2" alt="Abhishekh Kumar" width="150" height="150">
          <h4>abhishek kumar</h4>
          
        </div>
        <div class="col-md-3 text-center">
          <img src="pictures/aiyan.jpg" class="rounded-circle mb-2" alt="Aiyan Vohra" width="150" height="150">
          <h4>aiyan vohra</h4>
          
        </div>
        <div class="col-md-3 text-center">
          <img src="pictures/saad.jpg" class="rounded-circle mb-2" alt="Saad Vohra" width="150" height="150">
          <h4>saad vohra</h4>
          
        </div>
      </div>
    </div>
  </div>

 

  <footer class="bg-light text-center text-lg-start mt-5">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5>Contact Us</h5>
          <p>
            123 Lab Street<br>
            Repair City, RC 12345<br>
            Phone: (123) 456-7890<br>
            Email: info@labrepair.com
          </p>
        </div>
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5>Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="home page.html">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="time table.html">Time Table</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5>Follow Us</h5>
          <div class="social-icons">
            <a href="#"><i class="fab fa-facebook fa-2x mx-2"></i></a>
            <a href="#"><i class="fab fa-twitter fa-2x mx-2"></i></a>
            <a href="#"><i class="fab fa-instagram fa-2x mx-2"></i></a>
            <a href="#"><i class="fab fa-linkedin fa-2x mx-2"></i></a>
          </div>
        </div>
      </div>
      <div class="text-center p-3 mt-3">
        <p>&copy; 2024 Lab Repair. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>