<?php
include 'config.php';

$message = '';

if (isset($_POST['submit'])) {
    $Firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $Lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);

    $gender = mysqli_real_escape_string($conn, $_POST['gender']);

    $scaly = mysqli_real_escape_string($conn, $_POST['scaly']);
    $shiny = mysqli_real_escape_string($conn, $_POST['shiny']);
    $hydratedNotOily = mysqli_real_escape_string($conn, $_POST['hydratedNotOily']);
    $acne = mysqli_real_escape_string($conn, $_POST['acne']);


    if ($scaly == 'yes' && $acne == 'no') {
        $skintype = 'Dry';
    } elseif ($scaly == 'no' && $shiny == 'yes' && $acne == 'sometimes') {
        $skintype = 'Combination';
    } elseif ($scaly == 'no' && $shiny == 'no' && $hydratedNotOily == 'yes' && $acne == 'sometimes') {
        $skintype = 'Normal';
    } elseif ($scaly == 'no' && $shiny == 'yes' && $acne == 'yes') {
        $skintype = 'Oily';
    }
    $skintype_query = mysqli_query($conn, "SELECT SkinTypeID FROM skintypes WHERE SkinType='$skintype'");
    if ($skintype_query && mysqli_num_rows($skintype_query) > 0) {
        $skintype_row = mysqli_fetch_assoc($skintype_query);
        $skintype_id = $skintype_row['SkinTypeID'];


        $insert = mysqli_query($conn, "INSERT INTO Customers (FirstName, LastName, age, gender, skintype_id) 
            VALUES ('$Firstname', '$Lastname', '$age', '$gender', '$skintype_id')");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="skinanalyze.css">
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
    <section>
        <form action="skinanalyze.php" method="post" name="form" onsubmit="return formvalidation()">
            <table border="1px" id="table1">
                <tr>
                    <td>Enter Your FirstName</td>
                    <td><input type="text" id="name" placeholder="FirstName" class="input" name="firstname" autocomplete="off" value="<?php if (isset($_POST['firstname'])) {
                                                                                                                                            echo $_POST['firstname'];
                                                                                                                                        } ?>">
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>Enter Your LastName</td>
                    <td><input type="text" id="name" placeholder="LastName" class="input" name="lastname" autocomplete="off" value="<?php if (isset($_POST['lastname'])) {
                                                                                                                                        echo $_POST['lastname'];
                                                                                                                                    } ?>">
                    </td>
                </tr>
                <tr>
                    <td>Enter Your Age</td>
                    <td><input type="number" placeholder="Age" class="input" name="age" autocomplete="off" value="<?php if (isset($_POST['age'])) {
                                                                                                                        echo $_POST['age'];
                                                                                                                    } ?>"></td>
                </tr>
                <tr>
                    <td>Enter Your Gender</td>
                    <td>
                        <input type="radio" name="gender" value="female" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'female') {
                                                                                echo 'checked';
                                                                            } ?>>Female
                        <input type="radio" name="gender" value="male" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male') {
                                                                            echo 'checked';
                                                                        } ?>>Male
                    </td>
                </tr>
                <tr>
                    <td>Did Your Skin feel Tight or Scaly</td>
                    <td>
                        <input type="radio" name="scaly" value="yes" <?php if (isset($_POST['scaly']) && $_POST['scaly'] == 'yes') {
                                                                            echo 'checked';
                                                                        } ?>>Yes
                        <input type="radio" name="scaly" value="no" <?php if (isset($_POST['scaly']) && $_POST['scaly'] == 'no') {
                                                                        echo 'checked';
                                                                    } ?>>No
                    </td>
                </tr>
                <tr>
                    <td>Did You Have Shine Only on Your T-zone</td>
                    <td>
                        <input type="radio" name="shiny" value="yes" <?php if (isset($_POST['shiny']) && $_POST['shiny'] == 'yes') {
                                                                            echo 'checked';
                                                                        } ?>>Yes
                        <input type="radio" name="shiny" value="no" <?php if (isset($_POST['shiny']) && $_POST['shiny'] == 'no') {
                                                                        echo 'checked';
                                                                    } ?>>No
                    </td>
                </tr>
                <tr>
                    <td>Did You Have Hydrated Skin But not Oily</td>
                    <td>
                        <input type="radio" name="hydratedNotOily" value="yes" <?php if (isset($_POST['hydratedNotOily']) && $_POST['hydratedNotOily'] == 'yes') {
                                                                                    echo 'checked';
                                                                                } ?>>Yes
                        <input type="radio" name="hydratedNotOily" value="no" <?php if (isset($_POST['hydratedNotOily']) && $_POST['hydratedNotOily'] == 'no') {
                                                                                    echo 'checked';
                                                                                } ?>>No
                    </td>
                </tr>
                <tr>
                    <td>Did You Have Acne</td>
                    <td>
                        <input type="radio" name="acne" value="yes" <?php if (isset($_POST['acne']) && $_POST['acne'] == 'yes') {
                                                                        echo 'checked';
                                                                    } ?>>Yes
                        <input type="radio" name="acne" value="no" <?php if (isset($_POST['acne']) && $_POST['acne'] == 'no') {
                                                                        echo 'checked';
                                                                    } ?>>No
                        <input type="radio" name="acne" value="sometimes" <?php if (isset($_POST['acne']) && $_POST['acne'] == 'sometimes') {
                                                                                echo 'checked';
                                                                            } ?>>Sometimes
                    </td>
                </tr>
            </table>
            <input class="button1" type="submit" value="Confirm" name="submit">
            <input class="button1" type="button" value="Analyze" onclick="showSkinType()">
        </form>

        <table border="1px" id="table2">
            <tr>
                <td>Your Skin Type is</td>
                <td><input type="text" readonly class="input1" id="skintyperesult"></td>
            </tr>

            <tr>
                <td>Press The button To See Best Skin Routine For Your Skin</td>
                <td><input class="button" type="button" value="Press" onclick="showRoutineImage()"> </td>
            </tr>
        </table>
    </section>
    <div id="routineImageContainer"></div>
    <script>
        function formvalidation() {
            let firtsnamename = document.forms["form"]["firstname"].value;
            let lastname = document.forms["form"]["lastname"].value;
            let age = document.forms["form"]["age"].value;
            let gender = document.querySelector('input[name="gender"]:checked');
            let scaly = document.querySelector('input[name="scaly"]:checked');
            let shiny = document.querySelector('input[name="shiny"]:checked');
            let hydratedNotOily = document.querySelector('input[name="hydratedNotOily"]:checked');
            let acne = document.querySelector('input[name="acne"]:checked');

            if (age < 0) {
                alert("Enter a positive number for age");
                return false;
            }

            if (firstname.trim() === "") {
                alert("Enter Your FirstName");
                return false;
            }
            if (lasttname.trim() === "") {
                alert("Enter Your LastName");
                return false;
            }

            if (!gender || !scaly || !shiny || !hydratedNotOily || !acne) {
                alert("Please check all the required fields!");
                return false;
            }

            // Reset the form after validation
            // document.forms["form"].reset();
        }

        function showSkinType() {
            var name = document.getElementById('name').value;
            var scaly = document.querySelector('input[name="scaly"]:checked');
            var shiny = document.querySelector('input[name="shiny"]:checked');
            var hydratedNotOily = document.querySelector('input[name="hydratedNotOily"]:checked');
            var acne = document.querySelector('input[name="acne"]:checked');

            if (scaly && shiny && hydratedNotOily && acne) {
                if (scaly.value === 'yes' && acne.value === 'no') {
                    document.getElementById('skintyperesult').value = "Welcome " + name + ", Your Skin Type Is Dry";
                } else if (scaly.value === 'no' && shiny.value === 'yes' && acne.value === 'sometimes') {
                    document.getElementById('skintyperesult').value = "Welcome " + name + ", Your Skin Type Is Combination";
                } else if (scaly.value === 'no' && shiny.value === 'no' && hydratedNotOily.value === 'yes' && acne.value ===
                    'sometimes') {
                    document.getElementById('skintyperesult').value = "Welcome " + name + ", Your Skin Type Is Normal";
                } else if (scaly.value === 'no' && shiny.value === 'yes' && acne.value === 'yes') {
                    document.getElementById('skintyperesult').value = "Welcome " + name + ", Your Skin Type Is Oily";
                }
            } else {
                alert("Please answer all skin-related questions to determine your skin type.");
            }
        }

        function showRoutineImage() {
            var skinType = document.getElementById('skintyperesult').value;
            var routineImageContainer = document.getElementById('routineImageContainer');
            // routineImageContainer.innerHTML = "";

            if (skinType.includes("Dry")) {
                addImage("image0section1.webp");
                addImage("image0.1section1.webp");
            } else if (skinType.includes("Combination")) {
                addImage("image1section3.webp");
                addImage("image2.1section1.webp");
            } else if (skinType.includes("Normal")) {
                addImage("image2section1.webp");
                addImage("image3section1.webp");
            } else if (skinType.includes("Oily")) {
                addImage("image3section1.webp");
                addImage("image4section1.webp");
            }
        }

        function addImage(src) {
            var image = document.createElement('img');
            image.src = src;
            document.getElementById('routineImageContainer').appendChild(image);
        }
    </script>
</body>

</html>