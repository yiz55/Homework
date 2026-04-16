<?php
session_start();

// 看Session是否存在
if (isset($_SESSION["ID"])) {
    $id = $_SESSION["ID"];
    $name = $_SESSION["Name"];
    $price = $_SESSION["Price"];
    $quantity = $_SESSION["Quantity"];

    // 儲存選購商品的陣列Cookie
    setcookie($id."[ID]", $id, time()+3600);
    setcookie($id."[Name]", $name, time()+3600);
    setcookie($id."[Price]", $price, time()+3600);
    setcookie($id."[Quantity]", $quantity, time()+3600);
}

header("Location: shoppingcart.php");
?>