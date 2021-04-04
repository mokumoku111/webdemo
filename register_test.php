<?php 
    session_start();
    include('connect.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="header">
        <h2>Register</h2>
    </div>

    <form action="register_db.php" method="post">
        <?php include('errors.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="input-group">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname">
        </div>
        <div class="input-group">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname">
        </div>
        <div class="input-group">
            <label for="phonenumber">Phone Number</label>
            <input type="text" name="phonenumber">
        </div>
        <div class="input-group">
            <label for="idcard">ID Card</label>
            <input type="text" name="idcard">
        </div>
        <div class="input-group">
            <label for="age">Age</label>
            <input type="text" name="age">
        </div>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        
        <div class="input-group">
            <button type="submit" name="reg_user" class="btn">Register</button>
        </div>
        <a href="login.php">Sign in</a>
    </form>

</body>
</html>