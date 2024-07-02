<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>売上管理システム</title>
<meta name="keywords" content="uriage">
<meta name="description" content="uriage">
<link rel="stylesheet" href="se.css"  media="all">
</head>

<body>
  <header>
    <div class="title-contener">
       <h1>売上管理システム <p class="more clear"><a href="../login/login.php">ログアウト</a></p></h1>
    </div>
    
   
  </header>
  <main id="contents">
    <form action="setting1.php" method="post">
      <div class="section-title">売上目標の設定</div>
      <br>
      <div class="form-group">
      <label for="store">店舗:</label>
      <select name="store">
        <option value="大分県">大分県</option>
        <option value="福岡県">福岡県</option>
        <option value="大阪府">大阪府</option>
        <option value="東京都">東京都</option>
      </select>
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
      <input type="text" id="target" name="target"><br>
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
