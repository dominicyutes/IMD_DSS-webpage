<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <div class="_body">
        <div class="login-container">
            <h2>IMD_DSS LOGIN</h2>
            <?php echo form_open('login/login'); ?>

            <div class="input-container">
                <label for="username"><i class="fa-solid fa-user"></i> Username</label>
                <input type="text" id="username" placeholder="Enter your username" />
            </div>
            <div class="input-container">
                <label for="password"><i class="fas fa-lock"></i> Password</label>
                <input type="password" id="password" placeholder="Enter your password" />
            </div>
            <div class="btn-container">
                <button type="submit" class="btn" value="Login">LOGIN</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</body>

</html>