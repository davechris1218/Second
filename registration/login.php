<?php include('server.php') ?>
<!DOCTYPE html>

<html>

<head>
    <title>Login PHP and MYSQL</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/registration/style.css">
</head>

<body>
    <div class="header">
        <h2>Login to an existing account</h2>
    </div>

    <form method="post" action="login.php">
        <?php include('errors.php'); ?>

        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>

        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>

        <p><a href="register.php">Register a new account</a></p>

    </form>

</body>

</html>