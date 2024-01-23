<?php

print_r($_POST);

$sql = "UPDATE client set name = ?, address = ?, zip_code = ?, phone = ?, email = ? WHERE id = ?";

echo "<br>$sql";
