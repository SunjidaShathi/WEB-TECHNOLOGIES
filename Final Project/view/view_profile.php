<?php
session_start();
include 'templates/nav2.php';?>

<!DOCTYPE html>
<html>
<head>
    <title>View Profile</title>
</head>

    <style>
        .shadow {
  box-shadow: 3px 3px 5px 6px #ccc;
}
          fieldset
        {
           
            margin-bottom: auto;
            margin-left: auto;
            margin-right: auto;
            border: 1px solid;
            border-radius: 30px;
  padding: 10px;
 
  
        }
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 30%;
  margin-bottom: 15px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 70%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 70%;
}

button:hover {
  opacity: 0.8;
}




.icon {
  padding: 10px;
  background: black;
  color: white;
  min-width: 50px;
  text-align: center;
}
.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}


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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script><br><br>
    <body style="background-color:#5D8896; color: black;">
         <fieldset style="background-color: #89CFF0;  border-color: #89CFF0;  height: 500px; width: 50%;">

<?php
// define variables and set to empty values
$userErr = $passErr = "";
$username = $password = "";
$errCount = 0;

if (isset($_SESSION['uname'])) {

    echo "<h1> Welcome ".$_SESSION['uname']."</h1>";
    echo '
    <fieldset>
    <legend> <b>Profile:</b></legend>
    
    ';


    require_once '../controller/getUser.php';
    $item = getUserAccount($_SESSION['uname']);

    //var_dump($item);
    if ($_SESSION['uname'] === $item['Username']){
        // match. now check pw
        
        echo '<br><div> Name: '. $item['Name'] . '</div> <br>';
        echo '<div> Email: '. $item['Email'] . '</div> <br>';
        echo '<div> City: '. $item['City'] . '</div> <br>';
        echo '<div> Vehicle: '. $item['Vehicle'] . '</div> <br>';
        echo '<div> Gender: '. $item['Gender'] . '</div> <br>';
        echo '<div> Date of Birth: '. $item['dob'] . '</div> <br>';
    }

    echo '<b><a href="edit_profile.php"> Edit Profile ' . '</a></b> <br><br>';
    echo '<b><a href="i.php"> Was your delivery Experience good? ' . '</a></b> <br><br>';
    echo '</fieldset>';

} else{
    header('Location: login.php');
}

?>

<br>
<br>
</fieldset>

</body>
<?php include 'templates/base2.php';?>
</html>