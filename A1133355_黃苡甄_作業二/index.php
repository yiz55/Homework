<html>
<head>
    <title>夏令營報名系統 - 登入</title>
</head>
<body>
    <center>
        <h2>夏令營報名系統 - 登入頁面</h2>
        <?php
            if (isset($_GET["error"]) && $_GET["error"] == "1"){
            echo "<p style='color: red; font-weight: bold;'>登入失敗：帳號或密碼錯誤！</p>";
            }
        ?>

        <form action="logincheck.php" method="post">
            <table border="1" width="600" bgcolor="LightYellow" cellpadding="8" cellspacing="0">
                <tr>
                    <td width="30%" bgcolor="LightGray">帳號</td>
                    <td><input type="text" name="userid" placeholder="請輸入帳號" required></td>
                </tr>
                <tr>
                    <td width="30%" bgcolor="LightGray">密碼</td>
                    <td><input type="password" name="password" placeholder="請輸入密碼" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="登入">
                        <input type="reset" value="重新輸入">
                    </td>
                </tr>
            </table>
        </form>
        <font size="3">(帳號：a1133355；密碼：55)(預設)
    </center>
</body>
</html>