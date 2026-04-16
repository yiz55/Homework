<html>
<head>
    <title>登入首頁</title>
</head>
<body>
    <center>
        <h3>登入頁面</h3>
        <?php
            if(isset($_COOKIE['userName'])){
                echo $_COOKIE['userName']."歡迎回來!!!";
                echo "<a href='cookiedel.php'>delete COOKIE</a>";
            }
        ?>

        <form action="logincheck.php" method="post">
                帳號：<input type="text" name="uID"><br>
                密碼：<input type="text" name="uPWD"><br>
            <p>
            <input type="submit" value="進入">
        </form>
    </center>

</body>
</html>