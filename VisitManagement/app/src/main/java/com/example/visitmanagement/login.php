<?php
    $con = mysqli_connect("localhost", "ferrydraw", "hsh0729!", "ferrydraw");
    mysqli_query($con,'SET NAMES utf8');

    $ID = $_POST["ID"];
    $Password = $_POST["Password"];
    $statement = mysqli_prepare($con, "SELECT * FROM signeduser_table WHERE ID = ? AND Password = ?");

    mysqli_stmt_bind_param($statement, "ss", $ID, $Password);
    mysqli_stmt_execute($statement);


    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $Name,$ID, $Password,  $Phone_Num, $Belonging, $profileimage);

    $response = array();
    $response["success"] = true;

    while(mysqli_stmt_fetch($statement)) {
        $response["success"] = true;
        $response["ID"] = $ID;
        $response["Password"] = $Password;
        $response["Name"] = $Name;
        $response["Phone_Num"] = $Phone_Num;
        $response["Belonging"] = $Belonging;
        $response["profileimage"] = $profileimage;

    }

    echo json_encode($response);
?>