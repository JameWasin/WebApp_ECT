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
    <title>Register</title>
</head>

<body>
    <h1 id="headTop">สมัครสมาชิก</h1>
    <hr><br>
    <table id="loginTable">
        <tr>
            <td colspan="2" id="tableHead">กรอกข้อมูล</td>
        </tr>
        <tr>
            <td>ชื่อบัญชี:</td>
            <td><input type="text" name="userName" size="70"></td>
        </tr>
        <tr>
            <td>รหัสผ่าน:</td>
            <td><input type="text" name="pass" size="70"></td>
        </tr>
        <tr>
            <td>ชื่อ-นามสกุล:</td>
            <td><input type="text" name="fullName" size="70"></td>
        </tr>
        <tr>
            <td>เพศ:</td>
            <td><input type="radio" name="gender" value="m">ชาย<br>
                <input type="radio" name="gender" value="f">หญิง<br>
                <input type="radio" name="gender" value="o">อื่นๆ
            </td>
        </tr>
        <tr>
            <td>อีเมล:</td>
            <td><input type="email" name="email" size="70"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="สมัครสมาชิก"></td>
        </tr>
    </table><br>
</body>

</html>