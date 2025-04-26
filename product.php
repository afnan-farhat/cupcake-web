<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root"; 
$password = "Nada-1234";    
$dbname = "cakeDB"; // قاعدة بيانات المنتجات

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the product from the database based on the index passed via URL
if (isset($_GET['index']) && is_numeric($_GET['index'])) {
    $index = $_GET['index'];

    // Retrieve product details from the database
    $sql = "SELECT * FROM products WHERE id = $index";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $product = $result->fetch_assoc();
    } else {
        // If no product found, redirect back to the menu with a message
        echo "<p>No product found with the provided ID.</p>";
        exit;  // Stop further execution
    }
} else {
    // If index is incorrect or not set, redirect back to the product page
    echo "<p>Invalid product ID.</p>";
    exit;  // Stop further execution
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $product['name']; ?> - Cupcake Store</title>
    <link rel="stylesheet" href="../CSS/mainStyle.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://fonts.googleapis.com/css?family=Fredoka" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="background">

    <?php include '../PHP/navbar.php'; ?>

    <div class="row">
        <div class="column">
            <img class="product-image" src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
        </div>

        <div class="column">
            <div class="description">
                <h3><?php echo $product['name']; ?></h3>
                <p><?php echo $product['description']; ?></p>
                <br>

                <form action="..\payment-form.html" method="get">
                    <div class="dropdown">
                        <button type="button" class="dropbtn" id="selectedQuantity">Choose quantity</button>
                        <div class="dropdown-content">
                            <a href="#" onclick="selectQuantity(1)">1</a>
                            <a href="#" onclick="selectQuantity(2)">2</a>
                            <a href="#" onclick="selectQuantity(3)">3</a>
                            <a href="#" onclick="selectQuantity(4)">4</a>
                        </div>
                    </div>

                    <!-- Hidden input to store the selected quantity -->
                    <input type="hidden" name="quantity" id="quantityInput" required>

                    <div class="row">
                        <div class="column">
                            <h4>Price</h4>
                        </div>
                        <div class="column">
                            <h3 class="price">$<?php echo number_format($product['price'], 2); ?></h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="column">
                            <a href="..\PHP\menu.php">
                                <button type="button" value="Cancel" class="button-cancel">Cancel</button>
                            </a>
                        </div>
                        <div class="column">
                            <a href="..\payment-form.html">
                                <button type="submit" class="button-next">Next</button>
                            </a>
                        </div>
                    </div>
                </form>

                <br><br><br>
            </div>
        </div>
    </div>

    <script>
        function selectQuantity(qty) {
            document.getElementById('selectedQuantity').innerText = qty + " piece(s)";
            document.getElementById('quantityInput').value = qty;
        }
    </script>

</body>

</html>

