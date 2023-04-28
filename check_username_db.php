<?php
$Username = htmlspecialchars($_GET["Username"]);
require_once '../model/model.php';
$arra = getUser($Username);
if (!$arra){
    echo "<span style='color: green'> Username available</span>";
}else if($arra["Username"] === $Username){
    echo "<span style='color: red'> Username taken! Choose another one</span>";
} else{
    echo "<span style='color: green'> Username available</span>";
}
?>