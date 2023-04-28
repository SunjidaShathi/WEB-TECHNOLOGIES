<?php  
require_once 'OrderInfo.php';

$user = fetchUser($_GET['id']);
    
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>Name</th>
		<th>Username</th>
		<th>Email</th>
	</tr>
	<tr>
		<td><a href="showUser.php?id=<?php echo $user['ID'] ?>"><?php echo $user['Name'] ?></a></td>
		<td><?php echo $user['Username'] ?></td>
		<td><?php echo $user['Email'] ?></td>
	</tr>

</table>


</body>
</html>