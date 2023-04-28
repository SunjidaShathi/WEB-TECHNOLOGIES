<?php
session_start();
include 'templates/nav2.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>PRIVACY POLICIES</title>
</head>

   <p><p> <h2 style="color:skyblue; text-align: left; font-size:30px;"> PRIVACY POLICIES </h2>
    <a href="index.php"><h4 align="right" >Back</h4></a>
<body style="background-color:#5D8896;">

    
    
    <h4><p style="text-align: center; font-size:18px;"> E-Commerce Management System </p></h4>
    <p ><h3 style="color:white;"> Welcome to the E-commerece management system (the "Site"), We respect your privacy and want to protect your personal information. To learn more, please read this Privacy Policy.
This Privacy Policy explains how we collect, use and (under certain conditions) disclose your personal information. This Privacy Policy also explains the steps we have taken to secure your personal information. Finally, this Privacy Policy explains your options regarding the collection, use and disclosure of your personal information. By visiting the Site directly or through another site, you accept the practices described in this Policy.
Data protection is a matter of trust and your privacy is important to us. We shall therefore only use your name and other information which relates to you in the manner set out in this Privacy Policy. We will only collect information where it is necessary for us to do so and we will only collect information if it is relevant to our dealings with you.
We will only keep your information for as long as we are either required to by law or as is relevant for the purposes for which it was collected.
We will cease to retain your personal data, or remove the means by which the data can be associated with you, as soon as it is reasonable to assume that such retention no longer serves the purposes for which the personal data was collected, and is no longer necessary for any legal or business purpose.
You can visit the Site and browse without having to provide personal details. During your visit to the Site you remain anonymous and at no time can we identify you unless you have an account on the Site and log on with your user name and password.</p>

  </fieldset>

</body>
<form style="text-align:center;" method="POST" action="privacy.php">
</form>
<?php
if (!isset($_SESSION['uname'])) {
}
?>
<?php include 'templates/base2.php';
?>
</html>