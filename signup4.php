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

        .otp-input {
            width: 50px;
            height: 50px;
            font-size: 24px;
            text-align: center;
            margin: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .otp-container {
            display: flex;
            justify-content: center;
            align-items: center;
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
        <form class="p-3 mt-3" action="index.php" method="POST">
            <div class="text-center text-muted h5">
                Verify Your Email Address
            </div>
            <div class="text-center text-muted">We've Sent A Code To Your Email Address</div>
            <div class="otp-container">
                <!-- Each input for one digit of the OTP -->
                <input type="text" class="otp-input" maxlength="1" oninput="moveToNext(this, 'otp2')" id="otp1">
                <input type="text" class="otp-input" maxlength="1" oninput="moveToNext(this, 'otp3')" id="otp2">
                <input type="text" class="otp-input" maxlength="1" oninput="moveToNext(this, 'otp4')" id="otp3">
                <input type="text" class="otp-input" maxlength="1" id="otp4">
            </div>
            <button class="btn mt-3">Validate Code</button>
        </form>
        <div class="text-center fs-6 ">
            Didn't Received Code? <a href="signup3.php">Resend OTP</a>
        </div>
    </div>
    <script>
        function moveToNext(current, nextFieldID) {
            if (current.value.length === 1) {
                document.getElementById(nextFieldID).focus();
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>