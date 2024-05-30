<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <title>SkinCare</title>
    <link rel="stylesheet" href="product.css">
</head>

<body>
    <div id="announcement">
        <p id="movetext">Free shipping available on all orders!</p>
    </div>
    <header>
        <div id="toptitle">
            <h1><a href="projectmain.html">Glow</a></h1>
        </div>
        <nav>
            <ul>
                <li><a href="skincare.html">Skin Care</a></li>
                <li><a href="haircare.html">Hair Care</a></li>
                <li><a href="skinanalyze.php">Analyze Your Skin</a></li>
                <li><a href="contact.php">About us</a></li>
                <li><a href="addproducts.php">Add Products</a></li>

            </ul>
        </nav>
    </header>

    <div id="section1">
        <h1>Our Products</h1>
        <p>Keep your skin and hair looking and feeling its best with all-natural, plant-based routine</p>
    </div>
    <div id="floatimages">

        <div class="product-card">
            <img src="image0section1.webp">
            <h4>Moisturizer</h4>
            <span>
                <center>$10</center>
            </span>
            <button>+</button>
        </div>
        <div class="product-card">
            <img src="image2section1.webp">
            <h4>Face Mask</h4>
            <span>
                <center>$10</center>
            </span>
            <button>+</button>
        </div>
        <div class="product-card">
            <img src="image3section1.webp">
            <h4>Eye Creme</h4>
            <span>
                <center>$10</center>
            </span>
            <button>+</button>
        </div>
        <div class="product-card">
            <img src="image4section1.webp" id="img4">
            <h4>Hair Conditioner</h4>
            <span>
                <center>$10</center>
            </span>
            <button>+</button>
        </div>
        <div class="product-card">
            <img src="image2.1section1.webp" id="img4">
            <h4> Vitamine C Mask</h4>
            <span>
                <center>$10</center>
            </span>
            <button>+</button>
        </div>
        <div class="product-card">
            <img src="image4.1section1.webp">
            <h4>Sun Screen</h4>
            <span>
                <center>$10</center>
            </span>
            <button>+</button>
        </div>


        <?php
        include 'config.php';

        $message = '';




        $latest_product_query = "SELECT * FROM product ORDER BY id DESC LIMIT 1";
        $latest_product_result = mysqli_query($conn, $latest_product_query);


        while ($latest_product_row = mysqli_fetch_assoc($latest_product_result)) {
            echo '<div class="product-card">';
            echo '<img src="' . $latest_product_row['ProductPhoto'] . '" alt="' . $latest_product_row['name'] . '">';
            echo '<h4>' . $latest_product_row['name'] . '</h4>';
            echo '<span><center> $' . $latest_product_row['price'] . '</center></span>';
            echo '<button>+</button>';
            echo '</div>';
        }



        ?>

    </div>
    </div>
    <script>
    </script>

</body>

</html>