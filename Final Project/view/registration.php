<?php
require_once '../controller/registrationIncludes.php'
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
label{color: black;}
select{color: black;}
legend{color: black;}

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
    <title>Registration</title>
    

    <script>
        function validateForm() {
            let usrnm = document.forms["reg_form"]["username"].value;
            let passwrd = document.forms["reg_form"]["password"].value;
            let name = document.forms["reg_form"]["name"].value;
            let email = document.forms["reg_form"]["email"].value;
            let cnfrmPass = document.forms["reg_form"]["cnfrmPass"].value;
            let gender = document.forms["reg_form"]["gender"].value;
             let city = document.forms["reg_form"]["city"].value;
              let vehicle = document.forms["reg_form"]["vehicle"].value;
            let dob = document.forms["reg_form"]["dob"].value;
            let resp;
            if (name === "") {
                alert("Name must be filled out");
                document.getElementById("res_text").innerHTML = "Name must be filled out";
                document.getElementById("res_text").style.color="red";
                return false;
            }else if (email === "") {
                alert("Email must be filled out");
                document.getElementById("res_text").innerHTML = "Email must be filled out";
                document.getElementById("res_text").style.color="red";
                return  false;
            }else if (gender === "") {
                alert("Gender must be filled out");
                document.getElementById("res_text").innerHTML = "Gender must be filled out";
                document.getElementById("res_text").style.color="red";
                return false;
            }
            else if (city === "") {
                alert("City must be filled out");
                document.getElementById("res_text").innerHTML = "City must be filled out";
                document.getElementById("res_text").style.color="red";
                return false;
            }else if (vehicle === "") {
                alert("Vehicle must be filled out");
                document.getElementById("res_text").innerHTML = "Vehicle must be filled out";
                document.getElementById("res_text").style.color="red";
                return false;
            }else if (dob === "") {
                alert("Date of Birth must be filled out");
                document.getElementById("res_text").innerHTML = "Date of Birth must be filled out";
                document.getElementById("res_text").style.color="red";
                return false;
            }else if (usrnm === "") {
                alert("Username must be filled out");
                document.getElementById("res_text").innerHTML = "Username must be filled out";
                document.getElementById("res_text").style.color="red";
                return false;
            } else if (passwrd === ""){
                alert("Password must be filled out");
                document.getElementById("res_text").innerHTML = "Password must be filled out";
                document.getElementById("res_text").style.color="red";
                return false;
            }else if (cnfrmPass === "") {
                alert("Confirm password must be filled out");
                document.getElementById("res_text").innerHTML = "Confirm password must be filled out";
                document.getElementById("res_text").style.color="red";
                return false;
            }else{
                document.getElementById("res_text").innerHTML = x;
                document.getElementById("res_text").style.color="black";
            }
        }

        function checkTextInput(){
            let usrnm = document.forms["reg_form"]["username"].value;
            let passwrd = document.forms["reg_form"]["password"].value;
            let name = document.forms["reg_form"]["name"].value;
            let email = document.forms["reg_form"]["email"].value;
            let cnfrmPass = document.forms["reg_form"]["cnfrmPass"].value;
            let city = document.forms["reg_form"]["city"].value;
            let vehicle = document.forms["reg_form"]["vehicle"].value;
            let gender = document.forms["reg_form"]["gender"].value;
            let dob = document.forms["reg_form"]["dob"].value;
            //alert('test')
            
            document.getElementById("e_btn").disabled = !(name !== "" );
            document.getElementById("u_btn").disabled = !(name !== "" && email !== "" );
            document.getElementById("p_btn").disabled = !(usrnm !== "" && name !== "" && email !== "");
            document.getElementById("c_btn").disabled = !(usrnm !== "" && name !== "" && email !== "" && passwrd !== "");
        }

        // jQuery version
        function check_username(){
            // Get value from input on the page
            var username = jQuery("#Username").val();
            if (username) {
                // Send the input data to the server using get
                jQuery.get("controller/check_username_db.php", {"Username": Username}, function (data) {
                    // Display the returned data
                    // alert(data)
                    document.getElementById("result").innerHTML = data;
                });
            } else {
                document.getElementById("result").innerHTML = '';
            }

            checkTextInput();
        }

       


        

    </script><br><br>
   
    <fieldset style="background-color: #89CFF0;  border-color: #89CFF0;  height: 1200px; width: 50%;">
   
