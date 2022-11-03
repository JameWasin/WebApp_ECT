<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }

    $cats=$_POST['category'];
    $top=$_POST['topic'];
    $comm=$_POST['comment'];
    $user=$_SESSION['user_id'];

    $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
    $sql="INSERT INTO post (title,content,post_date,cat_id,user_id) VALUE ('$top','$comm',NOW(),'$cats','$user')";
    $conn->exec($sql);
    $conn=null;
    header("location:index.php");
    die();
?>