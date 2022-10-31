<!-- 이 페이지가 메인페이지 -->
<!DOCTYPE html>
<html>
  <head>
      <!--  부트스트랩 js 사용 -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript" src="./resource/js/bootstrap.js"></script>
      <!-- 부트스트랩 css 사용 -->
      <link rel="stylesheet" href="./resource/css/bootstrap.css" />
      <link rel="stylesheet" href="./mainpage.css" type="text/css" media="all" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>관리자 페이지</title>

    <link rel="stylesheet" type="text/css" href="./mainpage.css">
      <script src="https://kit.fontawesome.com/c881082b49.js" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript" src="/resource/js/bootstrap.js"></script>
     <script language="javascript">

          function showInfo(){
            
              window.open("showInfo.php","a","width=600,height=400, left=400, top=100");
          }
          function confirm(){
              alert("승인되었습니다");
              // const btn=document.getElementById('btn')
              // btn.innerText='승인완료'
          }

      </script>
  </head>
 <?php
    $conn=mysqli_connect('localhost','ferrydraw','hsh0729!','ferrydraw');
    session_start();
    ?>
    <?php
        $servername = "localhost";
        $username = "ferrydraw";
        $password = "hsh0729!";
        $dbname = "ferrydraw";
    ?>

<?php

if(!isset($_SESSION['ID'])) {
    echo "<script>location.replace('Login.php');</script>";            
}

else {
    $ID = $_SESSION['ID'];
} 
?>

<body>
            <!-- ====== Navbar start ======= -->
            <div class="pos-f-t">
        <div class="titlenav navbar navbar-expand-lg navbar-dark bg-dark">
          <h5 class="text-white h4" href="#">RTW corp. 방문자 관리 시스템</h5>
          <span class="text-muted"> IT로 세상을 바꾸는 RTW</span>
        </div>
        <div class="collapse" id="navbarToggleExternalContent">
          <div class="bg-dark p-4">
            <h5 class="welcome"><?php echo "Hi, $ID";?> 관리자님 환영합니다!</h5>
            <a class="nav-item nav-link" href="home.php">HOME</a>
            <a class="nav-item nav-link" href="mainpage.php">방문자 조회</a>
            <a class="nav-item nav-link" href="statistic.php">방문자 통계</a>
            <a class="nav-item nav-link" href="camera.html">카메라</a>
            <button
              type="button"
              class="btn"
              onclick="location.href='Logout.php'"
            >
              LOGOUT
            </button>
          </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarToggleExternalContent"
            aria-controls="navbarToggleExternalContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>
      </div>
      <!-- ====== Navbar end ======= -->
        <div class="title" style='margin-top:60px;'>
            <h1>방문자 조회</h1>
        </div>
        <table class="visitor_table" border="1" 
        style="margin-left: auto; margin-right: auto; width:90%; margin-top:50px;
        height: 400px; text-align:center;  background: white;
        border-radius:3px;
        border-collapse: collapse;
        height: 320px;
        max-width: 800px;
        padding:5px;
        width: 100%;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        animation: float 5s infinite; "
        >   
                    <tr>
                        <th style="  color:#D5DDE5;;
                        background:#1b1e24;
                        border-bottom:4px solid #9ea7af;
                        border-right: 1px solid #343a45;
                        font-size:23px;
                        font-weight: 100;
                        padding:24px;
                        text-align:center;
                        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
                        vertical-align:middle;">이름</th>
                                              <th style="  color:#D5DDE5;;
                        background:#1b1e24;
                        border-bottom:4px solid #9ea7af;
                        border-right: 1px solid #343a45;
                        font-size:23px;
                        font-weight: 100;
                        padding:24px;
                        text-align:center;
                        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
                        vertical-align:middle;" >상세 정보</th>
                                              <th style="  color:#D5DDE5;;
                        background:#1b1e24;
                        border-bottom:4px solid #9ea7af;
                        border-right: 1px solid #343a45;
                        font-size:23px;
                        font-weight: 100;
                        padding:24px;
                        text-align:center;
                        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
                        vertical-align:middle;">상태</th>
                    </tr>
                    <?php
                        //////////여기가 sql
                        $sql="select * from signeduser_table ";
                        $result = mysqli_query($conn, $sql);         
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)) { //이름을 키값으로
                                echo "<tr style=
                                '  border-top: 1px solid #C1C3D1;
                                border-bottom-: 1px solid #C1C3D1;
                                color:#666B85;
                                font-size:16px;
                                font-weight:normal;
                                text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);'>";
                                echo "<td style='background:#FFFFFF;
                                padding:20px;
                                text-align:center;
                                vertical-align:middle;
                                font-weight:300;
                                font-size:18px;
                                text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
                                border-right: 1px solid #C1C3D1;'>".$row["Name"]."</td>";
                                echo "<td style='background:#FFFFFF;
                                padding:20px;
                                text-align:center;
                                vertical-align:middle;
                                font-weight:300;
                                font-size:18px;
                                text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
                                border-right: 1px solid #C1C3D1;'> <button style='background-color: #2F3545;
                                width: 130px;
                                height: 40px;
                                color: #fff;
                                text-align: center;
                                border-radius: 5px;
                                border: none;
                                padding: 5px 25px;
                                background: transparent;
                                transition: all 0.3s ease;
                                position: relative;
                                display: inline-block;
                                box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
                                7px 7px 20px 0px rgba(0,0,0,.1),
                                4px 4px 5px 0px rgba(0,0,0,.1);
                                outline: none;
                                background: linear-gradient(0deg, rgba(0,172,238,1) 0%, rgba(2,126,251,1) 100%);
                                'onclick='showInfo();'>상세정보</button></td>";
                                echo "<td> <button style='
                                background-color: #2F3545;
                                width: 130px;
                                height: 40px;
                                color: #fff;
                                font-weight:300;
                                font-size:18px;
                                border-radius: 5px;
                                border: none;
                                padding: 5px 25px;
                                background: transparent;
                                transition: all 0.3s ease;
                                box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
                                7px 7px 20px 0px rgba(0,0,0,.1),
                                4px 4px 5px 0px rgba(0,0,0,.1);
                                outline: none;
                                background: linear-gradient(0deg, rgba(0,172,238,1) 0%, rgba(2,126,251,1) 100%);
                                ' id='btn'  onclick='confirm();'>승인</button></td>";
                                echo "</tr>";
                                }
                                }else{
                                    mysqli_error($conn);
                                    }
                    ?>
        </table>
        <!--  부트스트랩 js 사용 -->
   <!-- <script type="text/javascript" src="/resource/js/bootstrap.js"></script> -->

</body>
</html>