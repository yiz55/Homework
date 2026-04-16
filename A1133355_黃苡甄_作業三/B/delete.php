<?php
if (isset($_GET["Id"])) {
    $id = $_GET["Id"];

    // 檢查商品的 Cookie 是否存在
    if (isset($_COOKIE[$id]) && is_array($_COOKIE[$id])) {
        
        // 把陣列裡面所有的值都設為過期
        foreach ($_COOKIE[$id] as $name => $value) {
            setcookie($id."[" . $name . "]", "", time()-3600);
        }
    }
}

header("Location: shoppingcart.php");
?>