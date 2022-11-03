<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard KakKak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <script>
        function myFunction(){
            let r=confirm("ต้องการลบจริงหรือไม่");
            return r;
        }
    </script>
</head>
<body>
<h1 style="text-align:center">Webboard KakKak</h1>
    <div class="container">
        <?php include "nav.php"; ?><br>
        <div class="d-flex justify-content-between">
            <div>
                <label>หมวดหมู่: </label>
                <span class="dropdown">
                    <button class="btn btn-light dropdown-toggle btn-sm" type="button" id="dropdown2" data-bs-toggle="dropdown" aria-expanded="false">--ทั้งหมด--</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdown2">
                        <li><a href="#" class="dropdown-item">ทั้งหมด</a></li>
                        <li><a href="#" class="dropdown-item">เรื่องเรียน</a></li>
                        <li><a href="#" class="dropdown-item">เรื่องทั้วไป</a></li>
                    </ul>
                </span>
            </div>
            <?php
            if (isset($_SESSION['id'])) { ?>
            <div><a href="newpost.php" class="btn btn-success btn-sm"><i class="bi bi-plus"></i> สร้างกระทู้ใหม่</a></div>
            <?php } ?>
        </div>
        <br>
        <table class="table table-striped">
            <?php for ($i = 1; $i <= 10; $i++) { ?>
                <tr>
                    <td><a href="post.php?id=<?php echo $i ?>" style="text-decoration:none">กระทู้ที่ <?php echo $i ?></a></td>
                    <?php if (isset($_SESSION['id']) && $_SESSION["role"] == "a") { ?>
                    <td><a href="delete.php?id=<?php echo $i ?>" class="btn btn-danger btn-sm" onclick="return myFunction();">
                    <i class="bi bi-trash"></i></a></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>