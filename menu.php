<?php
session_start();

// قائمة المنتجات
$products = [
    [
        "name" => "Blue Cream Chocolate",
        "description" => "Delicious chocolate cupcake topped with blue cream frosting.",
        "price" => 6,
        "image" => "../images/choco blue.png"
    ],
    [
        "name" => "Cherry with Cream",
        "description" => "Moist cupcake with sweet cherry and rich cream topping.",
        "price" => 5,
        "image" => "../images/cupcack with cherry.jpg"
    ],
    [
        "name" => "Red Velvet with Cream",
        "description" => "Classic red velvet cupcake with smooth cream cheese frosting.",
        "price" => 7,
        "image" => "../images/redvilivatCream.jpg"
    ],
    [
        "name" => "Strawberry Cream",
        "description" => "Fresh strawberry cupcake with a creamy topping.",
        "price" => 8,
        "image" => "../images/strubarrycream.jpg"
    ],
    [
        "name" => "Strawberry Pieces",
        "description" => "Strawberry cupcake with real strawberry pieces.",
        "price" => 10,
        "image" => "../images/5.png"
    ],
    [
        "name" => "Strawberry Swirl",
        "description" => "A fluffy vanilla cupcake filled with fresh strawberry jam and swirled frosting.",
        "price" => 7,
        "image" => "../images/StrawberryCupcake.png"
    ],
    [
        "name" => "Caramel Crunch",
        "description" => "Moist chocolate cupcake topped with creamy caramel and crunchy toffee bits.",
        "price" => 8,
        "image" => "../images/CaramelCrunchCupcake.png"
    ],
    [
        "name" => "Lemon Zest",
        "description" => "A light lemon cupcake bursting with citrus flavor and topped with lemon buttercream.",
        "price" => 6,
        "image" => "../images/LemonZestCupcak.png"
    ],
    [
        "name" => "Red Velvet Charm",
        "description" => "Classic red velvet cupcake with smooth cream cheese frosting and a hint of cocoa.",
        "price" => 9,
        "image" => "../images/RedVelvetCharmCupcake.png"
    ]
    
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu - Cupcake Store</title>
    <link rel="stylesheet" href="../CSS/mainStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Fredoka" rel="stylesheet">
</head>
<body class="background">
<?php include '../PHP/navbar.php'; ?>

    <h2 class="page-name">Menu</h2>

    <div class="carousel-container">
        <div class="arrow" onclick="scrollCarousel(-1)">❮</div>
        <div class="product-wrapper" id="productsRow">
            <?php foreach ($products as $index => $product) : ?>
                <div class="product-box">
                    <a href="product.php?index=<?php echo $index; ?>">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="cupcake-image">
                        <p class="cupcake-name"><?php echo $product['name']; ?></p>
                        <p class="cupcake-price">$<?php echo number_format($product['price'], 2); ?></p>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="arrow" onclick="scrollCarousel(1)">❯</div>
    </div>

    <script>
        const productWrapper = document.getElementById('productsRow');

        function scrollCarousel(direction) {
            const scrollAmount = 300;
            productWrapper.scrollBy({
                left: direction * scrollAmount,
                behavior: 'smooth'
            });
        }

        setInterval(() => {
            scrollCarousel(1);
        }, 5000);
    </script>

</body>
</html>
