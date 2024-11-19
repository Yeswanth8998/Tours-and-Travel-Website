<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equi="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <section class="header">

        <a href="home.php" class="logo">Explore Horizons.</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="package.php">Packages</a>
            <a href="book.php">Booking</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <div class="heading" style="background:url(images/header-bg-3.jpg) no-repeat">
        <h1>Book Now</h1>
    </div>

    <section class="booking">

        <h1 class="heading-title">Book Your Trip</h1>

        <form action="book_form.php" method="post" class="book_form">

            <div class="flex">
                <div class="inputBox">
                    <span>Name:</span>
                    <input type="text" placeholder="Enter Your Name" name="name">
                </div>
                <div class="inputBox">
                    <span>Email:</span>
                    <input type="email" placeholder="Enter Your Email" name="email">
                </div>
                <div class="inputBox">
                    <span>Phone:</span>
                    <input type="number" placeholder="Enter Your Number" name="phone">
                </div>
                <div class="inputBox">
                    <span>Address:</span>
                    <input type="text" placeholder="Enter Your Address" name="address">
                </div>
                <div class="inputBox">
                    <span>Where To:</span>
                    <input type="text" placeholder="Place you want to visit" name="location">
                </div>
                <div class="inputBox">
                    <span>How many:</span>
                    <input type="number" placeholder="Number of guests" name="guests">
                </div>
                <div class="inputBox">
                    <span>Arrivals:</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>Leaving:</span>
                    <input type="date" name="leaving">
                </div>
            </div>

            <input type="submit" value="Submit" class="btn" name=send>

        </form>

    </section>

    <footer>
        <section class="footer">
            <div class="box-container">

                <div class="box">
                    <h3>Quick Links</h3>
                    <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                    <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
                    <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
                    <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
                </div>

                <div class="box">
                    <h3>Extra Links</h3>
                    <a href="#"><i class="fas fa-angle-right"></i> Ask Question</a>
                    <a href="#"><i class="fas fa-angle-right"></i> About Us</a>
                    <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
                    <a href="#"><i class="fas fa-angle-right"></i> Terms Of Use</a>
                </div>

                <div class="box">
                    <h3>Contact Info</h3>
                    <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
                    <a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
                    <a href="#"><i class="fas fa-envelope"></i> yeswanth8998@gmail.com</a>
                    <a href="#"><i class="fas fa-map"></i> Vijayawada, India - 522237 </a>
                </div>

                <div class="box">
                    <h3>Follow Us</h3>
                    <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                    <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                    <a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
                    <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                </div>

            </div>

            <div class="credit"> Created by <span>Yeswanth</span> | All Rights Reserved!</div>

        </section>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>

</body>

</html>