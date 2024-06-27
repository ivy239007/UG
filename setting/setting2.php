<?php
// セッションの開始
session_start();

$store = $_SESSION['store'];
$month = $_SESSION['month'];
$target = $_SESSION['target'];

//サーバーに保存されているsessionデータを変数に代入
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>DBに接続しているフォーム｜送信画面</title>
</head>

<body>
<div class="container">
<h1>完了しました。</h1>
<p>お問い合わせありがとうございました。</p>
<?php
// DB接続設定
$user = 'sample_user';//DBユーザー名
$pass = '';//DBパスワード

//DBに接続
$dsn = 'mysql:host=172.16.3.136;dbname=earnings;charset=utf8';
$conn = new PDO($dsn, $user, $pass);
//「$conn」は、任意のオブジェクト名


// データの追加
$sql = 'INSERT INTO sales_target(store, month, target) VALUES("'.$store.'","'.$month.'","'.$target.'")';

$stmt = $conn -> prepare($sql);
$stmt -> execute();

//最後にセッション情報を破棄
session_destroy();
?>
</div>
</body>
</html>
