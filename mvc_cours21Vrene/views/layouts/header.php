<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ title }}</title>
    <link rel="stylesheet" href="{{ asset }}/css/style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{base}}/client">Clients</a></li>
            
            {% if session.privilege_id == 1 %}
            <li><a href="user/create">Users</a></li>
            {% endif %}
            
            
            {% if guest %}
            <li><a href="{{base}}/login">Login</a></li>
            {% else %}
            
            <li><a href="{{base}}/logout">Logout</a></li>
            {% endif %}
            
            <li>La session est: {{ session.privilege_id }}</li>
            
        </ul>
    </nav>
    <main>

    {% if guest is empty %}
    Bienvenu {{ session.user_name }}, 
    {% endif %} 
        
    