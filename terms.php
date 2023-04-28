<?php
session_start();
include 'templates/nav2.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>TERMS AND CONDITIONS</title>
</head>
<style>
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
   
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <body style="background-color:#5D8896;">
<div class="text-center">

    <h2 style="color:skyblue; text-align: left; font-size:30px;"> TERMS AND CONDITIONS </h2>
    <a href="index.php"><h4 align="right" >Back</h4></a>
<body>
    <h4><p style="text-align: center; font-size:18px;"> E-Commerce Management System </p></h4>
    <p>Thank you for visiting the Terms and Conditions page of our website. This page describes our legal agreement (the "Agreement") governing your use of this website.</p>

    <h3><p style="font-size:18px;"> Your Acceptance </p></h3>
    <p>BY USING AND/OR VISITING THE WEBSITE, YOU SIGNIFY YOUR ASSENT TO BOTH THESE TERMS AND CONDITIONS OF WEBSITE ACCESS AND THE TERMS AND CONDITIONS, WHICH ARE PUBLISHED AT OUR WEBSITE AND WHICH ARE INCORPORATED HEREIN BY REFERENCE. IF YOU DO NOT AGREE TO ANY OF THESE TERMS, YOU SHOULD NOT USE THE WEBSITE.</p>
    <h3><p style="font-size:18px;"> Website Access </p></h3>
    <p>We require that by accessing the Site, you confirm that you can form legally binding contracts and therefore you confirm that you are at least 18 years of age or are accessing the Site under the supervision of a parent or legal guardian. We grant you a non-transferable, revocable and non-exclusive license to use the Site, in accordance with the Terms and Conditions described herein, for the purposes of shopping for personal items and services as listed to be sold on the Site. Commercial use or use on behalf of any third party is prohibited, except as explicitly permitted by us in advance.Any breach of these Terms and Conditions shall result in the immediate revocation of the license granted in this paragraph without notice to you.
</p>
    <h3><p style="font-size:18px;"> Copyright </p></h3>
    <p>The original content of the Website, including without limitation the text, software, graphics, photos, and images are owned by or licensed to e-commerece management system, subject to copyright. All intellectual property rights, whether registered or unregistered, in the Site, information content on the Site and all the website design, including, but not limited to text, graphics, and their selection and arrangement, and all software compilations, underlying source code and software shall remain our property.</p>
 </fieldset>

</body>
<form style="text-align:center;" method="POST" action="terms.html">
</form>
<?php
if (!isset($_SESSION['uname'])) {
}
?>
<?php include 'templates/base2.php';
?>
</div>
</body>
</html>
</html>