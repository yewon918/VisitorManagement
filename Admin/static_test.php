<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PATH</title>
    <link rel="stylesheet" href="./MainPage.css">
    <script src="https://kit.fontawesome.com/c881082b49.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="./jquery.min.js"></script>
    <script type="text/javascript" src="./Chart.min.js"></script>
    <script type="text/javascript" src="./main_img.js"></script>

</head>
<body onload="showImage()">
    <?php
    $conn=mysqli_connect('127.0.0.1','root','0918','Path');
    session_start();
    ?>
    <div class="top">

        <div class="Title">
        PATH
        </div>
        <div class="Login">
            <?php
            if(isset($_SESSION['user_id'])) {
            ?>
                <button type="button" aria-label="Logout" class="Login-button" onClick="location.href='Logout.php'">
                Logout
                </button>

        <?php
            }
            else{
        
        ?>
        <button type="button" aria-label="Login" class="Login-button" onClick="location.href='로그인.php'">
                Login
        </button>
        <?php
            }
        ?>
        </div>

    </div>
    <div class="topbar" style="position: absolute; top:0;">
        
        <!-- 왼쪽 서브 메뉴 -->
        <div class="left_side_bar">
            <div class="Ku">
                <h2>구별 검색</h2>
                <ul class="Ku_list">
                    <li>ㄱ<i class="arrow fas fa-angle-right "></i></li>
                    <ul class="specific_Ku">
                        <li><a href="./Search_Ku_강동.php" >강동구</a></li>
                        <li><a href="./Search_Ku_광진.php" >광진구</a></li>
                        <li><a href="./Search_Ku_강북.php" >강북구</a></li>
                        <li><a href="./Search_Ku_강서.php" >강서구</a></li>
                        <li><a href="./Search_Ku_구로.php" >구로구</a></li>
                        <li><a href="./Search_Ku_금천.php" >금천구</a></li>
                        <li><a href="./Search_Ku_관악.php" >관악구</a></li>
                        <li><a href="./Search_Ku_강남.php" >강남구</a></li>
                    </ul>
                </ul>
                <ul class="Ku_list ">
                    <li>ㄴ<i class="arrow fas fa-angle-right"></i></li>
                    <ul class="specific_Ku">
                        <li><a href="./Search_Ku_노원.php" >노원구</a></li>
                    </ul>
                </ul>
                <ul class="Ku_list ">
                    <li>ㄷ<i class="arrow fas fa-angle-right"></i></li>
                    <ul class="specific_Ku">
                        <li><a href="./Search_Ku_동대문.php" >동대문구</a></li>
                        <li><a href="./Search_Ku_도봉.php" >도봉구</a></li>
                        <li><a href="./Search_Ku_동작.php" >동작구</a></li>
    

                    </ul>
                </ul>
                <ul class="Ku_list ">
                    <li>ㅁ<i class="arrow fas fa-angle-right"></i></li>
                    <ul class="specific_Ku">
                        <li><a href="./Search_Ku_마포.php" >마포구</a></li>


                    </ul>
                </ul>
                <ul class="Ku_list ">
                    <li>ㅅ<i class="arrow fas fa-angle-right"></i></li>
                    <ul class="specific_Ku">
                        <li><a href="./Search_Ku_송파.php" >송파구</a></li>
                        <li><a href="./Search_Ku_서초.php" >서초구</a></li>
                        <li><a href="./Search_Ku_서대문.php" >서대문구</a></li>
                        <li><a href="./Search_Ku_성북.php" >성북구</a></li>
                        <li><a href="./Search_Ku_성동.php" >성동구</a></li>
    

                    </ul>
                </ul>
                <ul class="Ku_list ">
                    <li>ㅇ<i class="arrow fas fa-angle-right"></i></li>
                    <ul class="specific_Ku">
                        <li><a href="./Search_Ku_용산.php" >용산구</a></li>
                        <li><a href="./Search_Ku_은평.php" >은평구</a></li>
                        <li> <a href="./Search_Ku_양천.php" >양천구</a></li>
                        <li><a href="./Search_Ku_영등포.php" >영등포구</a></li>
    

                    </ul>
                </ul>
                <ul class="Ku_list ">
                    <li>ㅈ<i class="arrow fas fa-angle-right"></i></li>
                    <ul class="specific_Ku">
                        <li><a href="./Search_Ku_중랑.php" >중랑구</a></li>
                        <li><a href="./Search_Ku_중구.php" >중구구</a></li>
                        <li><a href="./Search_Ku_종로.php" >종로구</a></li>
    

                    </ul>
                </ul>

            </div>
            <div class="Ku">
                <h2>호선별 검색</h2>
            </div>
            <ul class="specific_Line">
                <li><a href="Search_line1.php">1호선</a></li>
                <li><a href="Search_line2.php">2호선</a></li>
                <li><a href="Search_line3.php">3호선</a></li>
                <li><a href="Search_line4.php">4호선</a></li>
                <li><a href="Search_line5.php">5호선</a></li>
                <li><a href="Search_line6.php">6호선</a></li>
                <li><a href="Search_line7.php">7호선</a></li>
                <li><a href="Search_line8.php">8호선</a></li>
                <li><a href="Search_line9.php">9호선</a></li>
            </ul>
        </div>
    </div>
    </div>

    <div class="searchbox" >

    <img id="introimg" border="0">
    </div>
    


<!--통계-->

<div class=statics>
    
    <canvas id="graphCanvas" ></canvas>
    
    <script>
            $(document).ready(function () {
            showGraph();
        });

        function showGraph()
        {
            {
                $.post("data.php",
                function (data)
                {
                    console.log(data);
                    var district= [];
                    var population = [];

                    for (var i in data) {
                        district.push(data[i].district);
                        population.push(data[i].population);
                    }

                    var chartdata = {
                        labels: district,
                        datasets: [
                            {
                                label: 'population',
                                backgroundColor: 'white',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: population
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
    </script>
</div>
<script>
    $(function () {
    
        // 왼쪽메뉴 드롭다운
        $(".Ku ul.specific_ku").hide();
        $(".Ku ul.Ku_list").click(function () {
            $("ul", this).slideToggle(300);
        });
        // 외부 클릭 시 좌측 사이드 메뉴 숨기기
        $('.overlay').on('click', function () {
            $('.left_sub_menu').fadeOut();
            $('.hide_sidemenu').fadeIn();
        });
    });
</script>
</body>