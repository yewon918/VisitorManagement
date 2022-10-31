<?php
    $con = mysqli_connect("localhost", "ferrydraw", "hsh0729!", "ferrydraw");
    mysqli_query($con,'SET NAMES utf8');

    $ID = $_POST["ID"];

    $statement = mysqli_prepare($con, "SELECT * FROM signeduser_table WHERE ID = ?");
    mysqli_stmt_bind_param($statement, "s", $ID);
    mysqli_stmt_execute($statement);

    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $ID, $profileimage);

    $response = array();
    $response["success"] = false;

    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;
        $response["ID"] = $ID;
        $response["profileimage"] = $profileimage;
    }
    echo json_encode($response);
?>