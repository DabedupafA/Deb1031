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
<title>Document</title>
</head>
<style>
     body {
  background-image: url('photos/background_images/login.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
     }
    </style>
<body>

<div class="login-container">
        <h2>Login</h2>
        <?php
        if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo '<p style="color:red;">Invalid username or password. Please try again.</p>';
        // Clear the error flag after displaying the error message
        unset($_GET['error']);

         }
         ?>
        <form method="post" action="login_process.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
         </form>

</body>
</html>
