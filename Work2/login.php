<?php
session_start();
if (isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <h1 id="headTop">Webboard KakKak</h1>
    <hr><br>
    <form action="verify.php" method="post">
    <table id="loginTable">
        <tr>
            <td colspan="2" id="tableHead">เข้าสู่ระบบ</td>
        </tr>
        <tr>
            <td>Login</td>
            <td><input type="text" name="user" size="70"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="pass" size="70"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Login"></td>
        </tr>
    </table></form><br>
    <div id="headTop">
        ถ้ายังไม่ได้เป็นสมาชิก
        <a href="register.php">กรุณาสมัครสมาชิก</a>
    </div>

</body>

</html>