<!DOCTYPE html>
<html>
<head>
    
    
    <title>Login</title>
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
<?php
session_start();
// all css files are mentioned there on the base2 and nav2 file.
include 'templates/nav2.php';?>

<?php
// define variables and set to empty values
$userErr = $passErr = "";
$username = $password = "";
$errCount = 0;

if (isset($_SESSION['uname'])) {
    header('Location: dashboard.php');

} else{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["username"])) {
            $userErr = "Username is required";
            $errCount = $errCount + 1;
        } else {
            $username = check_input($_POST["username"]);

            if (strlen($username) <2 ) {
                // code...
                $userErr = "Minimum 2 characters required";
                $errCount = $errCount + 1;
            }elseif (!preg_match("/^[a-zA-Z_\-.]*$/", $username)) {
                $userErr = "Username can contain alpha numeric characters, period, dash or underscore only!";
                $username ="";
                $errCount = $errCount + 1;
            } else{
                if (isset($_POST['rmbm'])) {
                    $time = time();
                    setcookie('username', $username, $time + 1200);
                    setcookie('password', $password, $time + 1200);
                }
            }

        }

        if (empty($_POST["password"])) {
            $passErr = "Password is required";
            $errCount = $errCount + 1;
        } else {
            $password = check_input($_POST["password"]);
        }

        if (strlen($password) <8 ) {
            // code...
            $passErr = "Minimum 8 characters required";
            $errCount = $errCount + 1;
        }

        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[%$#@]).+$/", $password)) {
            /*
            ^ starts the string
            (?=.*[a-z]) Atleast a lower case letter
            (?=.*[A-Z]) Atleast an upper case letter
            (?!.* ) no space
            (?=.*\d%$#@) Atleast a digit and atleast one of the specified characters.
            .{8,16} between 8 to 16 characters
            */
            $passErr .= " Password must contain atleast a digit, a lower case and an upper case letter, atleast one of the [%$#@] and no space.";
            $password ="";
            $errCount = $errCount + 1;
        }

        if ($errCount < 1){
            $time = time();
            if (isset($_POST['rmbm'])) {
                setcookie('username', $username, $time + 1000000);
                setcookie('password', $password, $time + 1000000);
            }
            require_once '../controller/login.php';

            // db login goes here
            $dt = loginUser($username);
            if ($dt) {
                $user_found = true;
                if ($password === $dt['Password']){
                    $_SESSION['uname'] = $username;
                    $_SESSION['ugroup'] = $dt['acc_group'];
                    echo "Thanks for logging in.";
                    header('Location: dashboard.php');
                } else{
                    $passErr .= "Password Wrong!";
                }
            } else{
                $user_found = false;
            }

            if (!$user_found){
                echo $userErr .= "No account found!";
            }

            //exit;
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
<br><br>
<h4 class="text-center" align="center">You are not logged in! Please Login!</h4>

<script>
    function validateForm() {
        let usrnm = document.forms["login-form"]["username"].value;
        let passwrd = document.forms["login-form"]["password"].value;
        if (usrnm === "") {
            alert("Username must be filled out");
            document.getElementById("text").innerHTML = "Username must be filled out";
            document.getElementById("text").style.color="red";
            return false;
        } else if (passwrd === ""){
            alert("Password must be filled out");
            document.getElementById("text").innerHTML = "Password must be filled out";
            document.getElementById("text").style.color="red";
            return false;
        }else{
            document.getElementById("text").innerHTML = x;
            document.getElementById("text").style.color="black";
        }
    }

    function checkTextInput(){
        let usrnm = document.forms["login-form"]["username"].value;
        let passwrd = document.forms["login-form"]["password"].value;
        if (usrnm !== "" && passwrd !== "") {
            document.getElementById("sub_btn").hidden = false;
            // document.getElementById("sub_btn").style.backgroundColor="green";
        }

    }

</script>
<fieldset style="background-color: #89CFF0;  border-color: #89CFF0;  height: 460px; width: 38%;">

<div class="container" align="center">
    <form method="POST" class="form" name="login-form"  onsubmit="return validateForm()">

        <p style="color:Black;"><b>Username:</b>
        <span class="error">* <?php echo $userErr;?></span>
         
        <p ><input type="text" onkeyup="checkTextInput()" name="username" placeholder="Username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">

        <p style="color:Black;"><b>Password:</b>
        <span class="error">* <?php echo $passErr;?></span>
        <p><input type="password" onkeyup="checkTextInput()" name="password" placeholder="Password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"><br>


        <!-- style="background-color: gray; " --->
       <p><br><button type="submit" id="sub_btn" value="Log in" style="color:Black;"><b>login</button> <br> <br></b>
        <p><input type="checkbox" id="rmbm" name="rmbm" value="True">
        <label for="rmbm"  style="color:Black;"><b> Remember Me</label><br><br>
        <span id="text"></span>

        <a href="./forgot.php"> <span>Forgot Password?</span> </a> <br>
        <a href="./registration.php"> <span>New Registration</span> </a></b>
    
    </form>
  </div>
  </fieldset>
</body>
<?php include 'templates/base2.php';?>
</html>
