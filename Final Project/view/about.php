<?php
session_start();
include 'templates/nav2.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            color: white;
        }
        .make-it-center{
            margin: auto;
            width: 50%;
        }
        .lefterr{
            margin-left: -10%;
        }

        .required:after {
            content:"*";
            color: red;
        }
        .error{
            color: red;
    </style>
    <title>About</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <body style="background-color:#5D8896;">
<div class="text-center">


    <br> <br>
    <h1 style="text-align: center">E-Commerece Management System About</h1>
<p class="text-center" align="center">
    It is all about purchasing the products before it goes out of stock. Please stay with us for more amazing features.
</p>

<?php
if (!isset($_SESSION['uname'])) {
}
?>
<?php include 'templates/base2.php';
?>
</div>
</body>
</head>
</html>