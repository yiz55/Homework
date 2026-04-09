<html>
<head>
    <title>報名者資訊</title>
</head>
<body>
    <center><h1>報名者訊息</h1></center>
    <p>
    <table width="600" border="5" align="center" cellpadding="8" cellspacing="0">
        <tr>
            <td width="50%" align="center">
                <b><font size="4">姓名</font></b>
            </td>
            <td><?php
                    echo $_POST["nName"];
                ?>
            </td>
        </tr>
        <tr>
            <td width="50%" align="center">
                <b><font size="4">性別</font></b>
            </td>
            <td><?php
                    $Gender=$_POST["Gender"];
                    if($Gender=="f"){
                    echo "性別: 女 <br>";
                    } else {
                    echo "性別: 男 <br>";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td width="50%" align="center">
                <b><font size="4">年級</font></b>
            </td>
            <td><?php
                    echo $_POST["nyear"]
                ?>
            </td>
        </tr>
        <tr>
            <td width="50%" align="center">
                <b><font size="4">出生日期</font></b>
            </td>
            <td><?php
                    echo $_POST["nDate"]
                ?>
            </td>
        </tr>
        <tr>
            <td width="50%" align="center">
                <b><font size="4">身分證字號</font></b>
            </td>
            <td><?php
                    echo $_POST["nID"]
                ?>
            </td>
        </tr>
        <tr>
            <td width="50%" align="center">
                <b><font size="4">緊急聯絡人</font></b>
            </td>
            <td><?php
                    echo $_POST["eName"]
                ?>
            </td>
        </tr>
        <tr>
            <td width="50%" align="center">
                <b><font size="4">關係</font></b>
            </td>
            <td><?php
                    echo $_POST["eRelation"]
                ?>
            </td>
        </tr>
        <tr>
            <td width="50%" align="center">
                <b><font size="4">聯絡電話</font></b>
            </td>
            <td><?php
                    echo $_POST["ePhone"]
                ?>
            </td>
        </tr>
        <tr>
            <td width="50%" align="center">
                <b><font size="4">通訊地址</font></b>
            </td>
            <td><?php
                    echo $_POST["nAddress"]
                ?>
            </td>
        </tr>
        <tr>
            <td width="50%" align="center">
                <b><font size="4">飲食禁忌</font></b>
            </td>
            <td><?php
                    $nDiet=$_POST["nDiet"];
                    echo nl2br($nDiet);
                ?>
            </td>
        </tr>
        <tr>
            <td width="50%" align="center">
                <b><font size="4">備註</font></b>
            </td>
            <td><?php
                    $nNote=$_POST["nNote"];
                    echo nl2br($nNote);
                ?>
            </td>
        </tr>
        
    </table>

</body>
</html>