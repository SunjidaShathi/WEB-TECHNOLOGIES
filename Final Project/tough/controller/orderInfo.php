<?php 

require_once ('model/model.php');

function fetchAllOrders(){
	return showAllOrderss();

}
function fetchOrder($id){
	return showOrder($id);

}