<?php
session_start();

if($_SESSION["role"]=="admin"){
    echo "管理員介面";
    echo "<br>";
    echo"<a href='logout.php'>Logout</a>";
    }else{
    echo "非法進入";
    header("Refresh:1; url=index.php");
}
?>