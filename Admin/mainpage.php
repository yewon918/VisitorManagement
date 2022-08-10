<!-- 이 페이지가 메인페이지 -->
<!DOCTYPE html>
<html>
<head>
	<title>관리자 페이지</title> 
	<link rel="stylesheet" type="text/css" href="mainpage.css">
    <script src="https://kit.fontawesome.com/c881082b49.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script language="javascript">
        function showInfo(){
            window.open("showInfo.php","a","width=400,height=300, left=400, top=100");
        }
    </script>

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
        <div class="title">
            <h2>방문자 조회 시스템test</h2>
        </div>
                
            
        <table align="center" width=500 height=200 border="1">
            <tr>
                <th>이름</th>
                <th>소속</th>
                <th>상세 정보</th>
                <th>상태</th>
            </tr>

            <?php
                //////////여기가 sql
                $sql="select * from signeduser_table ";
                $result = mysqli_query($conn, $sql);         
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)) { //이름을 키값으로
                        echo "<tr>";
                        echo "<td>".$row["Name"]."</td>";
                        echo "<td>".$row['Belonging']."</td>";
                        // echo "<td>".$row['simultaneously_use_num']."</td>";
                        echo "<td> <button onclick='showInfo();'>상세정보</button></td>";
                        echo "</tr>";
                        }
                        }else{
                            mysqli_error($conn);
                                //echo "비정상";
                            }
            ?>

        </table>
</body>
</html>