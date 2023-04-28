<?php 

require_once 'db_connect.php';

function registerUser($data){
	$conn = db_conn();
    $selectQuery = "INSERT into try_db (Name, Email, Username, Password, City, Vehicle, Gender, dob)
VALUES (:name, :email, :username, :password, :city, :vehicle, :gender, :dob)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':username' => $data['username'],
        	':password' => $data['password'],
            ':city' => $data['city'],
            ':vehicle' => $data['vehicle'],
        	':gender' => $data['gender'],
        	':dob' => $data['dob'],
        	
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function getUser($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM try_db where Username = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$username]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}
function getUserByEmail($email){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM try_db where Email = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$email]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function updateUser($username, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE try_db set Name = ?, Email = ?, Gender = ?, dob = ? where Username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['Name'], $data['Email'], $data['Gender'], $data['dob'], $username
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function getAllUser(){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM try_db";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}
function showAllUsers(){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM try_db';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showUser($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM try_db where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}
function updatePassword($username, $newPassword){
    $conn = db_conn();
    $selectQuery = "UPDATE try_db set Password = ? where Username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $newPassword, $username
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}