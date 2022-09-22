<?php
    session_start();
    if ($_SESSION['role'] == "a"){
        $numPost = $_GET['id'];
        echo "ลบกระทู้หมายเลข $numPost";
    }
    else{
        header("location:index.php");
        die();
    }
?>