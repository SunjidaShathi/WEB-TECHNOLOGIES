<?php  
require_once 'orderInfo.php';
session_start();

$users = fetchAllUsers();

    

?>

<!DOCTYPE html>
<html>
<head>
	 <title>Delivery History</title>
   <!-- Including jQuery is required. -->
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
   <!-- Including our scripting file. -->
   <script type="text/javascript" src="script.js"></script>
   <!-- Including CSS file. -->
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:#5D8896;">
	<!-- Search box. -->
   
   <br>
   
   <!-- Suggestions will be displayed in below div. -->
   <div id="display"></div>

<style>
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
	<h1 style="color:white; text-align: center;" ><b>Delivery History</b></h1>
	<thead>
		<tr>
			<th>Customer Name</th>
			<th>Product</th>
			<th>Delivery Place</th>
			<th>Price</th>
			
			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $i => $user): ?>
       
			<tr>
				<td><a <?php echo $user['ID'] ?>><?php echo $user['name'] ?></a></td>
				<td><a <?php echo $user['ID'] ?>><?php echo $user['brand'] ?></a></td>
				<td><a <?php echo $user['ID'] ?>><?php echo $user['place'] ?></a></td>
				<td><a <?php echo $user['ID'] ?>><?php echo $user['price'] ?></a></td>
				
				
				
			</tr>
		<?php endforeach; ?>
        <?php echo '<b><a href="../view/dashboard.php"> Back </a></b> <br><br>'; ?>

	</tbody>
</table>
</body>
</html>