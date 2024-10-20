<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <header>
        <h2 class="logo">Welcome</h2>
         <nav class="navigation">
        <a href="#">Home</a>
        <a href="#">About</a>
        <button class="btnLogin-popup">Login</button>
    </nav>
    </header>
    <div class="wrapper" id = "login">
        <div class="form-box login">
            <h2>Login</h2>
            <form method = "post" action="register.php">
                <div class="input-box">
                    <input type="email" id ="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <input type="password" id = "password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn" name = "login" >Login</button>
                <div class="login-resgister">
                    <p>Don't have an account?<a href="#" class="register-link"> Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register" id="register">
            <h2>Register</h2>
            <form method="post" action="register.php">
                <div class="input-box">
                    <input type="email" id= "email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <input type="tel" id = "mobile" required >
                    <label>Mobile No.</label>
                </div>
                <div class="input-box">
                    <input type="password" id = "password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Agree to Terms & Conditions</label>
                    <a href="#"></a>
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="login-resgister">
                    <p>Already have an account?<a href="#" class="login-link"> Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>