<?php
// データベース接続設定
$dsn = 'mysql:dbname=ug;host=172.16.3.136;charset=utf8';
$db_username = "sample_user";
$db_password = "";

// PDOオブジェクトの作成
$dbh = new PDO($dsn, $db_username, $db_password);

// 店舗名とshop_idの対応関係を配列で定義
$shop_ids = [
    '大分支店' => 1,
    '福岡支店' => 2,
    '大阪支店' => 3,
    '東京支店' => 4,
];

// デフォルトの店舗を設定
$selected_store = '大分支店';
if (isset($_POST['store'])) {
    // POSTリクエストから選択された店舗を取得
    $selected_store = $_POST['store'];
}

// 選択された店舗のshop_idを取得
$shop_id = $shop_ids[$selected_store];
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
        <h1 class="title">売上管理システム<input onclick="location.href='../login/login.php'" class="logout" type="submit" value="ログアウト"></h1>
    </header>
    
    <!-- フォームの開始 -->
    <form action="" method="post">
        <!-- 店舗選択 -->
        <div class="storeselect">
            <label for="store">店舗:</label>
            <select name="store" id="name" onchange="this.form.submit()">
                <option value="大分支店" <?php if ($selected_store == '大分支店') echo 'selected'; ?>>大分支店</option>
                <option value="福岡支店" <?php if ($selected_store == '福岡支店') echo 'selected'; ?>>福岡支店</option>
                <option value="大阪支店" <?php if ($selected_store == '大阪支店') echo 'selected'; ?>>大阪支店</option>
                <option value="東京支店" <?php if ($selected_store == '東京支店') echo 'selected'; ?>>東京支店</option>
            </select>
        </div>
        
        <p>売上を登録</p> 
        <div class="flex">
            <span>日付：</span><input type="date" name="date">
            <span>売上金額：</span><input type="text" name="text">
            <input type="submit" value="登録">
        </div>
    </form>

    <div>
        <br>
        <span>売上目標 </span><span><input onclick="location.href='../setting/setting.php'" class="setting" type="submit" value="設定"></span>
    </div>
    
    <div>
        <p>今月の売上実績</p>
        <?php
        // 現在の年月を取得して表示
        $now = date('Y/m');
        echo $now;

        // 選択された店舗の売上データをデータベースから取得するSQLクエリ
        $sql = "SELECT date, sales_amount FROM earnings WHERE shop_id = :shop_id";
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
