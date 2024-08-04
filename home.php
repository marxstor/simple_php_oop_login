<?php
session_start();

if(!isset($_SESSION["user_login_status"])) {
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=	, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    welcome user <?php echo $_SESSION['email']?>

    <br/>
    <br/>
    <br/>

    <a href = "login.php?logout">Logout</a>
</body>
</html>
