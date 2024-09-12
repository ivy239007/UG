<?php
// セッションの開始
session_start();

$shop_id = $_SESSION['shop_id'];
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
$dsn = 'mysql:host=172.16.3.136;dbname=ug;charset=utf8';
$conn = new PDO($dsn, $user, $pass);
//「$conn」は、任意のオブジェクト名

switch($month){
    case "1月":
        $month = 1;
        break;
    case "2月":
        $month = 2;
        break;
    case "3月":
        $month = 3;
        break;
    case "4月":
        $month = 4;
        break;
    case "5月":
        $month = 5;
        break;
    case "6月":
        $month = 6;
        break;
    case "7月":
        $month = 7;
        break;
    case "8月":
        $month = 8;
        break;
    case "9月":
        $month = 9;
        break;    
    case "10月":
        $month = 10;
        break;
        
    case "11月":
        $month = 11;
        break;
        
    case "12月":
        $month = 12;
        break;
}
// データの追加
$sql = 'INSERT INTO sales_target(monthly_id, shop_id, sale_target) VALUES("'.$month.'","'.$shop_id.'","'.$target.'")';

$stmt = $conn -> prepare($sql);
$stmt -> execute();

?>
<button onclick="location.href='../main/main.php'" type="button" name="name" value="value" id="BackButton">メイン画面へ戻る</button>
</div>
</body>
</html>
