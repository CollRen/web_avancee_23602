{{ include('layouts/header.php', {title: 'Registration'})}}
<div class="container">
    {% if errors is defined %}
    <div class="error">
        <ul>
        {% for error in errors %}
            <li>{{ error }}</li>
        {% endfor %}
        </ul>
    </div>
    {% endif %}
    <form method="post">
        <h2>Autehtification</h2>

        <label>Username
            <input type="email" name="username" value="{{ user.username}}">
        </label>
        <label>Password
            <input type="password" name="password">
        </label>

       
        </label>
        <input type="submit" class="btn" value="Save">
    </form>
</div>
{{ include('layouts/footer.php')}}