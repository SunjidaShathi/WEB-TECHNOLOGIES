<!DOCTYPE html>
<html>
<head>
    <title>View Profile</title>
    <style>

        

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
            width: 200px; /* Set the width of the sidebar */
            position: fixed; /* Fixed Sidebar (stay in place on scroll) */
           
            left: 0;
            background-color: lightgray;
            overflow-x: hidden; /* Disable horizontal scroll */
            padding-top: 20px;
        }

        /* The navigation menu links */
        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 25px;
            color: blue;
            display: block;
        }

        /* When you mouse over the navigation links, change their color */
        .sidenav a:hover {
            color: black;
        }

    </style>
</head>
<body>

<?php
session_start();
include 'templates/nav.php';
// define variables and set to empty values
$userErr = $passErr = "";
$username = $password = "";
$errCount = 0;

if (isset($_SESSION['uname'])) {
    include 'templates/sidenav.php';

    echo "<h1> Welcome Mr. ".$_SESSION['uname']."</h1>";
    echo '
    
    <legend> <b>Profile:</b></legend>
    
    ';

    $strJsonFileContents = file_get_contents("model/data.json");
    // var_dump($strJsonFileContents);

    $arra = json_decode($strJsonFileContents);
    // var_dump($arra);
    foreach($arra as $item) { //foreach element in $arr
        if ($_SESSION['uname'] === $item->username){
            // match. now check pw
            
            echo '<br><div> Name: '. $item->name . '</div> <br>';
            echo '<div> Email: '. $item->email . '</div> <br>';
            echo '<div> Gender: '. $item->gender . '</div> <br>';
            echo '<div> Date of Birth: '. $item->dob . '</div> <br>';
        }
    }
    echo '<b><a href="edit_profile.php"> Edit Profile ' . '</a></b> <br><br>';
   

} else{
    header('Location: login.php');
}

?>

<br>
<br>
</body>
<?php include 'templates/footer.php';?>
</html>