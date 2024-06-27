<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>ログイン画面</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap');
    </style>
    <link rel="stylesheet" type="text/css" href="rg.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>

<body>
    <header style="margin-bottom: 30px;">
        <h1>売上管理システム</h1>
    </header>

    <main id="contents">
          ログイン画面
        <form id="loginForm" method="post" action="lotest.php"> <!-- PHPファイルへのアクションを指定 -->
            <div class="form-group">
                <label for="id">I D :</label>
                <input type="text" id="id" name="id" required autofocus placeholder="ivy">
            </div>
            <div class="form-group">
                <label for="pw">PW:</label>
                <input type="password" id="pw" name="pw" required autofocus placeholder="1234">
            </div>
            <input type="submit" class="gradient1" value="ログイン">
        </form>
    </main>
</body>
</html>
