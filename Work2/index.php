<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Webboard KakKak</title>
</head>

<body>
    <h1 id="headTop">Webboard KakKak</h1>
    <hr>
    หวดหมู่:
    <select name="category">
        <option value="all">--ทั้งหมด--</option>
        <option value="general">เรื่องทั่วไป</option>
        <option value="learn">เรื่องเรียน</option>
    </select>
    <a href="login.html" id="loginButton">เข้าสู่ระบบ</a>
        <ul>
            <?php for($i=1;$i<=10;$i++){?>
            <li ><a href="post.php?id=<?php echo $i?>">กระทู้ที่ <?php echo $i?></a></li>
            <?php }?>
        </ul>
</body>

</html>