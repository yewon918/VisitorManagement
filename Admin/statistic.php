<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="statistic.css">
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <title>Document</title>
</head>
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
        
    <!--통계-->
    
   <div class="content">
        <div class=statics>

        <canvas id="bar-chart" ></canvas>
        <script>
            new Chart(document.getElementById("bar-chart"), {
                type: 'bar',
                data: {
                labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
                datasets: [
                    {
                    label: "Population (millions)",
                    backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                    data: [2478,5267,734,784,433]
                    }
                ]
                },
                options: {
               
                legend: { display: false },
                title: {
                    display: true,
                    text: 'Predicted world population (millions) in 2050'
                }
                }
            });
        </script>
        </div>
   </div>



</body>
</html>