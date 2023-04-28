<?php
session_start();
include 'templates/nav2.php'; ?>

<style>
    body{
        color: white;
    }
    .make-it-center{
        margin: auto;
        width: 50%;
    }
</style>
<meta charset=”utf-8">
<title>Index</title>
 
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


</head>

<body style="background-color:#5D8896;">
<br> <br>
<h1 style="text-align: center">E-Commerce Management System</h1>

 <div class="now" >
        <marquee behavior="" direction="">
        <h1 style="color: #89CFF0;" align="center">Thanks for visiting our website.We will not let you down

            </h1>
        </marquee>
    </div>
<?php
if (!isset($_SESSION['uname'])) {
    echo '<p style="text-align: center">Please login to use the website</p>';
    }
?>
<?php include 'templates/base2.php';
?>
</body>