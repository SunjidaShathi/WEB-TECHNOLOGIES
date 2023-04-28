<link rel="stylesheet" type="text/css" href="css/nav.css">



<script type="text/javascript" src="assets/js/searcher.js"></script>
<div class="topnav">
    <a class="active" href="./index.php">Home</a>

    <?php
    if (isset($_SESSION['uname'])) {
        if ($_SESSION['ugroup']!=='Subscriber') {
            $sg = $_SESSION['ugroup'];
            echo "
            <div class='dropdown'>
                    <button class='dropbtn'>$sg Panel
            ";
            echo '
                  <!--i class="fa fa-caret-down"></i-->
                  <i class=""></i>
                    </button>
                    <div class="dropdown-content">
                      <a href="./dashboard.php">Dashboard</a>
                     
                      <a href="./showAllRiders.php">Accounts</a>
                      <a href="./view_profile.php">View Profile</a>
                      <a href="./edit_profile.php">Edit Profile</a>
                      <a href="./change_password.php">Change Password</a>
                      <a href="../tough/showAllorders.php">Delivery History</a>
                      <a href="./logout.php">Logout</a>
                    </div>
                  </div>
                 
            ';
        } else {
            echo '
            <div class="dropdown">
                <button class="dropbtn">User Panel
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="./dashboard.php">Dashboard</a>
                 
                  <a href="./view_profile.php">View Profile</a>
                  <a href="./edit_profile.php">Edit Profile</a>
                  
                  <a href="/change_password.php">Change Password</a>
                  <a href="./view/logout.php">Logout</a>
                </div>
              </div>
       <a href="./view/logout.php">Logout</a>
       <a href="#contact">Contact</a>
       <a href="#about">About</a>
      
       
      ';
        }
    } else {
        echo '
       <a href="./login.php">Login</a>
       <a href="./contact.php">Contact</a>
       <a href="./privacy.php">Privacy Policy</a>
       <a href="./about.php">About</a>
      ';
    }
    ?>

</div>
<div id="search_res" class="search_res_cl" style=""></div>

