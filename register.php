<?php
include('config.php')
?>

<html>

<head>
    <title>
        Sign Up
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="header">
        <h2>Sign Up</h2>
    </div>
    <form method="post" action="register.php">
        <?php include('error.php'); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username ?>">
        </div>
        <div class="input-group">
            <label>Nama</label>
            <input type="text" name="nama">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email ?>">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <label for="level">Jenis User</label>
            <select id="level" name="level">
                <option value="Admin">Admin</option>
                <option value="User">User</option>
            </select>
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Sign Up</button>
        </div>
        <p>
            Already have an account? <a href="login.php">Sign In</a>
        </p>
    </form>
</body>

</html>
