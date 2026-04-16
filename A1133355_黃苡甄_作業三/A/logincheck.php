<?php
session_start();

$uID=$_POST["uID"];
$uPWD=$_POST["uPWD"];

$sID="student";
$sPWD="1234";

$tID="teacher";
$tPWD="123";

$aID="admin";
$aPWD="12345";

$expire_time=strtotime("+1 day");

if($uID==$sID && $uPWD==$sPWD){
    $_SESSION["role"]="student";
    $_SESSION["user"]=$uID;
    setcookie("userName",$uID,$expire_time);
    header("Refresh:1; url=student.php");
}else if($uID==$tID && $uPWD==$tPWD){
    $_SESSION["role"]="teacher";
    $_SESSION["user"]=$tID;
    setcookie("userName",$tID,$expire_time);
    header("Refresh:1; url=teacher.php");
}else if($uID==$aID && $uPWD==$aPWD){
    $_SESSION["role"]="admin";
    $_SESSION["user"]=$aID;
    setcookie("userName",$aID,$expire_time);
    header("Refresh:1; url=admin.php");
}else{
    echo "輸入錯誤";
    header("Location:index.php");
}

?>