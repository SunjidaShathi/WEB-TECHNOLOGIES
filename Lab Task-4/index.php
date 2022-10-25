<!DOCTYPE html>
<html>
<head>
    <title>Lab 4</title>
    <style>

        .make-it-center{
            margin: auto;
            width: 50%;
        }

        body{
            background: #eeeaea;
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
        }

        /* The sidebar menu */
        .sidenav {
            height: 100%; /* Full-height: remove this if you want "auto" height */
            width: 220px; /* Set the width of the sidebar */
            position: fixed; /* Fixed Sidebar (stay in place on scroll) */
            z-index: 1; /* Stay on top */
            top: 0; /* Stay at the top */
            left: 0;
        }

        /* The navigation menu links */
        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 25px;
            display: block;
        }

        /* When you mouse over the navigation links, change their color */
        .sidenav a:hover {
            
        }

    </style>
</head>
<body>
<?php include 'templates/nav.php';?>
<br>
<br>
<?php
session_start();
if (isset($_SESSION['uname'])) {
    header('Location: dashboard.php');

}

?>

<h1>Welcome to xCompany</h1>

<br>
<br>
</body>
<?php include 'templates/footer.php';?>
</html>