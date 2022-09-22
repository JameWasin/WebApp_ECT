<?php
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];
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
    <title>Verify</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1 id="headTop">Webboard KakKak</h1>
    <hr><br>

    <div id="headTop">
        <?php
        if ($user == "admin" && $pass == "ad1234") {
            echo "ยินดีต้อนรับคุณ ADMIN <br>";
            $_SESSION['username'] = "admin";
            $_SESSION['role'] = "a";
            $_SESSION['id'] = session_id();
        } elseif ($user == "member" && $pass == "mem1234") {
            echo "ยินดีต้อนรับคุณ MEMBER <br>";
            $_SESSION['username'] = "member";
            $_SESSION['role'] = "m";
            $_SESSION['id'] = session_id();
        } else {
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง <br>";
        }

        ?>
            <a href="index.php">กลับไปยังหน้าหลัก</a>
    </div>

</body>

</html>