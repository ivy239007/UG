<?php
$dsn = 'mysql:dbname=ug;host=172.16.3.136;charset=utf8';
$db_username = "sample_user";
$db_password = "";

$dbh = new PDO($dsn, $db_username, $db_password);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>売上管理システム</title>
<meta name="keywords" content="売上管理システム">
<meta name="description" content="あいうえお">
<link rel="stylesheet" href="main.css"media="all">
</head>

<body>
    <header>
        <h1 class="title">売上管理システム<input onclick="location.href='../login/login.php'"class="logout" type="submit" value="ログアウト"></h1>
    </header>
    <form action="insert_main.php" method="post">
        <div class="storeselect">
            <label for="store">店舗:</label>
            <select name ="store" id = "name">
                <option value="大分支店"selected>大分支店</option>
                <option value="福岡支店">福岡支店</option>
                <option value="大阪支店">大阪支店</option>
                <option value="東京支店">東京支店</option>
            </select>
        </div>
        
        <p>売上を登録</p> 
        <div class="flex">
            <span>日付：</span><input type="date" name = "date">
            <span>売上金額：</span><input type="text" name = "text">
            <input type="submit" value="登録">
        </div>
    </form>
    <div>
        <br>
    <span>売上目標 </span><span><input onclick="location.href='../setting/setting.php'"class="setting" type="submit" value="設定"></span>
    </div>
    <div>
        <p>今月の売上実績</p>
        <?php

        $now = date('Y/m');
        echo  $now;
        $sql = "SELECT date ,sales_amount FROM `earnings` WHERE shop_id = 1";
        $stm = $dbh -> prepare($sql);
        $stm -> execute();
        $result = $stm -> fetchAll(PDO::FETCH_ASSOC);
        echo "<table>";
        echo "<thead><tr>";
        echo "<th>","日付","</th>";
        echo "<th>","売上金額","</th>";
        echo "</tr></thead>";

        echo "<tbody>";

        foreach($result as $row){
            echo "<tr>";
            echo "<td>",$row['date'],"</td>";
            echo "<td>",$row['sales_amount'],"</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        ?>
    </div>
    <footer>
    <p><small>Sales management system</small></p>
    </footer>
</body>
</html>