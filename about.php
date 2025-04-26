<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Cupcake Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Fredoka" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/mainStyle.css">
</head>

<body>

    <!-- Header and Navbar -->
    <?php include '../PHP/navbar.php'; ?>

    <!-- About Section -->
    <div class="index-bg">
        <section class="about">
            <div class="about-container">
                <div class="about-text">
                    <h1>Welcome to Our Sweetest Journey! 🍰</h1>
                    <p>We are passionate about baking the most delicious and beautiful cupcakes for our customers.</p>
                    <p>Using only the <strong>freshest ingredients</strong>, we bring you <strong>handcrafted</strong>
                        cupcakes that make every moment special.</p>
                    <a href="#" class="btn">Order Now</a>
                </div> <!-- fix missing closing div -->
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="why-choose-us">
            <h2>Why Choose Us?</h2>
            <ul>
                <li>🎂 Made with Love & Quality Ingredients</li>
                <li>🌿 100% Fresh & Organic</li>
                <li>🚀 Fast & Reliable Delivery</li>
                <li>🎉 Perfect for Every Occasion</li>
            </ul>
        </section>

        <!-- Customer Testimonials -->
        <section class="testimonials">
            <h2>What Our Customers Say</h2>
            <div class="testimonial">
                <p>"Best cupcakes I've ever had! Super fresh and delicious. Will order again!"</p>
                <h4>- Sarah Johnson</h4>
            </div>
            <div class="testimonial">
                <p>"Amazing flavors and beautiful presentation. Perfect for my birthday party!"</p>
                <h4>- Emily Brown</h4>
            </div>
        </section>
    </div>
    
</body>

</html>
