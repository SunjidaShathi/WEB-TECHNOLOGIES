<?php 

require_once '../model/model.php';

if (deleteOrder($_GET['id'])) {
    header('Location: ../showAllOrders.php');
}

 ?>