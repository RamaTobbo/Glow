<?php
include 'config.php';

$message = '';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $image = mysqli_real_escape_string($conn, $_POST['image']);

    $insert_query = "INSERT INTO product (name, price, ProductPhoto) VALUES ('$name', '$price', '$image')";

    if (mysqli_query($conn, $insert_query)) {
        $message = "Product added successfully.";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <title>SkinCare</title>
    <link rel="stylesheet" href="addproduct.css">
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






    <div id="table">
        <table border="2" cellpadding="55px">
            <caption align="top">Product List</caption>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
            </tr>
            <?php
            $res = mysqli_query($conn, "SELECT * FROM product");
            while ($row = mysqli_fetch_array($res)) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td><img src=\"pics/" . $row['ProductPhoto'] . "\" width=\"190\" height=\"190\"></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>

    <form method="post" action="">
        <p>Name: <input type="text" name="name" autocomplete="off" required><br><br></p>
        <p>Price: <input type="text" name="price" autocomplete="off"><br><br></p>
        <p>Image: <input type="text" name="image" required><br><br></p>
        <input type="submit" name="submit" value="Add Product">
    </form>

    <script>
        alert("<?php echo $message; ?>");
    </script>
</body>

</html>