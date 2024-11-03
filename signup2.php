<!DOCTYPE html>
<html lang="en">

<?php
$uniquifier = "safe-walk"; // Dynamic class name if needed
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!-- Preconnect for Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Orbitron:wght@400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Include Orbitron, Roboto, and Lato Fonts -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sign.css">
    <style>
        body {
            min-height: 100vh;
            background-size: cover;
            background-position: bottom center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wrapper {
            min-width: 35%;
        }

        @media(max-width:1024px) {
            .wrapper {
                min-width: 70%;
            }
        }

        @media(max-width:400px) {
            .wrapper {
                min-width: 90%;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="logo">
            <img src="img\main_logo.png" alt="">
        </div>
        <div class="col-12">
            <div class="text-center name">
                <span style='font-family: "Orbitron", sans-serif;'>SafeWalk</span>
            </div>
        </div>
        <form class="p-3 mt-3" action="signup3.php">
            <span class="far fa-user">Type Of Government ID Proof</span>
            <div class="form-field d-flex align-items-center">
                <input type="text" name="govtype" id="govtype" placeholder="Enter Type Of Government ID">
            </div>

            <span class="far fa-user">Government ID Proof Number</span>
            <div class="form-field d-flex align-items-center">
                <input type="number" name="govno" id="govno" placeholder="Enter Government ID Proof Number">
            </div>

            <span class="fas fa-key">User Picture</span>
            <div class="form-field d-flex align-items-center">
                <input type="image" name="pic" id="pic" placeholder="Upload Your Picture">
            </div>

            <span class="far fa-user">Emergency Contact Name</span>
            <div class="form-field d-flex align-items-center">
                <input type="text" name="cname" id="cname" placeholder="Enter Contact Name">
            </div>

            <span class="fas fa-key">Emergency Contact Number</span>
            <div class="form-field d-flex align-items-center">
                <input type="number" name="cnum" id="cnum" placeholder="Enter Contact Number">
            </div>

            <span class="fas fa-key">Emergency Contact Relation</span>
            <div class="form-field d-flex align-items-center">
                <input type="text" name="relation" id="relation" placeholder="Enter Contact Relation">
            </div>

            <button class="btn mt-3">Next</button>
        </form>
        <div class="text-center fs-6">
            Already Have Account? <a href="login.php">Login</a>
        </div>
    </div>
</body>

</html>