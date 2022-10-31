<?php
    $con = mysqli_connect("localhost", "ferrydraw", "hsh0729!", "ferrydraw");
    mysqli_query($con,'SET NAMES utf8');
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $DefaultId = 0;
        $ImageData = $_POST['profileimage'];
       // $ImageName = $_POST['image_name'];
        $GetOldIdSQL ="SELECT ID FROM signeduser_table ORDER BY ID ASC";
        $Query = mysqli_query($conn,$GetOldIdSQL);
        
        while($row = mysqli_fetch_array($Query)){
            $DefaultId = $row['ID'];
        }

        $ImagePath = "images/$DefaultId.png";
        $ServerURL = "http://ferrydraw.dothome.co.kr/$ImagePath";
        $InsertSQL = "insert into signeduser_table (profileimage) values ('$ServerURL')";

        if(mysqli_query($conn, $InsertSQL)){
            file_put_contents($ImagePath,base64_decode($ImageData));
            echo "Your Image Has Been Uploaded.";
        }else{
            echo "Not Uploaded";
        }

        mysqli_close($conn);

    }
?>