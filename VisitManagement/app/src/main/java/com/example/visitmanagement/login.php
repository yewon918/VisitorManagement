<?php
    header('Context-Type: application/json');

    $con = mysqli_connect("localhost", "ferrydraw", "hsh0729!", "ferrydraw");
    mysqli_query($con,'SET NAMES utf8');
    //mysqli_set_charset($con, "utf8");

    $ID = isset($_POST["ID"]) ? $_POST["ID"] : "";
    $Password = isset($_POST["Password"]) ? $_POST["Password"] : "";
    
    $statement = mysqli_prepare($con, "SELECT * FROM signeduser_table WHERE ID = ? AND Password = ?");
    mysqli_stmt_bind_param($statement, "ss", $ID, $Password);
    mysqli_stmt_execute($statement);


    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $ID, $Password, $Name, $Phone_Num, /*$Face_Photo,*/ $Belonging);

    $response = array();
    $response["success"] = false;
 
    while(mysqli_stmt_fetch($statement)) {
        $response["success"] = true;
        $response["ID"] = $ID;
        $response["Password"] = $Password;
        $response["Name"] = $Name;
        $response["Phone_Num"] = $Phone_Num;
        //$response["Face_Photo"] = $Face_Photo;
        $response["Belonging"] = $Belonging;        
    }
    echo json_encode($response);



?>