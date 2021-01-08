<?php
error_reporting();
$conn_mysqli_connect("localhost","root","","mydb");
$sql="delete from bulletin where bid={$_GET[bid]}";
if (!mysqli_query($conn, $sql)) //mysqli_query（）函數執行某個針對數據庫的查詢
        echo "刪除錯誤";
    else{
        echo "刪除成功；回前頁中...";
        echo "<meta http-equiv='refresh' content='3;url=bulletin.php'>"; //用 PHP 取得網址再判斷要不要轉址
    }






?>