<!DOCTYPE html>
<html>
<head>
<title>ROCHAO - Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://www.rochao.xyz/styles/Login/main.css">
<script type="text/javascript" src="http://www.rochao.xyz/scripts/Login/loginPage.js"></script>
</head>
<body>
    <?php include '../Header.php';?>
    <div class = "Main">
        <h1 class="TITLE"> Log In </h1>
        <form class="Form" method="POST">
            <label for="Username">Username:</label>
            <input type = "text" id="Username" name="Username"> <br>
            <label for="Username" class ="PasswordButton">Password:</label>
            <input type = "password" id = "Password" name = "Password" class ="PasswordButton"> <br>
            <label for="PassToggle" class = "PasswordToggle">Show Your Password</label>
            <input type = "checkbox" onclick="PasswordToggle()" name ="PassToggle" class = PasswordToggle>
            <input type = "submit" value="Log In" class="SubmitButton">
        </form>
        <a href="http://www.rochao.xyz/Login/ResetPasswordRequest/" class="ForgotYourPass">Forgot Your Password?</a>
    <div class = "NewUser">
        <h1 class = "NewUserTitle">New User?</h1>
        <p class="NewUserText">You need an account to play ROCHAO.</p>
        <p class="NewUserText">If you aren't a ROCHAO member then <a href="http://www.rochao.xyz/Login/NewAge/">register.</a> It's easy and we do <em>not</em> share your personal 
            <br> information with anybody.</p>
    </div>
    </div>
    <?php include '../Footer.php';?>

</body>