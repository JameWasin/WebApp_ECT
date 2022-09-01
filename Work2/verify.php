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
        <?php echo "เข้าสู่ระบบด้วย <br>"; ?>
        <?php echo "Login = $user <br>"; ?>
        <?php echo "Password = $pass"; ?>
    </div>

</body>

</html>