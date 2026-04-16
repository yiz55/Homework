<?php
session_start();

if($_SESSION["role"]=="teacher"){
    echo "教師系統";
    echo "<br>";
    echo"<a href='logout.php'>Logout</a>";
    }else{
    echo "非法進入";
    header("Refresh:1; url=index.php");
}
?>