<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sportswear Store - PUMA Clone</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <img src="puma.png" alt="Sportswear Logo">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="#">New Arrivals</a></li>
                <li><a href="#">Men</a></li>
                <li><a href="#">Women</a></li>
                <li><a href="#">Kids</a></li>
                <li><a href="#">Sale</a></li>
                
            </ul>
        </nav>
            <div class="header-icons">
            <i class="fas fa-search"></i>
            <i class="fas fa-shopping-bag"></i>
            <i class="fas fa-user login-icon"></i>  <!-- Added User Login Icon -->
            <div class="menu-toggle">
            <i class="fas fa-user login-icon" onclick="openLoginPage()"></i>


    </div>
</div>

    </header>

    <!-- Category Navigation -->
    <nav class="category-nav">
        <ul>
            <li><a href="#sneakers">Sneakers</a></li>
            <li><a href="#sandals">Sandals</a></li>
            <li><a href="#cross-training">Cross Training</a></li>
            <li><a href="#running">Running</a></li>
        </ul>
    </nav>

    <!-- Main Slider -->
    <div class="swiper main-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="1.jpg" alt="Running Shoes">
                <div class="banner-content">
                    <h2 class="banner-title">Ultraboost 2023</h2>
                    <p class="banner-text">Experience maximum comfort with our latest cushioning technology</p>
                    <button class="shop-now-btn">Shop Now</button>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="2.jpg" alt="Training Gear">
                <div class="banner-content">
                    <h2 class="banner-title">Summer Collection</h2>
                    <p class="banner-text">Stay cool and comfortable in our breathable summer lineup</p>
                    <button class="shop-now-btn">Explore</button>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <!-- Product Categories -->
    <section class="product-category" id="sneakers">
        <h2 class="category-title">Sneakers Collection</h2>
        <div class="products-grid">
            <div class="product-card">
                <img src="3.avif" alt="Classic Sneakers">
                <h3>Classic Sneakers</h3>
                <p> ₹ 2,000 </p>
            </div>
            <div class="product-card">
                <img src="4.avif" alt="High Top Sneakers">
                <h3>High Top Pro</h3>
                <p> ₹ 3,000 </p>
            </div>
            <div class="product-card">
                <img src="5.avif" alt="Retro Sneakers">
                <h3>Retro Racer</h3>
                <p> ₹ 4,000</p>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter">
        <h2>Join Our Community</h2>
        <p>Get 15% off your first order and exclusive updates</p>
        <input type="email" placeholder="Enter your email">
        <button>Subscribe</button>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-column">
            <h3>Company</h3>
            <ul>
                <li>About Us</li>
                <li>Careers</li>
                <li>Sustainability</li>
                <li>Press</li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Help</h3>
            <ul>
                <li>Customer Service</li>
                <li>Size Guide</li>
                <li>Returns</li>
                <li>Contact Us</li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Follow Us</h3>
            <div class="social-icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </footer>

    <!-- Existing content -->
    
    <!-- Shoe Entry Form -->
    <div class="shoe-form-container">
        <h2>Make a Request for Shoe Stock</h2><br>
        <form action="submit_request.php" method="POST">
            <label for="Your-name">Your Name:</label>
            <input type="text" id="Your-name" name="Your-name" required>

            <label for="shoe-name">Shoe Name:</label>
            <input type="text" id="shoe-name" name="shoe-name" required>
            
            <label for="shoe-id">Shoe ID:</label>
            <input type="text" id="shoe-id" name="shoe-id" required>
            
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
            
            <button type="submit">Submit</button>
        </form>
    </div>

    
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
