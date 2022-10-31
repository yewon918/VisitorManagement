<?php
$host = "localhost";
$user = "ferrydraw";
$pass = "hsh0729!";
$dbName = "ferrydraw";

//mysql connection
$conn = new mysqli($host, $user, $pass, $dbName);

//connection check
if($conn){
    echo "mysql 접속 성공";
}else{
    echo "접속 실패";
}

//select
$sql = "SELECT * FROM signeduser_table";
$result = mysqli_query($conn, $sql);
// while($row = mysqli_fetch_array($result)){
//     echo $row['ID']." ".$row['profileimage']."<br>";
// }

while($row = mysqli_fetch_array($result)) {
    echo $row['ID'];
    $result = array(
        'ID'=>$row['ID'],
        'ProfileImage'=>$row['profileimage']
    );
}
// 배열형식의 결과를 json으로 변환 
// echo json_encode(array("result"=>$result),JSON_UNESCAPED_UNICODE); 
$arraydata = json_encode($result);

//json decode
$arraydata = '{"ID":"example", "profileimage":"example2"}';
$data = json_decode($arraydata);

echo $data->ID;

mysqli_close($conn)
?>