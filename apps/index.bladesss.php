<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Psychologist Website</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <style>
        body {
            padding-top: 56px;
        }

        @media (min-width: 992px) {
            body {
                padding-top: 64px;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Psychologist Name</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#therapies">Therapies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Welcome Section (Slideshow) -->
    <section id="home" class="container-fluid mt-5">
        <div id="welcomeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/happy-patient-and-caregiver-2021-08-31-01-09-42-utc-1024x683.webp') }}" class="d-block w-100" alt="Welcome Slide 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Welcome to Our Psychologist Services</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed
                            cursus ante dapibus diam.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/istockphoto-1884421738-1024x1024.webp') }}" class="d-block w-100" alt="Welcome Slide 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Welcome to Our Psychologist Services</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed
                            cursus ante dapibus diam.</p>
                    </div>
                </div>
                <!-- Add more slides as needed -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#welcomeCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#welcomeCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- About Section (Slideshow) -->
    <section id="about" class="container mt-5">
        <div id="aboutCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2>About Us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent
                                libero. Sed cursus ante dapibus diam, et lacinia urna luctus in.</p>
                        </div>
                        <div class="col-lg-6">
                            <!-- Add an image or video about the psychologist -->
                            <img src="https://via.placeholder.com/800x600" class="img-fluid" alt="About Us Image">
                        </div>
                    </div>
                </div>
                <!-- Add more slides as needed -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Our Therapies Section -->
    <section id="therapies" class="container mt-5">
        <h2 class="mb-4">Our Therapies</h2>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Therapy Image 1">
                    <div class="card-body">
                        <h4 class="card-title">Therapy 1</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
                            Praesent libero.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Therapy Image 2">
                    <div class="card-body">
                        <h4 class="card-title">Therapy 2</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
                            Praesent libero.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Therapy Image 3">
                    <div class="card-body">
                        <h4 class="card-title">Therapy 3</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
                            Praesent libero.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Testimonials Section -->
    <section id="testimonials" class="container mt-5">
        <h2 class="mb-4">Client Testimonials</h2>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
                            Praesent libero.</p>
                        <footer class="blockquote-footer">Client 1</footer>
                    </blockquote>
                </div>
                <div class="carousel-item">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
                            Praesent libero.</p>
                        <footer class="blockquote-footer">Client 2</footer>
                    </blockquote>
                </div>
                <!-- Add more testimonials as needed -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Latest Blog Posts Section -->
    <section id="blog" class="container-fluid bg-light mt-5">
        <div class="container">
            <h2 class="text-center mb-4">Latest Blog Posts</h2>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Blog Post Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Blog Post 1</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
                                odio. Praesent libero.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Blog Post Image 2">
                        <div class="card-body">
                            <h4 class="card-title">Blog Post 2</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
                                odio. Praesent libero.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Blog Post Image 3">
                        <div class="card-body">
                            <h4 class="card-title">Blog Post 3</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
                                odio. Praesent libero.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
