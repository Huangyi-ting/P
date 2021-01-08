<?php
error_reporting(0); //報告執行時錯誤
session_start();
if(!isset($_SESSION[id])){
    echo "請輸入帳號密碼";
    echo "meta http-equiv='refresh' content='3;url=login.html''>";
}else{
    
    $conn=mysqli_connect("localhost","root","","mydb"); //連接mysql數據庫
    $sql="update bulletin set title='{$_POST[title]}', content='{$POST[content]}'
        , type={$_POST[type]}, time='{$_POST[time]}' where bid={$_POST[bid]]";
    echo $spl;
    if(!mysqli_query($conn, $sql))
      echo "修改佈告錯誤";
    else 
      echo "修改佈告成功";

echo "<meta http-equiv='refresh' content='3;url=bulletin.php''>";      

}

?>