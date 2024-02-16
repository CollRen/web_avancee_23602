<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Create</title>
    <link rel="stylesheet" href="{{asset}}/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Client Create</h2>
        <form method="post">
            <label>Name
                <input type="text" name="name">
            </label>
            {% if errors.name is defined %}
                <span class="error">{{ errors.name }}</span>
            {% endif %}
            <label>Address
                <input type="text" name="address">
            </label>
            {% if errors.address is defined %}
                <span class="error">{{ errors.address}}</span>
            {% endif %}
            <label>Zip Code
                <input type="text" name="zip_code">
            </label>
            {% if errors.zip_code is defined %}
                <span class="error">{{ errors.zip_code}}</span>
            {% endif %}
            <label>Phone
                <input type="text" name="phone">
            </label>
            {% if errors.phone is defined %}
                <span class="error">{{ errors.phone}}</span>
            {% endif %}
            <label>email
                <input type="email" name="email">
            </label>
            {% if errors.email is defined %}
                <span class="error">{{ errors.email}}</span>
            {% endif %}
            <input type="submit" class="btn" value="Save">
        </form>
    </div>
</body>
</html>