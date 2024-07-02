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
                <option value="大分支店">大分支店</option>
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
        
        <p>今月の売上目標</p>
        <div class="flex">
            <span>日付：</span><input type="text">
        
        </div>

    <p>１日の売上目標</p>
    <div class="flex">
        <span>売上金額：</span><input type="text">
    </div>

    <div>
        <p>今月の売上実績</p>
    </div>

    </form>
    <footer>
    <p><small>Sales management system</small></p>
    </footer>
</body>
</html>