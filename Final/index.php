<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>
    <form action="calendar.php" method="post">
        กรุณากรอกเดือน:
        <select name="Mo">
            <?php for ($i = 1; $i <= 12; $i++) { ?>
            <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php } ?>
        </select><br>
        กรุณากรอกปี(พ.ศ.):
        <input type="text" name="Ye" size="20"><br>
        วันที่ 1 ของเดือนตรงกับ:
        <select name="d1Mo">
            <option value="1">วันจันทร์</option>
            <option value="2">วันอังคาร</option>
            <option value="3">วันพุธ</option>
            <option value="4">วันพฤหัสบดี</option>
            <option value="5">วันศุกร์</option>
            <option value="6">วันเสาร์</option>
            <option value="7">วันอาทิตย์</option>
        </select><br>
        <input type="submit" value="ตกลง" name="btn_ok">
        <input type="submit" value="ล้างข้อมูล" name="btn_clear">
    </form>
</body>

</html>