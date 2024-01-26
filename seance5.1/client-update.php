<?php

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location:client-index.php');
    exit;
}
require_once('db/connex.php');

foreach($_POST as $key => $value){
    $$key=$value;
}

$sql = "UPDATE client SET name = ?, address = ?, phone = ?, zip_code = ?, email = ? WHERE id = ?";

$stmt = $pdo->prepare($sql);
if($stmt->execute(array($name, $address, $phone, $zip_code, $email, $id))){
    header('location:client-index.php');
}else{
    print_r($stmt->errorInfo());
}

?>