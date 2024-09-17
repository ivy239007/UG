<?php
session_start();
session_destroy();
    print'ログアウトします<br/>';
    print'<a href="../login/login.php">ログイン画面へ</a>';
    exit();
?>