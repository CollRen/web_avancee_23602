<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link rel="stylesheet" href="<?= ASSET; ?>/css/style.css">
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
            foreach($select as $client){
        ?>
            <tr>
                <td><?= $client['name'];?></td>
                <td><?= $client['address'];?></td>
                <td><?= $client['phone'];?></td>
                <td><?= $client['zip_code'];?></td>
                <td><?= $client['email'];?></td>
            </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
    <a href="client-create.php" class="btn" >Client Create</a>
</body>
</html>