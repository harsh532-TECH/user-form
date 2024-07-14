<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER AND LOGIN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="signUp" style="display: none;">
        <h1 class="form-title">REGISTER</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fname" id="fname" placeholder="firstname" required>
                <label for="fname">firstname</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lname" id="lname" placeholder="lastname" required>
                <label for="lname">lastname</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="email" required>
                <label for="email">email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="password" required>
                <label for="password">password</label>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signUp">
        </form>
        <p class="or">
            ---------------or---------------------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Already have an account?</p>
            <button id="signInbutton">Sign In</button>
        </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="email" required>
                <label for="email">email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="password" required>
                <label for="password">password</label>
            </div>
            <p class="recover">
                <a href="#">Recover password</a>
            </p>
            <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i classfab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Don't have an account yet?</p>
            <button id="signUpbutton">Sign Up</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>

