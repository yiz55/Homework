<?php

setcookie("userName", "", time()-3600);
header("Refresh:1; url=index.php");

?>