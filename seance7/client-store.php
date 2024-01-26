<?php
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location:client-index.php');
    exit;
}
//print_r($_POST);
// var_dump($_POST);

// foreach($_POST as $key=>$value){
//     $$key = $value;
// }

extract($_POST);

require_once('db/connex.php');

$sql = "INSERT INTO client (name, address, zip_code, phone,  email) VALUES (?, ?, ?, ?, ?)";

$stmt = $pdo->prepare($sql);
if($stmt->execute(array($name, $address, $zip_code, $phone,  $email))){
    //echo $pdo->lastInsertId();
    $id = $pdo->lastInsertId();
    header("location:client-show.php?id=$id");
}else{
    print_r($stmt->errorInfo());
}







?>