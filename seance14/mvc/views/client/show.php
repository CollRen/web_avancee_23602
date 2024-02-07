<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Show</title>
    <link rel="stylesheet" href="{{asset}}/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Client Show</h2>
        <hr>
        <p><strong>Name:</strong> {{ client.name }}</p>
        <p><strong>Address:</strong> {{ client.address }}</p>
        <p><strong>Zip Code:</strong> {{ client.zip_code }}</p>
        <p><strong>Phone:</strong> {{ client.phone }}</p>
        <p><strong>Email:</strong> {{ client.email }}</p>
        <a href="client-edit.php?id=<?= $id;?>" class="btn">Edit</a>
        <form action="client-delete.php" method="post">
            <input type="hidden" name="id" value="<?= $id;?>">
            <button class="btn red">Delete</button>
        </form>
    </div>
</body>
</html>