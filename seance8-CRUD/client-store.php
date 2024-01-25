<?php

require_once('classes/CRUD.php');
$crud = new CRUD;
$insert = $crud->insert('client', $_POST);

print_r($insert);

$fields = implode(', ',  array_keys($insert));

echo "<br><br>";

echo $fields;

echo "<br><br>";
echo  $sql = "INSERT INTO client (name, address, zip_code, phone, email) VALUES (:name, :address, :zip_code, :phone, :email)";
echo "<br><br>";
?>

name, address, zip_code, phone, email,