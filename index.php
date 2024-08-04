<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        require_once("config/database.php");
        require_once("classes/Controllers/AuthController.php");
        require_once("classes/AuthView.php");

        $login = new AuthView();
        if($login->isUserLoggedIn() == true) {
            header("Location: home.php");
        } else {
            include("views/auth/login.php");
        }   
    ?>
</body>
</html>