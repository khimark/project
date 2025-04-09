
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
    $link = mysqli_connect("localhost", "root", "", "ecommerce_db");
    $sql = "SELECT * FROM productsTable";
    ?>
    <div class="container">
        <h1>Admin Login</h1>
        <form action="login.php" method="POST" id="login-form">
            <input type="text" name="username" placeholder="Username" required>
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <p id="login-message" class="message">
                <?php
                if (isset($_GET['error'])) {
                    echo htmlspecialchars($_GET['error']);
                }
                ?>
            </p>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section id="header">
        <a href="index.php"><img src="image/logo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li id="lg-bag"><a href="cart.html"><i class="fal fa-shopping-cart cart"></i></a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="admin.html">Admin</a></li>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fal fa-shopping-cart cart"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 70% off!</p>
        <button>Shop Now</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="image/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="image/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="image/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="image/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="image/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="image/features/f6.png" alt="">
            <h6>24/7 Support</h6>
        </div>
    </section>

    <div class="search-bar-container">
        <input type="text" id="search-bar" placeholder="Search for products...">
        <button type="submit" id="search-btn">Search</button>
        <link rel="stylesheet" href="search.css">
        <script src="search.js"></script>
    </div>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="image/shoes/1.jpg" alt="">
                <div class="des">
                    <span>adiddas</span>
                    <h5>Sport Shoe</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Ksh 2500</h4>
                </div>
            </div>
            <div class="cart">
                <a href="cart.html"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="image/shoes/2.jpg" alt="">
                <div class="des">
                    <span>adiddas</span>
                    <h5>Sport Shoe</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Ksh 1500</h4>
                </div>
            </div>
            <div class="cart">
                <a href="cart.html"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="image/shoes/3.jpg" alt="">
                <div class="des">
                    <span>adiddas</span>
                    <h5>Sport Shoe</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Ksh 3500</h4>
                </div>
            </div>
            <div class="cart">
                <a href="cart.html"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="image/shoes/4.jpg" alt="">
                <div class="des">
                    <span>adiddas</span>
                    <h5>Sport Shoe</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Ksh 2500</h4>
                </div>
            </div>
            <div class="cart">
                <a href="cart.html"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="image/shoes/5.jpg" alt="">
                <div class="des">
                    <span>adiddas</span>
                    <h5>Sport Shoe</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Ksh 2500</h4>
                </div>
            </div>
            <div class="cart">
                <a href="cart.html"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="image/shoes/6.jpg" alt="">
                <div class="des">
                    <span>adiddas</span>
                    <h5>Sport Shoe</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Ksh 3500</h4>
                </div>
            </div>
            <div class="cart">
                <a href="cart.html"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="image/shoes/7.jpg" alt="">
                <div class="des">
                    <span>adiddas</span>
                    <h5>Sport Shoe</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Ksh 2500</h4>
                </div>
            </div>
            <div class="cart">
                <a href="cart.html"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="image/shoes/8.jpg" alt="">
                <div class="des">
                    <span>adiddas</span>
                    <h5>Sport Shoe</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Ksh 1500</h4>
                </div>
            </div>
            <div class="cart">
                <a href="cart.html"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% Off</span> - All T-Shirts & Accessories</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>New Arrival Collection</p>
        <div class="pro-container">
            <div class="pro">
                <img src="image/products/n1.jpg" alt="">
                <div class="des">
                    <span>adiddas</span>
                    <h5>T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Ksh 2500</h4>
                </div>
            </div>
            <div class="cart">
                <a href="cart.html"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="image/products/n2.jpg" alt="">
                <div class="des">
                    <span>adiddas</span>
                    <h5>T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Ksh 1500</h4>
                </div>
            </div>
            <div class="cart">
                <a href="cart.html"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="image/products/n3.jpg" alt="">
                <div class="des">
                    <span>adiddas</span>
                    <h5>Sport-Shoe</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Ksh 2500</h4>
                </div>
            </div>
            <div class="cart">
                <a href="cart.html"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="image/products/n4.jpg" alt="">
                <div class="des">
                    <span>adiddas</span>
                    <h5>T-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Ksh 3500</h4>
                </div>
            </div>
            <div class="cart">
                <a href="cart.html"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="image/products/n5.jpg" alt="">
                <div class="des">
                    <span>adiddas</span>
                    <h5>Leather Shoulder Bag</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Ksh 2500</h4>
                </div>
            </div>
            <div class="cart">
                <a href="cart.html"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="image/products/n6.jpg" alt="">
                <div class="des">
                    <span>adiddas</span>
                    <h5>T-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Ksh 1500</h4>
                </div>
            </div>
            <div class="cart">
                <a href="cart.html"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="image/products/n7.jpg" alt="">
                <div class="des">
                    <span>adiddas</span>
                    <h5>Leather Briefcase</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Ksh 2500</h4>
                </div>
            </div>
            <div class="cart">
                <a href="cart.html"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="image/products/n8.jpg" alt="">
                <div class="des">
                    <span>adiddas</span>
                    <h5>Sport Wear</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Ksh 2500</h4>
                </div>
            </div>
            <div class="cart">
                <a href="cart.html"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic clothes are on sale at fashion</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>spring/summer</h4>
            <h2>upcoming season</h2>
            <span>The best classic clothes are on sale at fashion</span>
            <button class="white">Collection</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>NEW FOOTWEAR COLLECTION</h2>
            <h3>Spring / Summer 2025</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>T-SHIRTS</h2>
            <h3>New Trendy Prints</h3>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletter</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span>
            </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign up</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <h4>Contact</h4>
            <p><strong>Address:</strong> 123 Westlands, Nairobi</p>
            <p><strong>Phone:</strong> (+254) - 7345 - 6789</p>
            <p><strong>Hours:</strong> 08:30 - 17:30, Mon-Sat</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="image/pay/app.png" alt="">
                <img src="image/pay/play.png" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="image/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>@ 2025 SC. All rights reserved</p>
        </div>
    </footer>
    <script src="https://unpkg.com/scrollreveal"></script>

    <script src="index.js"></script>
</body>
</html>