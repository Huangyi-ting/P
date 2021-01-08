<?php
    error_reporting(0); //報告執行時錯誤
    
    $conn = mysqli_connect("localhost","root","", "mydb");  
    if (mysqli_connect_error($conn)) //描述錯誤的字符串
        die("資料庫連線錯誤");

    mysqli_set_charset($conn, "utf8"); // 設定連線編碼
    $result=mysqli_query($conn, "select * from user");  //取得資料
    
    $login=FALSE;
    //取回資料
    while ($row=mysqli_fetch_array($result)) {
       if ($_POST["id"]==$row["id"]  && $_POST["pwd"]==$row["pwd"])
           $login=True;
    }

    if  (!$_POST["id"] || !$_POST["pwd"]){
        echo "請輸入帳號/密碼"; 
        echo "<meta http-equiv='refresh' content='3;url=login.html''>";              
    }
    elseif ($login==TRUE){
        session_start();
        echo "歡迎登入";    
      echo "<meta http-equiv='refresh' content='0;url=bulletin.php''>";   
    }
    else{
      echo "帳號密碼錯誤";
      echo "<meta http-equiv='refresh' content='3;url=login.html''>";          
    }
?>