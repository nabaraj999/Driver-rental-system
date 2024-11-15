<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Rental Service</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>  
    <!-- Header Section -->
    <header>
        <div class="logo">
            <img src="images/logo.png" alt="Driver Rental Logo">
        </div>
        
        <nav class="main-nav">
            <a href="#">Home</a>
            <a href="#">Services</a>
            <a href="#">Become a Driver</a>
            <a href="#">Book a Driver</a>
            <a href="#">Blogs</a>
        </nav>
        
        <div class="header-right">
            <!-- Search Input -->
            <input type="text" placeholder="Search..." class="search-input">
            
            <!-- Username Display -->
            <?php
            session_start();
            if (isset($_SESSION['username'])) {
                echo '<span class="username">' . htmlspecialchars($_SESSION['username']) . '</span>';
            } else {
                echo '<span class="username">Guest</span>';
            }
            ?>
            
            <!-- Logout Button -->
            <a href="logout.php" class="logout-button">Logout</a>
        </div>
    </header>
    
    <!-- Main Content Section -->
    <section class="main-content">
        <div class="content-text">
            <h1>Everyday Travel, Made Simple</h1>
            <p>Get yourself a professional driver for a safe journey to your destination anywhere across Nepal.</p>
            <button class="cta-button">Book a Driver</button>
            <div class="download-links">
                <img src="images/facebook.png" alt="Facebook">
                <img src="images/insta.png" alt="Instagram">
                <img src="images/whatsapp.png" alt="WhatsApp">
            </div>
        </div>
        <div">
            <img src="./images/index car.jpg" class="content-image" alt="Car Image">
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <h2>Our Features</h2>
        <div class="features-container">
            <!-- Feature 1 -->
            <div class="feature-card">
                <img src="images/one300.png" alt="Safety Feature">
                <h3>Safety</h3>
                <p>Safety isn’t expensive, it’s priceless. Our drivers undergo extensive training and background checks, ensuring safety is never compromised.</p>
            </div>
            
            <!-- Feature 2 -->
            <div class="feature-card">
                <img src="images/two300.png" alt="Professional Drivers">
                <h3>Professional Drivers</h3>
                <p>Dependable and professional drivers familiar with routes and destinations all around Kathmandu.</p>
            </div>
            
            <!-- Feature 3 -->
            <div class="feature-card">
                <img src="images/three300.png" alt="Experience">
                <h3>3+ Years of Experience</h3>
                <p>Since 2019, we’ve served more than 2,000 customers, ensuring safe and reliable service with zero accidents or mishaps.</p>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <!-- Hire Driver Services Section -->
            <div class="footer-section">
                <h3>Hire Driver Services</h3>
                <div class="download-links">
                    <a href="#"><img src="images/app-store.png" alt="Download on App Store"></a>
                    <a href="#"><img src="images/google-play.png" alt="Download on Google Play"></a>
                    <a href="#"><img src="images/direct-android.png" alt="Direct Download"></a>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="footer-section">
                <h3>Contact</h3>
                <p>Mid Baneshwor, Kathmandu</p>
                <p>01-5900401</p>
                <p>+9779845889271</p>
                <p><a href="mailto:hiredriverservices@gmail.com">hiredriverservices@gmail.com</a></p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <!-- Links Section -->
            <div class="footer-section">
                <h3>Links</h3>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="#">Book Now</a></li>
                </ul>
            </div>

            <!-- Articles Section -->
            <div class="footer-section">
                <h3>Articles From Us</h3>
                <ul>
                    <li><a href="#">Driver Hire in Nepal</a></li>
                    <li><a href="#">Hire a Private Driver in Kathmandu</a></li>
                    <li><a href="#">Hire a Professional Driver</a></li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom Section -->
        <div class="footer-bottom">
            <p>&copy; 2022 - <a href="#">Hire Driver Services</a> | Powered by <a href="#">Jianjun Research & Development Pvt. Ltd.</a></p>
        </div>
    </footer>
</body>
</html>