</head>


<body style="background-color:#5D8896;">
<h3 align="left" style="color:#C21E56;">Register as a rider</h3>
<div class="donor-info make-it-center">
<div class="container">
    
    <form name="reg_form" onsubmit="return validateForm()" method="post" class="form">
        <?php
        if(isset($error))
        {
            echo $error;
        }
        ?>
        <br /><b>
        <label>Name</label>  <span class="error">* <?php echo $nameErr;?></span><br>
        <input type="text" onkeyup="checkTextInput()" name="name" placeholder="Enter your Name" class="form-control" value="<?php echo $name;?>" /> <br/><br/>
        <label>E-mail</label> <span class="error">* <?php echo $emailErr;?></span><br>

        <input type="text" id="e_btn" name="email" placeholder="Enter your Email" onkeyup="checkTextInput()" class="form-control" value="<?php echo $email;?>" /><br /><br/>

        <label>User Name</label>  <span class="error">* <?php echo $userErr;?></span><br>
        <input type="text" id="u_btn" name="username" placeholder="Enter a Username" onkeyup="check_username()" class="form-control" value="<?php echo $username;?>" /> <br/>
        <div id="result"></div><br/>


        <label>Password</label>  <span class="error">* <?php echo $passErr;?></span><br>

        <input type="password" name="password" placeholder="Enter a password" class="form-control" /><br /><br/>
        <label>Confirm Password</label>  <span class="error">* <?php echo $confrmPassErr;?></span>

        <input type="password" name = "cnfrmPass" placeholder="Confirm your password" class="form-control" /><br /><br/>
         <p> <legend><b>City: </b></legend>
  <select name="city" id="city">
    <option value="" disabled selected >Choose your City</option>
    <option value="Dhaka">Dhaka</option>
    <option value="Savar">Savar</option>
    <option value="Mymensingh">Mymensingh</option>
    <option value="Netrakona">Netrakona</option>
    <option value="Khulna">Khulna</option>
    <option value="Sylhet">Sylhet</option>
    <option value="Rangpur">Rangpur</option>
    <option value="Chattagram">Chattagram</option>
    <option value="Dinajpur">Dinajpur</option>
  </select>
  <span class="error">*<?php echo $cityErr;?></span>
  <br>
<p> <legend><b>Vehicle: </b></legend>
  <select name="vehicle" id="vehicle">
    <option value="" disabled selected >Choose your Vehicle</option>
    <option value="Bike">Bike</option>
    <option value="Cycle">Cycle</option>
    <option value="E-Bike">E-Bike</option>
  </select>
  <span class="error">*<?php echo $vehicleErr;?></span>
  <br>
       

        <fieldset>
            <legend>Gender</legend>  <span class="error">* <?php echo $genderErr;?></span>
            <input type="radio" id="male" name="gender"  value="male" <?php if (isset($gender)){ if ($gender === 'male'){ echo 'checked';}}?> >
            <label for="male">Male</label>

            <input type="radio" id="female" name="gender" value="female" <?php if (isset($gender)){ if ($gender === 'female'){ echo 'checked';}}?> >
            <label for="female">Female</label>

            <input type="radio" id="other" name="gender" value="other" <?php if (isset($gender)){ if ($gender === 'other'){ echo 'checked';}}?> >
            <label for="other">Other</label><br>
        </fieldset> <br>

            <legend>Date of Birth:</legend>  <span class="error">* <?php echo $dobErr;?></span>
            <input type="date" name="dob" value="<?php echo $dob;?>"> <br><br>

        <button type="submit"   name="submit" value="Register">Register</button><br />
        <?php
        if(isset($message))
        {
            echo $message;
        }
        ?>
    </form>
</div>
<br />
</div>
</body>
</p>
</p>
</form>
</div>
</div>
</body>
</fieldset>
</head>
<?php include 'templates/base2.php';?>
</html>