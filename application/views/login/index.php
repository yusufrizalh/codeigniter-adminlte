<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
</head>
<body>
    <h1>Login Page</h1>

    <form method="POST" action="<?php echo base_url('login/login_action'); ?>">
        <label for="username">Username</label> <br> 
        <input type="text" name="username"> <br>

        <label for="password">Password</label> <br>
        <input type="password" name="password"> <br> 

        <input type="submit" value="Login">
    </form>
</body>
</html>