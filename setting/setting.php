<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>売上管理システム</title>
<meta name="keywords" content="uriage">
<meta name="description" content="uriage">
<link rel="stylesheet" href="se.css" media="all">
<style>
  body {
    font-family: Arial, sans-serif; /* フォントを設定 */
    margin: 0; /* ページの余白をリセット */
    padding: 0; /* ページの余白をリセット */
  }

  header {
    padding: 10px 20px; /* ヘッダーの余白を設定 */
    text-align: center; /* ヘッダーテキストを中央揃え */
    position: relative; /* 相対位置指定 */
  }

  .title-container {
    position: absolute; /* 絶対位置指定 */
    left: 50%; /* 左端から中央に移動 */
    transform: translateX(-50%); /* 左端に移動 */
  }

  .title-container span {
    font-size: 1.5em; /* タイトルのフォントサイズを設定 */
  }

  header a {
    position: absolute; /* 絶対位置指定 */
    top: 10px; /* 上端から10pxの位置に移動 */
    right: 20px; /* 右端から20pxの位置に移動 */
    text-decoration: none; /* 下線を削除 */
  }

  main {
    padding: 20px; /* メインコンテンツの余白を設定 */
  }

  .section-title {
    font-size: 1.2em; /* セクションタイトルのフォントサイズを設定 */
    margin-bottom: 10px; /* セクションタイトルの下の余白を設定 */
    text-align: center; /* セクションタイトルを中央揃え */
  }

  .form-group {
    margin-bottom: 10px; /* フォームグループの下の余白を設定 */
    text-align: center; /* フォームグループ内のコンテンツを中央揃え */
  }

  .form-group label {
    display: inline-block; /* ラベルをブロック要素に変更 */
    width: auto; /* ラベルの幅を自動設定 */
    margin-right: 10px; /* ラベルの右の余白を設定 */
  }

  .Btn {
    margin-top: 20px; /* ボタンの上の余白を設定 */
    text-align: center; /* ボタンを中央揃え */
  }

  footer {
    text-align: center; /* フッターテキストを中央揃え */
  }
</style>
</head>

<body>
  <header>
    <div class="title-container">
      <span>売上管理システム</span>
    </div>
    <a href="../login/login.php">ログアウト</a>
  </header>
  
  <main id="contents">
    <form action="setting1.php" method="post">
      <div class="section-title">売上目標の設定</div>
      <div class="form-group">
        <label for="store">店舗:</label>
        <select name="store">
          <option value="大分県">大分県</option>
          <option value="福岡県">福岡県</option>
          <option value="大阪府">大阪府</option>
          <option value="東京都">東京都</option>
        </select>
      </div>
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
      <div class="form-group">
        <label for="target">売上目標:</label>
        <input type="text" id="target" name="target"><br>
      </div>
      
      <div class="Btn">
        <input type="submit" value="登録">
      </div>
    </form>
    <button onclick="location.href='../main/main.php'" type="button" id="BackButton">戻る</button>
  </main>

  <footer>
    <p><small>teamE  All Rights Reserved.</small></p>
  </footer>
</body>
</html>