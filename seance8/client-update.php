<?php
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location:client-index.php');
    exit;
}
//print_r($_POST);
extract($_POST);
require_once('db/connex.php');

$sql = "UPDATE client set name = ?, address = ?, zip_code = ?, phone = ?, email = ? WHERE id = ?";

$stmt = $pdo->prepare($sql);
$stmt->execute(array($name, $address, $zip_code, $phone,  $email, $id));

$count = $stmt->rowCount();
if($count==1){
    header("location:client-index.php");
}else{
    print_r($stmt->errorInfo());
}

