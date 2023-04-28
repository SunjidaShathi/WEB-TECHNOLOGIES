<?php  
require_once 'riderInfo.php';

$users = fetchAllUsers();

    

?>
<?php
session_start();
include 'templates/nav2.php';?>
<!DOCTYPE html>
<html>
<head>
	 <title>Riders Information</title>
   <!-- Including jQuery is required. -->
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
   <!-- Including our scripting file. -->
   <script type="text/javascript" src="script.js"></script>
   <!-- Including CSS file. -->
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:#5D8896;">
	<!-- Search box. -->
   <input type="text" id="search" placeholder="Search" />
   <br>
   
   <!-- Suggestions will be displayed in below div. -->
   <div id="display"></div>

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




.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}


        .make-it-center{
            margin: auto;
            width: 50%;
        }
        .lefterr{
            margin-left: -10%;
       }
    table {
        border-collapse: collapse;
        width: 30%;
        background-color:#89CFF0;
        width: 80%;

    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    table.center {
  margin-left: auto; 
  margin-right: auto;
}

</style>

	

<br><br><table class="center">
    <h1 style="color:white; text-align: center;"><b>All the riders Information</b></h1>
	<thead>

		<tr>
			<th>Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Date of Birth</th>
			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $i => $user): ?>
       
			<tr>
				<td><a <?php echo $user['ID'] ?>><?php echo $user['Name'] ?></a></td>
				<td><a <?php echo $user['ID'] ?>><?php echo $user['Username'] ?></a></td>
				<td><a <?php echo $user['ID'] ?>><?php echo $user['Email'] ?></a></td>
				<td><a <?php echo $user['ID'] ?>><?php echo $user['Gender'] ?></a></td>
				<td><a <?php echo $user['ID'] ?>><?php echo $user['dob'] ?></a></td>
				
				
			</tr>
		<?php endforeach; ?>

	</tbody>
</table>
</body>
<?php include 'templates/base2.php';?>
</html>