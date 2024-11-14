<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Rental Service</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>  
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
    
    <!-- Notification Icon -->
    <a href="#"><i class="icon">🔔</i></a>
    
    <!-- Username Display (fetched from session) -->
    <?php
    session_start();
    if (isset($_SESSION['username'])) {
        echo '<span class="username">' . htmlspecialchars($_SESSION['username']) . '</span>';
    } else {
        echo '<span class="username">Guest</span>';
    }
    ?>
    
    <!-- Logout Icon -->
    <a href="logout.php" class="logout-icon"><i class="icon">🚪</i></a>
</div>

    </header>
    
    <section class="main-content">
        <div class="content-text">
            <h1>Everyday Travel, made simple</h1>
            <p>Get yourself a professional driver for a safe journey to your destination anywhere across Nepal.</p>
            <button class="cta-button">Book a Driver</button>
            <div class="download-buttons">
                <img src="images/facebook.png" alt="Download on Android">
                <img src="images/insta.png" alt="Download on App Store">
                <img src="images/whatsapp.png" alt="Download on Google Play">
            </div>
        </div>
        <div class="content-image">
            <img src="images/index car.jpg" alt="Car Image">
        </div>
    </section>

    <section class="features-section">
    <h2>Our Features</h2>
    <div class="features-container">
        <!-- Feature 1: Safety -->
        <div class="feature-card">
            <img src="images/one300.png" alt="Safety Feature">
            <h3>Safety</h3>
            <p>Safety isn’t expensive, it’s priceless. With Hire Driver Service, you don’t need to worry about safety, our professional and well-trained drivers won’t threaten your safety. Our drivers undergo extensive training and background checks, ensuring safety is never compromised.</p>
        </div>
        
        <!-- Feature 2: Professional Drivers -->
        <div class="feature-card">
            <img src="images/two300.png" alt="Professional Drivers">
            <h3>Professional Drivers</h3>
            <p>We provide not only professional but dependable drivers. Our drivers are punctual, hygienic, and smart. They are familiar with routes and destinations all around Kathmandu.</p>
        </div>
        
        <!-- Feature 3: 3+ Years of Experience -->
        <div class="feature-card">
            <img src="images/three300.png" alt="3+ Years Experience">
            <h3>3+ Years of Experience</h3>
            <p>We have been providing our services to valued customers since 2019. Over the past 3 years, we have served more than 2000+ customers, ensuring safe and reliable service with zero accidents or mishaps.</p>
        </div>
    </div>
</section>

</body>
</html>
