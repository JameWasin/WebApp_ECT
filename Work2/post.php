<?php
$numPost = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 id="headTop">Webboard KakKak</h1>
    <hr>
    <div id="headTop">
        <?php 
        echo "ต้องการดูกระทู้หมายเลข $numPost <br>"; 
        if($numPost%2 == 0){
            echo "เป็นกระทู้หมายเลขคู่ <br><br>"; 
        }
        else{
            echo "เป็นกระทู้หมายเลขคี่ <br><br>"; 
        }
        
        ?>
        <table id="loginTable">
            <tr>
                <td id="tableHead">แสดงความคิดเห็น</td>
            </tr>
            <tr>
                <td><textarea name="txt" style="width: 98%; height: 150px;"></textarea></td>
            </tr>
            <tr>
                <td align="center"><input type="submit" value="ส่งข้อความ"></td>
            </tr>
        </table>
    </div><br>
    <div id="headTop">
        <a href="index.php">กลับไปหน้าหลัก</a>
    </div>
</body>

</html>