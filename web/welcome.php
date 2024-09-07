<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 50px;
        }
        .login-table {
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .login-table td {
            padding: 10px;
        }
        .login-table input[type="text"], .login-table input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-table input[type="submit"] {
            background: #5cb85c;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-table input[type="submit"]:hover {
            background: #4cae4c;
        }
    </style>
</head>
<body>

<table class="login-table">
    <tr>
        <td colspan="2"><h2>Login</h2></td>
    </tr>
    <tr>
        <td>Username:</td>
        <td><input type="text" name="username" placeholder="Username" required></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><input type="password" name="password" placeholder="Password" required></td>
    </tr>
    <tr>
        <td colspan="2" style="text-align:center;"><input type="submit" value="Login"></td>
    </tr>
</table>

</body>
</html>
