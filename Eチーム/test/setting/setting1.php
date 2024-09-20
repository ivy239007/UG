<?php
if(!(isset($_POST['target']))){
//$_POST["name"]の値が空だったらLocationで指定しているファイルに強制移動（リダイレクト）させる
 header('Location:seltutei.php');
 exit;
}

$month = htmlspecialchars($_POST["month"], ENT_QUOTES);
$target = htmlspecialchars($_POST["target"], ENT_QUOTES);


session_start();
$shop_id = $_SESSION['shop_id'];
$_SESSION['month'] = $month;
$_SESSION['target'] = $target;
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>DBに接続しているフォーム｜確認画面</title>
<link rel="stylesheet" href="css/form.css">
</head>

<body>
<div class="container">
<h1>確認画面</h1>
<form action="setting2.php" method="post">
<dl>
<dt>店舗:</dt><dd><?php
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
echo $shop ?></dd>
<dt>月:</dt><dd><?php echo $month ?></dd>
<dt>目標売上:</dt><dd><?php echo $target ?></dd> 
</dl>
<p>
<input type="submit" value="送信">
<input type="button" value="戻る" onclick="history.back();">
</p>
</form>
</div>
</body>
</html>