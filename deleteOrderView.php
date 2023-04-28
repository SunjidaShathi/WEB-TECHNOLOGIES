<?php
include "nav.php";
require_once 'controller/orderInfo.php';

$order = fetchOrder($_GET['id']);
echo '<p><b>Delete Order</b></p>';
echo '<p>name: ' . $order['name'] . '</p>';
echo '<p>place: ' . $order['place'] . '</p>';
echo '<p>price: ' . $order['price'] . '</p>';





?>
<td>
<a href="controller/deleteOrder.php?id=<?php echo $order['ID'] ?>">Delete</a></td>