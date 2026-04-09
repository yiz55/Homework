<?php
$userid = $_POST["userid"];
$password = $_POST["password"];

$correct_id = "a1133355";
$correct_pw = "55";

if ($userid == $correct_id && $password == $correct_pw) {
    // 登入成功：跳轉到表單
    header("Location: form.php");
    exit;
} else {
    // 登入失敗：跳轉回登入頁，並在網址加上 ?error=1 傳遞錯誤訊息
    header("Location: login.php?error=1");
    exit;
}
?>