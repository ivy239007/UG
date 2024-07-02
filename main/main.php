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
        <h1 class="title">売上管理システム<input class="logout" type="submit" value="ログアウト"></h1>
    </header>

    <div class="storeselect">
        <label for="store">店舗:</label>
        <select id="store">
            <option value="option1">A支店</option>
            <option value="option2">B支店</option>
            <option value="option3">C支店</option>
        </select>
    </div>

    <p>今月の売上を登録</p>
    <div class="flex">
        <span>日付：</span><input type="text">
        <span>売上金額：</span><input type="text">
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

    <footer>
    <p><small>Sales management system</small></p>
    </footer>
</body>
</html>