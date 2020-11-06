<?php
    error_reporting(0); //禁用錯誤報告，也就是不顯示錯誤
    
    $conn = mysqli_connect("localhost","root","", "mydb");  //檢測資料庫連線是否成功
    if (mysqli_connect_error($conn)) //選擇資料庫
        die("資料庫連線錯誤");

    mysqli_set_charset($conn, "utf8"); //設定連接編碼
    $result=mysqli_query($conn, "select * from user"); //取得資料
    while ($row=mysqli_fetch_array($result)) { //輸出資料內容
        echo $row[id];
        echo " ";
        echo $row[pwd];
        echo "<br>";
    }
?>