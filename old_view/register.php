<?php
include "../controller/controller.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>register</title>
</head>
<body>
    <form action="">
        <label>
            username
            <input type = "text" name = "user_name">
        </label>
        <label>
            No.Wa
            <input type = "text" name = "user_num">
        </label>
        <label>
            Email
            <input type = "email" name = "user_email">
        </label>
        <label>
            password
            <input type = "password" name = "user_password">
        </label>
        <label>
            confirm password
            <input type = "password" name = "confirm_password">
        </label>
        <label>
            sebagai
            <input type = "text" name = "user_role">
        </label>
        <label>
            nama sekolah
            <input type = "text" name = "user_school">
        </label>
    </form>
</body>
</html>