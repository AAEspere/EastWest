<?php 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header('location: index.php');
    exit;
}
include('server.php');
?>
<html lang = "en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Name of the website-->
    <!--This is what the tab says-->
    <head>
        <title> EastWest Health Services </title>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="CSS/web.css">
        <link rel="stylesheet" href="CSS/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/slick/slick.css">
        <link rel="stylesheet" href="CSS/slick/slick-theme.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
        <div id = "registerLogo" >
            <a href = "index.html"><img src = "eastwest/eastwestRed.png" class = "center" id = "registerPic"></a>
        </div>
        <div id = "wrapper">
            <div class = "registerPage">
                <form action = "login.php" method = "POST">
                    <h1>Register</h1>
                    <p>Fill out the following parameters:</p>

                    <label for = "email">Email: </label>
                    <input type = "text" placeholder = "Email" name = "email" id = "email" required>

                    <label for = "password">Password: </label>
                    <input type = "password" placeholder = "Password" name = "pass" id = "pass" required>

                    <p>Not a member? <a href = "signUp.php"> Sign Up </a></p>
                    <input type = "submit" value = "submit" name = "login_user">
                </form>
            </div>
        </div>
        <footer>
            <p><a href = "tel:586-582-9690"><i class = "fa fa-phone"></i> (586)582-9690</a> &nbsp-&nbsp <a href = "mailto:eastwesthomecare@gmail.com"><i class = "fa fa-envelope"></i> eastwesthomecare@gmail.com</a> <br>
            © 2021 EastWest Health Services</p>
        </footer>
</html>