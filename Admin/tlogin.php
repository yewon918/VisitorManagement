<?php
session_start();
$conn=mysqli_connect('localhost','root','root','path');

    if (isset($_POST['user_id'])&&isset($_POST['userpw'])){
        $user_id=$_POST['user_id'];
        $userpw=$_POST['userpw'];

        $sql="select * from user where user_id='$user_id'&&password='$userpw'";

        if($result=mysqli_fetch_array(mysqli_query($conn, $sql))){
          
            $_SESSION['user_id']=$user_id;
            if(isset($_SESSION['user_id'])){
            ?>      <script>
                            alert("로그인 되었습니다.");
                            location.replace("./Main.php");
                    </script>
<?php
            }
            else{
                    echo "session fail";
            }
    }

    else {
?>              <script>
                    alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                    history.back();
            </script>
<?php
    }

}

    else{
?>              <script>
            alert("아이디 혹은 비밀번호가 잘못되었습니다.");
            history.back();
    </script>
<?php
}


?>