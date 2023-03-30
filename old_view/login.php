<?php
    include "../controller/controller.php";
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        // VV(cek apakah email ada di database atau tidak)VV
        if (sql("SELECT * FROM users where user_email='$username' or user_name='$username'")) {
            // mengambil data dari databse
            $data=query("SELECT * FROM users where user_email='$username' or user_name='$username'");
            if($password===$data['user_password']){
                header("Location: suc.php");
            }

            
        }else{
            echo "<cript> alert('paswsalah')</script>";
            header("Location: login.php");}
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>LOGIN</h1>
    <form action="" method="post">
        <label>
            username
            <input type = "username" name = "username">
        </label>
        <label>
            password
            <input type = "password" name = "password">
        </label>
        <button type="submit" name="submit">LOGIN</button>
    </form>
</body>
</html>