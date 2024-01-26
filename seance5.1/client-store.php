<?php
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location:client-index.php');
    exit;
}
require_once('db/connex.php');

foreach($_POST as $key => $value){
    $$key=$value;
}

$sql = "INSERT INTO client (name, address, phone, zip_code, email) VALUES (?,?,?,?,?)";

$stmt = $pdo->prepare($sql);
if($stmt->execute(array($name, $address, $phone, $zip_code, $email))){
    $id = $pdo->lastInsertId();
   header('location:client-show.php?id='.$id);
}else{
    print_r($stmt->errorInfo());
}
?>