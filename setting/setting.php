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
<meta name="keywords" content="uriage">
<meta name="description" content="uriage">
<link rel="stylesheet" href="se.css"  media="all">
</head>
<p class="more clear"><a href="../login/login.php">ログアウト</a></p>
<body>
  <header>
    <h1>売上管理システム</h1>
   
  </header>
  <main id="contents">
    <form action="setting1.php" method="post">
      <div class="section-title">売上目標の設定</div>
      <br>
      <div class="form-group">
      <label for="store">店舗:
        <?php
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
      echo "$shop"?></label></label>
      </div>
      <br>
      <div class="form-group">
      <label for="month">月:</label>
      <select name="month">
        <option value="1月">１月</option>
        <option value="2月">２月</option>
        <option value="3月">３月</option>
        <option value="4月">４月</option>
        <option value="5月">５月</option>
        <option value="6月">６月</option>
        <option value="7月">７月</option>
        <option value="8月">８月</option>
        <option value="9月">９月</option>
        <option value="10月">１０月</option>
        <option value="11月">１１月</option>
        <option value="12月">１２月</option>
      </select>
      </div>
      <br>
      <div class="form-group">
      <label for="target">売上目標:</label>
      <input type="number" id="target" name="target"><br>
      </div>
      
      <div class="Btn">
        <input type="submit" value="登録">
      </div>
    </form>
    <button onclick="location.href='../main/main.php'" type="button" name="name" value="value" id="BackButton">戻る</button>
</main>

<footer>
  <p><small>teamE  All Rights Reserved.</small></p>
</footer>
</body>
</html>
