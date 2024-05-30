<?php
include 'config.php';
$message = '';
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

    $selectEmail = mysqli_query($conn, "SELECT * FROM `signup` WHERE email='$email'");
    $selectName = mysqli_query($conn, "SELECT * FROM `signup` WHERE username='$name'");

    if (mysqli_num_rows($selectEmail) > 0) {
        $message = "**You already have an account...Login";
    } elseif (mysqli_num_rows($selectName) > 0) {
        $message = "**Username already exists. Choose another one";
    } else {
        $insert = mysqli_query($conn, "INSERT INTO `signup` (username, email, password) VALUES ('$name', '$email', '$hashedPass')");
        if ($insert) {

            header("Location: aftersign.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="sign.css">
</head>

<body>

    <div class="sign-box">
        <div class="sign-header">
            <header>Sign up</header>
        </div>
        <form action="" method="post" onsubmit="return validateForm()">
            <div class="input-box">
                <input type="text" name="name" class="input-field" placeholder="Username" autocomplete="off" required>
            </div>
            <div class="input-box">
                <input type="email" name="email" class="input-field" placeholder="Email" autocomplete="off" required>
            </div>
            <div class="input-box">
                <input type="password" id="password" name="password" class="input-field" placeholder="Password"
                    required>
            </div>
            <div class="input-box">
                <input type="password" id="verifyPassword" class="input-field" placeholder="Confirm Password" required>
            </div>
            <div class="forgot">
                <section>
                    <input type="checkbox" id="check" required>
                    <label for="check">I agree to these </label>
                    <span id="message" style="color: red"><?php echo $message; ?></span>
                </section>
                <section>
                    <a href="#">terms and conditions</a>
                </section>

            </div>
            <div class="input-submit">
                <input type="submit" class="submit-btn" name="submit" id="submit" value="sign up" onclick="welcome()">
            </div>
        </form>
        <p>Already a member? Login <a href="login.html">here</a></p>
    </div>
    </div>

    <script>
    function validateForm() {
        const password = document.getElementById("password").value;
        var verifyPassword = document.getElementById("verifyPassword").value;
        if (password.length < 8) {
            document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";
            return false;
        }
        if (pw.length > 15) {
            document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";
            return false;
        }
        if (password !== verifyPassword) {
            document.getElementById("message").innerHTML = "**Password do not match";
            return false;
        }
        return true;
    }

    function welcome() {
        if (validateForm() !== false) {
            window.alert("Welcome 😄");
        }
    }
    </script>
</body>

</html>