<?php
include "../controller/controller.php";
if(isset($_POST['submit'])){
    $nama=$_POST['user_name'];
    $num=$_POST['user_num'];
    $email=$_POST['user_email'];
    $password=$_POST['user_password'];
    $confirm=$_POST['confirm_password'];
    $role=$_POST['user_role'];
    $school=$_POST['user_school'];

    // cek apakahemail sudah terdaftar atau belum
    if(sql("select user_email from users where user_email='email'")){
        echo "<cript> alert('silahkan login')</script>";
        return false;
    }

}
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
    <h1>register</h1>
    <form action="">
        <label>
            username
            <input type="text" name="user_name">
        </label>
        <label>
            No.Wa
            <input type="text" name="user_num">
        </label>
        <label>
            Email
            <input type="email" name="user_email">
        </label>
        <label>
            password
            <input type="password" name="user_password">
        </label>
        <label>
            confirm password
            <input type="password" name="confirm_password">
        </label>
        <label>
            sebagai
            <select name="user_role">
                <option value="1">siswa-SD</option>
                <option value="2">siswa-SMP</option>
                <option value="3">siswa-SMA</option>
                <option value="6">pelajar-MAHASISWA</option>
            </select>
        </label>
        <label>
            nama sekolah
            <input type="text" name="user_school">
        </label>
        <button type="submit" name="submit">submit</button>
    </form>
</body>

</html>