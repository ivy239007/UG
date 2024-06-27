<?php
try{
    $user_id = $_POST['id'];
    $user_pass = $_POST['pw'];
    $dsn = 'mysql:dbname=earnings;host=172.16.3.136;charset=utf8';
    $db_username = "sample_user";
    $db_password = "";

    $dbh = new PDO($dsn, $db_username, $db_password);
    $sql= "SELECT * FROM manager WHERE login_id = ? AND password = ?";
    $stmt = $dbh->prepare($sql);
    $data[]= $user_id;
    $data[]= $user_pass;
    $stmt->execute($data);

    $dbh = null;

    $rec = $stmt->fetch(PDO::FETCH_ASSOC);

    if($rec == false){
        echo('IDまたはパスワードが間違っています。<br/>');
        //header("Location: S01_login.php");
    }else{
        session_start();
        $_SESSION['login'] = 1;
        $_SESSION['db_username'] = $db_username;
        $_SESSION['db_password'] = $db_password;
        header("Location: main.php");
        exit();
    }
}
catch(Exception $e){
    print('ただいまアクセスが集中しております。時間をおいて再度アクセスしてください。');
    echo $e->getMessage();
    exit();
}
?>