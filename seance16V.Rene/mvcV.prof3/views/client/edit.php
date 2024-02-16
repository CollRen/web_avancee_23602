<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Edit</title>
    <link rel="stylesheet" href="{{asset}}/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Client Edit</h2>
        <form method="post">
            <label>Name
                <input type="text" name="name" value="{{ client.name }}">
            </label>
            <label>Address
                <input type="text" name="address" value="{{ client.address}}">
            </label>
            <label>Zip Code
                <input type="text" name="zip_code" value="{{ client.zip_code}}">
            </label>
            <label>Phone
                <input type="text" name="phone" value="{{ client.phone}}">
            </label>
            <label>email
                <input type="email" name="email" value="{{ client.email}}">
            </label>
            <input type="submit" class="btn" value="Update">
        </form>
    </div>
</body>
</html>