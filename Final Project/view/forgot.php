<?php
include 'templates/nav2.php';
?>
<!DOCTYPE html>
<html>
<head>
    
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

 </style>
 
<title> Login </title>



</head>

<body style="background-color:#5D8896;">
    <title>Forgot Password</title>
    

<?php
// define variables and set to empty values
$userErr = $passErr = "";
$username = $password = ""; 
$errCount = 0;

$email = "";
$emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $emailErr = "Email is required for this action!";
        $errCount = $errCount + 1;
    } else {
        $email = check_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $email="";
            $errCount = $errCount + 1;
        }
    }

   }

require_once '../model/model.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $emailErr = "Email is required for this action!";
        $errCount = $errCount + 1;
    } else {
        $email = check_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $email="";
            $errCount = $errCount + 1;
        }
    }
    $user_found = false;
    if ($errCount < 1){
        $arra = getUserByEmail($email);
        if ($arra){
            $user_found = true;
            if ($arra['Password']){
                echo "<br><div style='color: Black'>You are " . $arra['Name'] . "</br></div>";
                echo "<div style='color: black'> Your Password is " . $arra['Password'] . " </br></div>";
            }else{
                $passErr .= "Password Not Found!!";
            }
        }

        if (!$user_found){
            echo $userErr .= "No account found!";
        }

    }

}

  function check_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>




<div class="container" align="center"><h2 class="text-center" align="center" >FORGOT PASSWORD</h2><br>
    <p><p><p><p><p><p><fieldset style="background-color: #89CFF0;  border-color: #89CFF0;  height: 240px; width: 30%;">
<form method="post" class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <p style="color:Black;"><b>Enter Email: 
   <span class="error">* <?php echo $emailErr;?></span>
  <p><input type="text" name="email" placeholder="Enter Email" value="<?php echo $email;?>">
 
  <br><br>

    <button type="submit" name="submit" value="Submit" style="color: black;"><b>Submit </button>

</form>
</div>
</body>

</html>