<html >
<head>
    <title>檢視購物車</title>
    
</head>
<body>
    <table>
        <tr>
            <th>功能</th><th>編號</th><th>名稱</th><th>價格</th><th>數量</th>
        </tr>
        
        <?php
        $flag = false; // 用來切換顯示色彩
        $total = 0;    // 總金額
        foreach ($_COOKIE as $arr => $value) {
            
            // 檢查 Cookie 值是否為陣列 
            if (is_array($value)) {
                if ($flag) {
                    $flag = false;
                    $color = "lightpink";
                } else {
                    $flag = true;
                    $color = "lightgreen";
                }

                echo "<tr bgcolor='" . $color . "'>";
                echo "<td><a href='delete.php?Id=" . $arr . "'>刪除</a></td>";
                
                $price = 0;
                $quantity = 0;
                foreach ($value as $name => $val) {
                    echo "<td>" . $val . "</td>";
                    
                    // 得到價格和數量計算總金額
                    if ($name == "Price") $price = $val;
                    if ($name == "Quantity") $quantity = $val;
                }
                
                $total += $price * $quantity; // 計算總金額
                echo "</tr>";
            }
        }
        ?>
        <tr>
            <td colspan="5" align="right">總金額 = NT$<?php echo $total; ?>元</td>
        </tr>
    </table>
    <br>
    <a href="catalog.php">商品目錄</a>
    <a href="shoppingcart.php">檢視購物車</a>
</body>
</html>