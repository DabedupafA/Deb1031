<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type = "text/css" href = "css files/login_style.css"/>
    <title>Login Process</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('photos/background_images/login.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
             background-size: 100% 100%;
        }
        .error-message {
            color: red;
            font-weight: bold;
        }
    </style>
    
</head>
<body>
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Replace this with your actual authentication logic
    $validUsername = "dave";
    $validPassword = "1031";

    // Check if the provided credentials are valid
    if ($username == $validUsername && $password == $validPassword) {
        // Authentication successful, redirect to a login page
        header("Location: firstpage.php");
        exit();
    } else {
        // Authentication failed, display an error message
        header("Location: login.php?error=1");
    }
}
?>
</body>
</html>