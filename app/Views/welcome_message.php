<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .error {
            color: red;
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login" method="post">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="user@site.com" required><br><br>

            <label for="password">Password :</label>
            <input type="password" id="password" name="password" placeholder="p12345" required><br><br>


            <button type="submit">Login</button>
        </form>
    </div>


</body>
</html>
