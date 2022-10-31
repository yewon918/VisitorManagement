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
    <title>상세정보</title>
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

<body>
<table align="center" width=500 height=200 border="1"  style="margin-left: auto; margin-right: auto; width:90%; margin-top:50px;
        height: 400px; text-align:center;  background: white;
        border-radius:3px;
        border-collapse: collapse;
        height: 320px;
        max-width: 800px;
        padding:5px;
        width: 100%;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        animation: float 5s infinite; ">
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
                        vertical-align:middle;">신청일</th>
                <th style="  color:#D5DDE5;;
                        background:#1b1e24;
                        border-bottom:4px solid #9ea7af;
                        border-right: 1px solid #343a45;
                        font-size:23px;
                        font-weight: 100;
                        padding:24px;
                        text-align:center;
                        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
                        vertical-align:middle;">방문장소</th>
                <th style="  color:#D5DDE5;;
                        background:#1b1e24;
                        border-bottom:4px solid #9ea7af;
                        border-right: 1px solid #343a45;
                        font-size:23px;
                        font-weight: 100;
                        padding:24px;
                        text-align:center;
                        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
                        vertical-align:middle;">신청사유</th>
                <th style="  color:#D5DDE5;;
                        background:#1b1e24;
                        border-bottom:4px solid #9ea7af;
                        border-right: 1px solid #343a45;
                        font-size:23px;
                        font-weight: 100;
                        padding:24px;
                        text-align:center;
                        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
                        vertical-align:middle;">담당자</th>
            </tr>

            <?php
                //////////여기가 sql
                $sql="select * from reserveform_table ";
                $result = mysqli_query($conn, $sql);         
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)) { //이름을 키값으로
                        echo "<td style='background:#FFFFFF;
                        padding:20px;
                        text-align:center;
                        vertical-align:middle;
                        font-weight:300;
                        font-size:18px;
                        text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
                        border-right: 1px solid #C1C3D1;'>".$row["Date"]."</td>";
                        echo "<td style='background:#FFFFFF;
                        padding:20px;
                        text-align:center;
                        vertical-align:middle;
                        font-weight:300;
                        font-size:18px;
                        text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
                        border-right: 1px solid #C1C3D1;'>".$row['Reason']."</td>";
                        echo "<td style='background:#FFFFFF;
                        padding:20px;
                        text-align:center;
                        vertical-align:middle;
                        font-weight:300;
                        font-size:18px;
                        text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
                        border-right: 1px solid #C1C3D1;'>".$row['Person']."</td>";
                        echo "<td style='background:#FFFFFF;
                        padding:20px;
                        text-align:center;
                        vertical-align:middle;
                        font-weight:300;
                        font-size:18px;
                        text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
                        border-right: 1px solid #C1C3D1;'>".$row['Place']."</td>";
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