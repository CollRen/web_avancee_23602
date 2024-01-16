<?php
require_once('db/connex.php');
$sql="SELECT * FROM client ORDER BY name";
$stmt = $pdo->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Client</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>phone</th>
                <th>Zip Code</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($stmt as $row){
            ?>
            <tr>
                <td><?= $row['name']?></td>
                <td><?= $row['address']?></td>
                <td><?= $row['phone']?></td>
                <td><?= $row['zip_code']?></td>
                <td><?= $row['email']?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>