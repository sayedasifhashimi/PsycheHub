<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/logo/mylogo.png') }}">
    <title>YourDoctor</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Animate.css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <style>
          /* Custom CSS for navigation bar animation */
          @keyframes slideDown {
              from {
                  transform: translateY(-50px);
              }
              to {
                  transform: translateY(0);
              }
          }
      
          .navbar {
              animation: slideDown 0.5s ease-in-out;
          }
          /* Custom CSS for the left content in the slideshow */
        #slideshow-content {
            position: absolute;
            top: 40%;
            left: 10%;
            transform: translateY(-50%);
            color: #f04d55;
            width: 30%;
        }
        /* Custom CSS for animations */
        .animated {
                animation-duration: 1s;
                animation-fill-mode: both;
            }
          /* Add hover effect to navbar items with dropdown */
      .navbar-nav .nav-item.dropdown:hover .dropdown-menu {
          display: block;
          opacity: 0.9;
      }
      </style>
</head>
<body>

    <!-- Navigation Menu -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light" style="opacity: 0.9;">
        <div class="container">
            <a class="navbar-brand" href=""><img src="{{ asset('assets/logo/mylogo.png') }}" width="80" alt="Logo"> YourDoctor</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto" style="margin-right: 50px;">
                    <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>

                    <!-- Services tab with dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <!-- Submenu items -->
                            <a class="dropdown-item" href="#">Child Counselling</a>
                            <a class="dropdown-item" href="#">Long-Term Benefits</a>
                            <a class="dropdown-item" href="#">Stress Management</a>
                            <!-- Add more submenu items as needed -->
                        </div>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>

                <ul class="navbar-nav">
                  <!-- "Get Appointment!" button -->
                  <li class="nav-item">
                    <button type="button" name="appointment" class="btn btn-danger btn-md">Get Appointment!</button>
                  </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Slideshow -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active  w-100">
                <img src="{{ asset('assets/images/illustration-2.png') }}" class="d-block" style="position: relative; right: 0px;" alt="Image 1">
                <!-- Add more slides as needed -->
              <div id="slideshow-content">
                <h2 class="display-4"><b>Child Counselling</b></h2>
                <h3>Counsellor/Psychotherapist</h3>
                <p>Child counselling is a specialized form of counselling that focuses on addressing the emotional, social, and psychological needs of children.</p>
            </div>
            </div>
            
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Page Content -->
    <div id="home" class="container">
        <!-- Content for the Home page -->
    </div>

    <div id="services" class="container">
        <!-- Content for the Services page -->
    </div>

    <div id="about" class="container">
        <!-- Content for the About page -->
    </div>

    <div id="contact" class="container">
        <!-- Content for the Contact page -->
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>Contact Information: contact@example.com | Phone: +123456789</p>
        </div>
    </footer>

    <!-- Bootstrap JS (popper.js and bootstrap.js) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
