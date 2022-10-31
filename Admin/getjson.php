<?php
    error_reporting(E_ALL);
    ini_set('display_errors',1);

    $con = mysqli_connect("localhost", "ferrydraw", "hsh0729!", "ferrydraw");
    // mysqli_query($con,'SET NAMES utf8');
    $host = 'localhost';
    $username = 'ferrydraw'; # MySQL 계정 아이디
    $password = 'hsh0729!'; # MySQL 계정 패스워드
    $dbname = 'ferrydraw';  # DATABASE 이름


    $Name=isset($_POST['ID']) ? $_POST['ID'] : '';
    $android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");

    try {
            $con = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8",$username, $password);
        } catch(PDOException $e) {
            die("Failed to connect to the database: " . $e->getMessage()); 
        }
        header('Content-Type: text/html; charset=utf-8'); 
        #session_start();
        $stmt=$con->prepare('select * from reserveform_table');
        $stmt->execute();
        if ($stmt->rowCount() > 0)
        {
            $data=array();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
                extract($row);
                array_push($data,
                          array(
                        //   'Name'=>$row["Name"],
                          'Date'=>$row["Date"],
                          'Place'=>$row["Place"],
//                           'Belong'=>$row["Belonging"]
                        ));
            }
            header('Content-Type:application/json; charset=utf8');
            $json=json_encode(array("ferrydraw"=>$data), JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
            echo $json;
        }
