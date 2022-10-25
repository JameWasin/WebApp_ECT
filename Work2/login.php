<?php
session_start();
if (isset($_SESSION['id'])) {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <h1 id="headTop">Webboard KakKak</h1>
        <?php include "nav.php"; ?><br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <?php if (isset($_SESSION['error'])) { ?>
                    <div class="alert alert-danger">
                        ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง
                    </div>
                <?php unset($_SESSION['error']); } ?>
                <div class="card text-dark bg-light">
                    <div class="card-header">เข้าสู่ระบบ</div>
                    <div class="card-body">
                        <form action="verify.php" method="POST">
                            <div class="from-group">
                                <label for="user">Login:</label>
                                <input type="text" name="user" class="form-control mt-2">
                            </div>
                            <div class="from-group mt-3 mb-3">
                                <label for="pass">Password:</label>
                                <input type="text" name="pass" class="form-control mt-2">
                            </div>
                            <center><button type="submit" class="btn btn-secondary btn-sm">
                                    Login</button></center>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div><br>

        <div id="headTop">
            ถ้ายังไม่ได้เป็นสมาชิก
            <a href="register.php">กรุณาสมัครสมาชิก</a>
        </div>
    </div>
</body>

</html>