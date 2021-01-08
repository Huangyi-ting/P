<?php
error_reporting();
session_start();
//將session清空
unset($_SESSION["id"]);
//session_destroy(); //伺服器上所有seesion variable清空，要注意
echo "登出中......";
echo "<mata http-equiv=REFRESH CONTENT='2;url=login.heml'>";






?>