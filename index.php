<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Lab Management</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <style>
    
    #carouselExampleInterval img {
      height: 500px;
      object-fit: cover; 
    }
    
    body {
      background-color: #f7f9fc;
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      padding-top: 60px; 
    }
    
    
    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }
    
    .jumbotron {
      background: linear-gradient(90deg, rgba(63,94,251,1) 0%, rgba(70,179,252,1) 100%);
      color: white;
      border-radius: 10px;
      padding: 2rem;
    }
    
    .feature-icon {
      font-size: 3em;
      color: #007bff;
      margin-bottom: 1rem;
    }
    
    .feature-title {
      font-size: 1.5em;
      font-weight: bold;
      margin-bottom: 0.5rem;
    }
    
    .logo {
      width: 90px;
      height: auto;
    }
    
    .container {
      width: 90%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 1rem;
    }
    
    .text-center {
      text-align: center;
    }
    
    .mb-5 {
      margin-bottom: 3rem;
    }
    
    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 1.5rem;
    }
    
    @keyframes rotateFrontBack {
      0% {
        transform: rotateY(0deg);
        background-color: #ffffff;
        color: #000000;
      }
      100% {
        transform: rotateY(360deg);
        background-color: #000000;
        color: #ffffff;
      }
    }
    
    .card {
      background-color: #ffffff;
      border-radius: 12px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
      padding: 2rem;
      text-align: center;
      position: relative;
      overflow: hidden;
      transition: transform 0.5s, background-color 0.5s, color 0.5s;
      transform-style: preserve-3d;
      height: 100%;
    }
    
    .card:hover {
      animation: rotateFrontBack 1s forwards;
    }   
    
    .bg-body-secondary {
      background-color: #f4f4f4;
      padding: 2rem 0;
    }
    
    @keyframes fadeLeft {
      0% {
        opacity: 0;
        transform: translateX(-20px);
      }
      100% {
        opacity: 1;
        transform: translateX(0);
      }
    }
    
    .fade-left-on-scroll {
      opacity: 0;
      transform: translateX(-20px);
      transition: opacity 1s ease-out, transform 1s ease-out;
    }
    
    .fade-left {
      opacity: 1;
      transform: translateX(0);
    }
    
    .fade-up {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 1s ease-out, transform 1s ease-out;
    }
    
    .fade-up.active {
      opacity: 1;
      transform: translateY(0);
    }
    
    .thank-you-message {
      margin-top: 100px;
      text-align: center;
    }
    
    .thank-you-message h1 {
      font-size: 3rem;
      color: #28a745;
    }
    
    .thank-you-message p {
      font-size: 1.2rem;
      margin-top: 20px;
    }
    
    .login-panel {
      max-width: 400px;
      margin: 100px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .login-panel .form-control {
      border-radius: 20px;
    }
    
    .login-panel .btn-primary {
      border-radius: 20px;
    }
    
    .login-panel .form-group {
      margin-bottom: 1.5rem;
    }
    
    .login-panel h2 {
      margin-bottom: 2rem;
    }
    
    .login-panel p {
      margin-bottom: 2rem;
      color: #6c757d;
    }
    
   
    .feedback-section {
      background-color: #f9f9f9;
      padding: 2rem 0;
      border-radius: 10px;
      margin: 2rem 0;
    }
    
    .feedback-section .form-group {
      margin-bottom: 1.5rem;
    }
    
    .feedback-section .btn-primary {
      padding: 0.5rem 2rem;
    }
    
   
    footer {
      background-color: rgb(125, 199, 255);
      color: #333;
      font-weight: 500;
    }
    

    .navbar-nav .nav-link {
      font-weight: 500;
      color: #333 !important;
      margin: 0 10px;
      transition: color 0.3s ease;
    }
    
    .navbar-nav .nav-link:hover {
      color: #0056b3 !important;
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
            <a class="nav-link active" aria-current="page" href="home page.php">Home</a>
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

  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="3000">
        <img src="pictures/picture-1.avif" class="d-block w-100" alt="Lab Equipment">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="pictures/picture-2.webp" class="d-block w-100" alt="Laboratory">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="pictures/picture-3.jpg" class="d-block w-100" alt="Research Team">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="pictures/picture-4.jpg" class="d-block w-100" alt="Scientific Analysis">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="fade-up">
    <div class="container mt-5">
      <div class="jumbotron text-center">
        <h1 class="display-4">Welcome to Our Lab Management Portal</h1>
        <p class="lead">Streamlining Your Lab Operations</p>
      </div>
    </div>
  </div>

  <div class="bg-body-secondary fade-left-on-scroll">
    <div class="container py-4">
      <h2 class="text-center mb-4">Our Features</h2>
      <div class="features-grid">
        <div class="card">
          <i class="feature-icon fas fa-microscope"></i>
          <div>
            <div class="feature-title">Equipment Management</div>
            <div>Keep track of all your lab equipment with detailed records, usage logs, and maintenance schedules.</div>
          </div>
        </div>

        <div class="card">
          <i class="feature-icon fas fa-boxes"></i>
          <div>
            <div class="feature-title">Inventory Control</div>
            <div>Monitor your inventory levels in real-time, set reorder alerts, and manage supply requests efficiently.</div>
          </div>
        </div>

        <div class="card">
          <i class="feature-icon fas fa-calendar-check"></i>
          <div>
            <div class="feature-title">Maintenance Scheduling</div>
            <div>Schedule regular maintenance for your equipment to ensure optimal performance and avoid unexpected downtime.</div>
          </div>
        </div>

        <div class="card">
          <i class="feature-icon fas fa-tools"></i>
          <div>
            <div class="feature-title">Repair Requests</div>
            <div>Submit and track repair requests with ease. Monitor the status of repairs and communicate directly with technicians.</div>
          </div>
        </div>

        <div class="card">
          <i class="feature-icon fas fa-users"></i>
          <div>
            <div class="feature-title">User Management</div>
            <div>Assign roles and permissions to your team members, ensuring that everyone has the access they need while maintaining security.</div>
          </div>
        </div>

        <div class="card">
          <i class="feature-icon fas fa-chart-line"></i>
          <div>
            <div class="feature-title">Reporting and Analytics</div>
            <div>Generate detailed reports on equipment usage, maintenance history, inventory levels, and more to make informed decisions.</div>
          </div>
        </div>

        <div class="card">
          <i class="feature-icon fas fa-share-alt"></i>
          <div>
            <div class="feature-title">Collaboration Tools</div>
            <div>Facilitate seamless collaboration with integrated communication tools for file sharing, task management, and project collaboration.</div>
          </div>
        </div>

        <div class="card">
          <i class="feature-icon fas fa-clipboard-check"></i>
          <div>
            <div class="feature-title">Compliance and Regulatory Support</div>
            <div>Stay compliant with industry regulations using automated documentation, audit trails, and regulatory reporting features.</div>
          </div>
        </div>

        <div class="card">
          <i class="feature-icon fas fa-cogs"></i>
          <div>
            <div class="feature-title">Customization and Scalability</div>
            <div>Customize workflows, dashboards, and user interfaces to match your specific needs. Our platform scales effortlessly to accommodate your growth.</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container text-center mb-5 mt-5">
    <h2 class="mb-3">Why Choose Us?</h2>
    <p>Our Lab Management Portal is built with the latest technologies to provide a user-friendly and secure experience. With our intuitive interface and powerful features, you can focus on your research while we take care of the logistics.</p>
    <p>Join the growing number of labs that trust our platform to manage their operations efficiently. Start optimizing your lab management today!</p>
  </div>

  <div class="fade-up">
    <div class="feedback-section">
      <div class="container">
        <h2 class="text-center mb-4">Share Your Feedback</h2>
        <form method="POST">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="form-group">
            <label for="feedback">Feedback:</label>
            <textarea class="form-control" id="feedback" name="feedback" rows="5" placeholder="Enter your feedback" required></textarea>
          </div>
          <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <footer class="text-center py-4">
    <p>&copy; 2024 Lab Management Portal. All rights reserved.</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      
      const fadeLeftElements = document.querySelectorAll('.fade-left-on-scroll');
      
      
      const fadeUpElements = document.querySelectorAll('.fade-up');
      
      function handleScroll() {
        
        fadeLeftElements.forEach(element => {
          const rect = element.getBoundingClientRect();
          if (rect.top <= window.innerHeight * 0.8 && rect.bottom >= 0) {
            element.classList.add('fade-left');
          }
        });
        
        
        fadeUpElements.forEach(element => {
          const rect = element.getBoundingClientRect();
          if (rect.top <= window.innerHeight * 0.8 && rect.bottom >= 0) {
            element.classList.add('active');
          }
        });
      }
      
      
      const navbar = document.querySelector('.navbar');
      window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
          navbar.style.padding = '0.5rem 1rem';
        } else {
          navbar.style.padding = '1rem';
        }
      });
      
      window.addEventListener('scroll', handleScroll);
      
      handleScroll();
    });
  </script>
</body>
</html>