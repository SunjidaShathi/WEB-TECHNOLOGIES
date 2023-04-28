<?php
require_once ('model/model.php');

function getAllRiderss(){
    return getAllRidersFromDB();
}

function createNewRider($uri, $username, $orderQty){
    return createRidererDB($uri, $username, $orderQty);
}

?>