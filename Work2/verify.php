<?php
$user = $_POST['user'];
$pass = $_POST['pass'];
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
        } elseif ($user == "member" && $pass == "mem1234") {
            echo "ยินดีต้อนรับคุณ MEMBER <br>";
        } else {
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง <br>";
        }

        ?>
            <a href="index.php">กลับไปยังหน้าหลัก</a>
    </div>

</body>

</html>