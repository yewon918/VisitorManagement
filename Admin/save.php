<?php
    $con = mysqli_connect("localhost", "ferrydraw", "hsh0729!", "ferrydraw");
    mysqli_query($con,'SET NAMES utf8');

    $ID = $_POST["ID"];
    $profileimage = $_POST["profileimage"];

    mysqli_query($con, "UPDATE signeduser_table SET profileimage = '$profileimage' WHERE ID = '$ID'");

    $response = array();
    $response["success"] = ture;

    echo json_encode($response);
?>