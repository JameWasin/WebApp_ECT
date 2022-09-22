<?php
session_start();
?>

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
    หมวดหมู่:
    <select name="category">
        <option value="all">--ทั้งหมด--</option>
        <option value="general">เรื่องทั่วไป</option>
        <option value="learn">เรื่องเรียน</option>
    </select>

    <div id="loginButton">
        <?php if (isset($_SESSION['id'])) { ?>
            ผู้ใช้งานระบบ: <?php echo $_SESSION['username'] ?>&nbsp &nbsp
            <a href="logout.php">ออกจากระบบ</a>
        <?php } else { ?>
            <a href="login.php">เข้าสู่ระบบ</a>
        <?php } ?>
    </div>
    <br>
    <a href="newpost.php">สร้างกระทู้ใหม่</a>

    <ul>
        <?php for ($i = 1; $i <= 10; $i++) { ?>
            <li>
                <a href="post.php?id=<?php echo $i ?>">กระทู้ที่ <?php echo $i ?></a>&nbsp
                <?php if (isset($_SESSION['id']) && $_SESSION['role'] == "a") { ?>
                <a href="delete.php?id=<?php echo $i ?>">ลบ</a>
                <?php } ?>
            </li>
        <?php } ?>
    </ul>
</body>

</html>