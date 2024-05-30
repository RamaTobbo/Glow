<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $insert = mysqli_query($conn, "INSERT INTO `joined_users` (email) VALUES ('$email')");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="aftersign.css">
</head>

<body>
    <div id="container">
        <div id=box>
            <h1>You have joined us!</h1>
            <button onclick="gotohomepage()">Go Back to home page</button>
        </div>
    </div>
</body>
<script>
    function gotohomepage() {
        window.location.href = 'projectmain.html';
    }
</script>

</body>

</html>