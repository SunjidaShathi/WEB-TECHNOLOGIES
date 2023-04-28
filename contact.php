<!DOCTYPE html>
<html>
<head>
    
    
    <title>Login</title>
    <style>

        .make-it-center{
            margin: auto;
            width: 50%;
        }

        body{
            color: white;
        }

        .required:after {
            content:"*";
            color: red;
        }
        .error{
            color: red;
        }

 </style>
 <meta charset=”utf-8">
<title>PHP Login System with Remember me feature</title>
<! — materialize CSS →
<link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href=”https://fonts.googleapis.com/css?family=Open+Sans" rel=”stylesheet”>
<link rel=”stylesheet” href=”style.css”>

</head>

<body style="background-color:#5D8896;">
<?php
session_start();
include '../templates/nav2.php'; ?>

    <br> <br>
    <h1 class="text-center" align="center">E-Commerce Management System Contact</h1>

<div class="text-center" align="center">
    Have a question in mind? Start with saying hi to us...
<div>mail: sunjidashathi1234@gmail.com</div>
</div>
<div><p align="center"><a href="https://mail.google.com">Send email to the given mail</a></p></div>

<?php
if (!isset($_SESSION['uname'])) {
}
?>
<?php include '../templates/base2.php';
?>