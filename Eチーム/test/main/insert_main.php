<?php
$user = "sample_user";
$password = "";
$dsn = 'mysql:dbname=ug;host=172.16.3.136;charset=utf8';

session_start();
$shop_id = $_SESSION['shop_id'];
$date = $_POST["date"];
$text = $_POST["text"];
try{
    
    $pdo = new PDO($dsn, $user, $password);
    $sql = 'INSERT INTO earnings(date, shop_id, sales_amount)VALUES("'.$date.'","'.$shop_id.'","'.$text.'")';
    $stm = $pdo->prepare($sql);
    $stm -> execute();
    header("Location:main.php");
}catch(Exception $e){
    print('ただいまアクセスが集中しております。時間をおいて再度アクセスしてください。');
    echo $e->getMessage();
    exit();
}
?>