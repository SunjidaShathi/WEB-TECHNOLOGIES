<?php
session_start();
include 'templates/nav2.php';?>
<?php 
require_once '../controller/updatePassword.php';
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
    <title>Change Password</title>
    <script>
        function checkTextInput(){
            let currPass = document.forms["cng_pws_form"]["current_pass"].value;
            let newPass = document.forms["cng_pws_form"]["new_password"].value;
            let rePass = document.forms["cng_pws_form"]["retype_password"].value;
            document.getElementById("sub_btn").disabled = !(currPass !== "" && newPass !== "" && rePass !== "");
            if (rePass !== "") {
                if (newPass !== rePass) {
                    document.getElementById("result").innerHTML = "New password and Retype password does not matches!";
                    document.getElementById("result").style.color = 'red';
                    document.getElementById("sub_btn").disabled = true;
                } else {
                    document.getElementById("result").innerHTML = '';
                    document.getElementById("sub_btn").disabled = false;
                }
            }

        }
    </script>
</head><br><br>
<body style="background-color:#5D8896;">
    <fieldset style="background-color: #89CFF0;  border-color: #89CFF0;  height: 500px; width: 30%;">

<br>
<div class="container" align="center">
    <h2 class="text-center">Change Password</h2>
    <br>
    <form method="post" class="form" name="cng_pws_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Current Password: <input type="password" onkeyup="checkTextInput()" name="current_pass">
        <span class="error">* </span>
        <br><br>
        New Password: <input type="password" onkeyup="checkTextInput()" name="new_password">
        <span class="error">* </span>
        <br>
        Retype New Password: <input type="password" onkeyup="checkTextInput()" name="retype_password">
        <span class="error">* </span>
        <div id="result"></div>
        <br><br>

        <button type="submit" id="sub_btn" name="submit" disabled value="Submit"> Submit </button>

    </form>
</div>
</fieldset>

<br>

</body>
<?php include 'templates/base2.php';?>
</html>