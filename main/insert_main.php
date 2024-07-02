<?php
$user = "sample_user";
$password = "";
$dsn = 'mysql:dbname=earnings;host=172.16.3.136;charset=utf8';



$store = $_POST["store"];
$date = $_POST["date"];
$text = $_POST["text"];
try{
    $pdo = new PDO($dsn, $user, $password);
    $sql = 'INSERT INTO earning(date, store, sales)VALUES("'.$date.'","'.$store.'","'.$text.'")';
    $stm = $pdo->prepare($sql);
    $stm -> execute();
    header("Location:main.php");
}catch(Exception $e){
    print('ただいまアクセスが集中しております。時間をおいて再度アクセスしてください。');
    echo $e->getMessage();
    exit();
}
?>