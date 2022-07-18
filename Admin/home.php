<!DOCTYPE html>
<html>
<head>
	<title>관리자 페이지</title> 
	<link rel="stylesheet" type="text/css" href="home.css">
    <script src="https://kit.fontawesome.com/c881082b49.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<?php
    $conn=mysqli_connect('localhost','root','root','rtw');
    session_start();
    ?>

    <!-- php연동 -->
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "rtw";
    ?>

<?php

if(!isset($_SESSION['ID'])) {
    echo "<script>location.replace('Login.php');</script>";            
}

else {
    $ID = $_SESSION['ID'];
    // $Name = $_SESSION['Name'];
} 
?>

<body>
    
    <div class="sidebar">
         <ul>
            <!-- <div class="Logout"> -->
            <!-- <h2><?php echo "Hi, $ID($Name)";?> -->
            <button type="button" class="btn" onclick="location.href='Logout.php'">
                LOGOUT
            </button>
            <!-- </div> -->
            <li><a class="Home" href="home.php">홈</a></li>
            <li><a class="Search" href="mainpage.php">방문자 조회</a></li>
            <li><a class="statistics" href="statistic.php">방문자 통계</a></li>
        </ul>    
    </div>
    <div class="content">
    <!-- 여기에 내용넣기
    사진 및 회사 이름 방문자 관리 시스템 -->
    </div>
       
   
    
   
</body>
</html>