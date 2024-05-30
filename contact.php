<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);



    $insert = mysqli_query($conn, "INSERT INTO `contact` (name, email, phonenumber, comment) VALUES ('$name', '$email', '$phonenumber', '$comment')");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <title>About us</title>
    <link rel="stylesheet" href="aboutus.css">
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
            </ul>
        </nav>
    </header>
    <div id="section1">
        <h1>About Us</h1>
        <pre>Glow is a Montreal-based brand that finds its roots in the consciousness 
of everything surrounding us. This value combined with our passion  Glow
    that offers natural products that are effective and of high quality</pre>
    </div>
    <div id="section2">
        <img src="Gladiolus -11-fotor-bg-remover-20240425211329.png" alt="Glow Product">
    </div>
    <div id="section3">
        <p>"Our mission is to provide high-quality products that are not tested on animals and are completely safe for
            the environment"</p>
    </div>
    <div id="section4">
        <div id="para1">
            <pre>Meet Joa,Glow Founder</pre>
            <p>Joa, who holds a master's degree in microbiology, has been developing her own cosmetics for years. </p>
            <p>Because of her very sensitive skin, she found that the products available in pharmacies and large stores
                didn’t suit her. This led her to try natural ingredients, and she quickly realized the power of them on
                her skin.</p>

        </div>
        <div><img src="AdobeStock_436138605_Preview.jpeg"></div>
    </div>
    <div id="section5">

        <div><img src="AdobeStock_207143205_Preview.jpeg"></div>
        <div id="para1">
            <pre>Meet Joa,Glow Founder</pre>
            <p>Joa, who holds a master's degree in microbiology, has been developing her own cosmetics for years. </p>
            <p>Because of her very sensitive skin, she found that the products available in pharmacies and large stores
                didn’t suit her. This led her to try natural ingredients, and she quickly realized the power of them on
                her skin.</p>

        </div>
    </div>
    <div id="section6">
        <h1>Contact Us</h1>
        <i>
            <center>Have a question or comment?</center>
        </i>
        <form id="contactus" method="post" action="contact.php">
            <table>
                <tr>
                    <td><input type="text" placeholder="Name" class="input1" name="name" autocomplete="off"></td>
                    <td><input type="email" placeholder="Email" class="input1" name="email" autocomplete="off"></td>
                </tr>
            </table>
            <input type="number" placeholder="Phone Number" class="input2" name="phonenumber" autocomplete="off">
            <input type="text" placeholder="Comment" class="input3" name="comment" required autocomplete="off">
            <button name="submit">Send</button>
        </form>
    </div>
</body>

</html>