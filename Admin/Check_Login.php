<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title></title>
</head>
<body>
<?php
   session_start();
    $host = 'localhost';
    $user = 'ferrydraw';
    $pw = 'hsh0729!';
    $dbName = 'ferrydraw';
    $mysqli = new mysqli($host, $user, $pw, $dbName);
      
      //login.php에서 입력받은 id, password
      $ID=$_POST['ID'];
      $Password=$_POST['Password'];
      
      $q = "SELECT * FROM administrator_table WHERE ID= '$ID' && Password = '$Password'";
      $result = $mysqli->query($q);
      $row = $result->fetch_array(MYSQLI_ASSOC);
      
      //결과가 존재하면 세션 생성
      if ($row != null) {
         $_SESSION['ID'] = $row['ID'];
         $_SESSION['Password'] = $row['Password'];
         echo "<script>location.replace('home.php');</script>";
         exit;
      }
      
      //결과가 존재하지 않으면 로그인 실패
      if($row == null){
         echo "<script>alert('Invalid username or password')</script>";
         echo "<script>location.replace('Login.php');</script>";
         exit;
      }
      ?>
   </body>
