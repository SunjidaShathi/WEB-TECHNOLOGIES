<!DOCTYPE html>
<html>
<head>
    <style>
        div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
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
    <title>Dashboard</title>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("p").toggle();
  });
});
</script>
    <body style="background-color:#5D8896;">

      <?php
session_start();
include 'templates/nav2.php';

// define variables and set to empty values
$userErr = $passErr = "";
$username = $password = "";
$errCount = 0;

if (isset($_SESSION['uname'])) {
    $ug = $_SESSION['ugroup'];
    echo "
    <h1 style='text-align: center; color: white'> Welcome to E-Commerce Management $ug System</h1>
    ";

}else{
    header('Location: login.php');
}

?>

<h2 align="center">Gallery</h2>
<button align="center" ><b>Hide & Show Details</b></button><br><br><br><br>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="pic1.jfif">
      <img src="pic1.jfif" alt="Forest" width="400" height="400">
    </a>
    <p class="desc">Dhaka City <br> Delivery Charge:60tk</p>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="pic2.jfif">
      <img src="pic2.jfif" alt="Forest" width="400" height="400">
    </a>
    <p class="desc">Savar City <br> Delivery Charge:70tk</p>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="pic3.jfif">
      <img src="pic3.jfif" alt="Northern Lights" width="600" height="400">
    </a>
    <p class="desc">Mymensingh City <br> Delivery Charge:90tk</p>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="pic4.jfif">
      <img src="pic4.jfif" alt="Mountains" width="600" height="400">
    </a>
    <p class="desc">Netrakona City <br> Delivery Charge:95tk</p>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="pic5.jfif">
      <img src="pic5.jfif" alt="Forest" width="400" height="400">
    </a>
    <p class="desc">Khulna City <br> Delivery Charge:100tk</p>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="pic6.jpg">
      <img src="pic6.jpg" alt="Forest" width="400" height="400">
    </a>
    <p class="desc">Sylhet City <br> Delivery Charge:120tk</p>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="pic7.jfif">
      <img src="pic7.jfif" alt="Northern Lights" width="600" height="400">
    </a>
    <p class="desc">Rangpur City <br> Delivery Charge:100tk</p>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="pic8.jfif">
      <img src="pic8.jfif" alt="Mountains" width="600" height="400">
    </a>
    <p class="desc">Chattagram City <br> Delivery Charge:160tk</p>
  </div>
</div>

<div class="clearfix"></div>

<div style="padding:6px;">
</body>

</head>
<?php include 'templates/base2.php';?>
</html>

