<?php 
    $con = mysqli_connect("localhost", "ferrydraw", "hsh0729!", "ferrydraw");
    mysqli_query($con,'SET NAMES utf8');

    $Date = isset($_POST["Date"]) ? $_POST["Date"] : "";
    $Reason = isset($_POST["Reason"]) ? $_POST["Reason"] : "";
    $Person = isset($_POST["Person"]) ? $_POST["Person"] : "";
    $Place = isset($_POST["Place"]) ? $_POST["Place"] : "";

    $statement = mysqli_prepare($con, "INSERT INTO reserveform_table VALUES (?,?,?,?)");
    mysqli_stmt_bind_param($statement, "ssss", $Date, $Reason,$Person,$Place);
    mysqli_stmt_execute($statement);


    $response = array();
    $response["success"] = true;
 
   
    echo json_encode($response);
?>