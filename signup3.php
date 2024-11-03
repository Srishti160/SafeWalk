<!DOCTYPE html>
<html lang="en">

<?php
$uniquifier = "safe-walk"; // Dynamic class name if needed
$otp = rand(0000, 9999);
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
        <form class="p-3 mt-3" action="otp.php" method="POST">
            <span class="far fa-user">Email</span>
            <div class="form-field d-flex align-items-center">
                <input type="email" name="email" id="email" placeholder="Enter Email Address">
            </div>
            <div class="form-field">
                <input type="hidden" name="otp" id="otp" value="<?php echo $otp; ?>">
            </div>
            <button class="btn mt-3">Send Code</button>
        </form>
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