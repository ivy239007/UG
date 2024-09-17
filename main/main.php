<?php
session_start();
if(isset($_SESSION['login'])==false){
    print'ログインされていません。<br/>';
    print'<a href="../login/login.php">ログイン画面へ</a>';
    exit();
}
// データベース接続設定
$dsn = 'mysql:dbname=ug;host=172.16.3.136;charset=utf8';
$db_username = "sample_user";
$db_password = "";

// PDOオブジェクトの作成
$dbh = new PDO($dsn, $db_username, $db_password);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>売上管理システム</title>
<meta name="keywords" content="売上管理システム">
<meta name="description" content="あいうえお">
<link rel="stylesheet" href="main.css" media="all">
</head>

<body>
    <header>
        <h1 class="title">売上管理システム
            <input onclick="location.href='../log_out/log_out.php'" class="logout" type="submit" value="ログアウト">
        </h1>
    </header>
    
    <!-- フォームの開始 -->
    <form  id = "" method="post" action="insert_main.php">
        <!-- 店舗選択 -->
        <div class="storeselect">
            <label for="store">店舗:<?php
            $login = $_SESSION['login'];
            $shop_id = $_SESSION['shop_id'];
            $shop;
            switch($shop_id){
                case 1 :
                    $shop = "大分支店";
                    break;
                case 2 :
                    $shop = "福岡支店";
                    break;
                case 3 :
                    $shop = "大阪支店";
                    break;
                case 4 :
                    $shop = "東京支店";
                    break;
            }
            echo "$shop"?></label>
        </div>
        
        <p>売上を登録</p> 
        <div class="flex">
            <span>日付：</span><input type="date" name="date">
            <span>売上金額：</span><input type="number" name="text">
            <input type="submit" value="登録">
        </div>
    </form>

    <div>
        <br>
        <span>売上目標 </span>
        <span><input onclick="location.href='../setting/setting.php'" class="setting" type="submit" value="設定"></span>
    </div>
    
    <div>
        <p>今月の売上実績</p>
        <?php

        // 現在の年月を取得して表示
        $year = date('Y');
        $month = date('m');

        // 選択された店舗の売上データをデータベースから取得するSQLクエリ
        $sql = "SELECT date, sales_amount FROM earnings WHERE shop_id = :shop_id AND date LIKE '$year%$month%'";
        $stm = $dbh->prepare($sql);
        $stm->bindParam(':shop_id', $shop_id, PDO::PARAM_INT);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);

        // テーブルの開始
        echo "<table>";
        echo "<thead><tr>";
        echo "<th>日付</th>";
        echo "<th>売上金額</th>";
        echo "</tr></thead>";

        echo "<tbody>";

        // データベースから取得した結果をテーブルに表示
        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>", $row['date'], "</td>";
            echo "<td>", $row['sales_amount'], "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        ?>
    </div>
    
    <!-- フッター -->
    <footer>
        <p><small>Sales management system</small></p>
    </footer>
</body>
</html>
