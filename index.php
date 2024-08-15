<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Website</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Custom Navbar Styles */
        .navbar {
            background-color: rgba(0,64,128,1); /* Navbar background color */
            color: #fff; /* Navbar text color */
            padding: 10px 20px; /* Navbar padding */
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: #fff; /* Brand name color */
            text-decoration: none; /* Remove underline */
        }
        .navbar-brand:hover {
            color: #f0f0f0; /* Brand name color on hover */
        }
        .navbar-toggler {
            color: #fff; /* Toggler icon color */
            border: none; /* Remove border */
        }
        .navbar-toggler:focus {
            outline: none; /* Remove focus outline */
        }
        .navbar-toggler:hover {
            background-color: rgba(255, 255, 255, 0.1); /* Background color on hover */
        }
        .navbar-nav {
            display: flex;
            align-items: center;
            justify-content: center; /* Center align navbar items */
            gap: 20px; /* Spacing between navbar items */
            list-style: none; /* Remove list-style */
            padding: 0; /* Remove default padding */
        }
        .nav-item {
            position: relative;
        }
        .nav-link {
            font-size: 1.1rem;
            color: #fff; /* Link color */
            text-decoration: none; /* Remove underline */
            padding: 0.5rem 1rem;
            border-radius: 5px; /* Rounded corners for links */
        }
        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1); /* Background color on hover */
        }
        .dropdown-menu {
            background-color: rgb(10, 70,100); /* Dropdown menu background color */
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 10rem;
            padding: 0.5rem 0;
            margin: 0.120rem 0 0;
            margin-top:1.5rem;
            font-size: 1rem;
            color: #212529;
            text-align: left;
            list-style: none;
            border-radius: 0.25rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        .dropdown-menu.show {
            display: block;
        }
        .dropdown-item {
            color: #333; /* Dropdown item text color */
            text-decoration: none; /* Remove underline */
            display: block;
            padding: 0.25rem 1.5rem;
            clear: both;
            font-weight: 400;
            color: white;
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0;
        }
        .dropdown-item:hover {
            background-color: rgb(77, 130, 156); ; /* Dropdown item background color on hover */
        }
        .jumbotron {
            position: relative;
            width: 100%;
            height: 600px;
            overflow: hidden;
        }
        .slide-box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            z-index: 1;
        }
        .jumbotron img {
            width: 1400px; /* Full width */
            height: 400px; /* Set the height */
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .mySlides.fade {
            opacity: 1;
        }

        @keyframes fadeInOut {
            0% {
                opacity: 0;
            }
            25% {
                opacity: 1;
            }
            75% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }

        .mySlides.fade {
            animation: fade 15s infinite;
        }

 /* Custom CSS for Features Section */
.features {
    background-color: #f8f9fa;
    padding: 50px 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px; /* Add some space between items */
}

.feature {
    text-align: center;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    width: 300px; /* Adjusted width for each feature */
    transition: transform 0.3s; /* Keep the same transition */
    margin: 10px;
    background-color: #fff; /* White background */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Soft shadow */
}

.feature:hover {
    transform: scale(1.05); /* Keep the same hover effect */
}

.feature img {
    width: 100%;
    height: 200px;
    /* border-top-left-radius: 10px;
    border-top-right-radius: 10px; */
    object-fit: cover;
}

.feature-content {
    padding: 20px;
}

.feature-title {
    font-weight: bold;
    margin-bottom: 10px;
    color: #333; /* Darker text color */
}

.feature-text {
    color: #666; /* Slightly darker text color */
    margin-bottom: 20px;
}

/* Center align text */
.feature-content {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
    /* Contact Section Styles */
    .contact {
    background-image: url('image/blog-4.jpg'); /* Background image */
    background-size: cover; /* Cover the entire section */
    background-position: center; /* Center the background image */
    padding: 80px 0; /* Increased padding top and bottom */
    color: white; /* White text color for contrast */
}

.contact h2 {
    font-size: 2.5rem; /* Larger font size */
    margin-bottom: 20px;
    text-align: center;
    color: #fff; /* White text color */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Text shadow for readability */
}

.contact p {
    font-size: 1.2rem; /* Slightly larger font size */
    margin-bottom: 30px;
    text-align: center;
    color: #f0f0f0; /* Light grey text color */
}

.contact-form {
    max-width: 600px;
    margin: 0 auto;
    padding: 30px; /* Increased padding */
    border-radius: 10px;
    background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent background */
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); /* Stronger shadow */
}

.contact-form .form-group {
    margin-bottom: 20px;
}

.contact-form label {
    font-weight: bold;
    margin-bottom: 10px; /* Increased margin between label and input */
    display: block;
    color: #333; /* Darker text color */
}

.contact-form input[type="text"],
.contact-form input[type="email"],
.contact-form textarea {
    width: 100%; /* Full width */
    padding: 20px; /* Increased padding */
    margin-bottom: 20px; /* Added margin-bottom to increase distance between inputs */
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box; /* Ensures padding and border are included in the element's total width and height */
    transition: border-color 0.3s;
}

.contact-form input[type="text"]:focus,
.contact-form input[type="email"]:focus,
.contact-form textarea:focus {
    border-color: #007bff;
    outline: none;
}

.contact-form textarea {
    resize: vertical;
    min-height: 150px; /* Ensure the textarea is taller by default */
}

.contact-form button {
    width: 100%;
    padding: 20px; /* Increased padding */
    margin-top: 10px; /* Margin above the button */
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    font-size: 1.2rem; /* Larger font size */
    cursor: pointer;
    transition: background-color 0.3s;
}

.contact-form button:hover {
    background-color: #0056b3;
}

        .footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .footer i {
            font-size: 24px;
            margin: 0 10px;
        }
        
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Hospital</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown">
                            About
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item" href="services.html">Services</a></li>
                            <li><a class="dropdown-item" href="doctors.html">Doctors</a></li>
                            <li><a class="dropdown-item" href="appointment.html">Appointment</a></li>
                            <li><a class="dropdown-item" href="review.html">Review</a></li>
                            <li><a class="dropdown-item" href="blogs.html">Blogs</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-bs-toggle="dropdown">
                            Login
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="loginDropdown">
                            <li><a class="dropdown-item" href="admin.html">Admin</a></li>
                            <li><a class="dropdown-item" href="doctor.html">Doctor</a></li>
                            <li><a class="dropdown-item" href="patient.html">Patient</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-8 pt-5">
        <div class="jumbotron">
            <div class="slide-box">
                <h1 class="display-4">Welcome to Our Hospital!</h1>
                <p class="lead">Your health is our priority. We offer comprehensive healthcare services for you and your family.</p>
                <hr class="my-4">
                <p>Discover our range of services, experienced doctors, and the care we provide to each of our patients.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
            <!-- Slideshow Images -->
            <div class="slideshow-container">
                <img class="mySlides fade" src="image/blog-4.jpg" alt="Hospital">
                <img class="mySlides fade" src="image/blog-1.jpg" alt="Hospital">
                <img class="mySlides fade" src="image/blog-3.jpg" alt="Hospital">
                <img class="mySlides fade" src="image/blog-6.jpg" alt="Hospital">
                <img class="mySlides fade" src="image/blog-5.jpg" alt="Hospital">
            </div>
        </div>
<!-- Features Section -->
<div class="features">
    <div class="feature">
        <div class="box">
            <img src="image/blog-1.jpg" alt="Healthcare Technology">
        </div>
        <h3 class="feature-title">Advanced Technology</h3>
        <p class="feature-text">We utilize the latest healthcare technology to provide state-of-the-art treatments and diagnostics.</p>
    </div>
    <div class="feature">
        <div class="box">
            <img src="image/blog-4.jpg" alt="Patient Testimonials">
        </div>
        <h3 class="feature-title">Patient Testimonials</h3>
        <p class="feature-text">Read stories from our patients about their experiences and the care they received.</p>
    </div>
    <div class="feature">
        <div class="box">
            <img src="image/blog-5.jpg" alt="Community Outreach">
        </div>
        <h3 class="feature-title">Community Outreach</h3>
        <p class="feature-text">We are dedicated to improving the health and well-being of our community through various programs and initiatives.</p>
    </div>
    <div class="feature">
        <div class="box">
            <img src="image/blog-5.jpg" alt="Community Outreach">
        </div>
        <h3 class="feature-title">Community Outreach</h3>
        <p class="feature-text">We are dedicated to improving the health and well-being of our community through various programs and initiatives.</p>
    </div>
    <div class="feature">
        <div class="box">
            <img src="image/blog-5.jpg" alt="Community Outreach">
        </div>
        <h3 class="feature-title">Community Outreach</h3>
        <p class="feature-text">We are dedicated to improving the health and well-being of our community through various programs and initiatives.</p>
    </div>
    <div class="feature">
        <div class="box">
            <img src="image/blog-5.jpg" alt="Community Outreach">
        </div>
        <h3 class="feature-title">Community Outreach</h3>
        <p class="feature-text">We are dedicated to improving the health and well-being of our community through various programs and initiatives.</p>
    </div>
</div>
<!-- Contact Section -->
<div class="contact">
    <div class="container">
        <h2>Contact Us</h2>
        <p>Have questions? Get in touch with us.</p>
        <form class="contact-form">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Your Message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</div>



    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <p>&copy; 2024 Hospital. All Rights Reserved.</p>
            <div>
                <i class="bi bi-facebook"></i>
                <i class="bi bi-twitter"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-github"></i>
                <i class="bi bi-youtube"></i>
                <i class="bi bi-linkedin"></i>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (including Popper.js) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Slideshow script
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 4000); // Change image every 4 seconds
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const aboutDropdown = document.getElementById("aboutDropdown");
            const aboutMenu = document.querySelector("#aboutDropdown + .dropdown-menu");
            aboutDropdown.addEventListener("click", function() {
                aboutMenu.classList.toggle("show");
            });

            const loginDropdown = document.getElementById("loginDropdown");
            const loginMenu = document.querySelector("#loginDropdown + .dropdown-menu");
            loginDropdown.addEventListener("click", function() {
                loginMenu.classList.toggle("show");
            });

            // Close the dropdown when clicking outside
            window.addEventListener("click", function(event) {
                if (!aboutDropdown.contains(event.target)) {
                    aboutMenu.classList.remove("show");
                }
                if (!loginDropdown.contains(event.target)) {
                    loginMenu.classList.remove("show");
                }
            });
        });
    </script>
</body>
</html>

