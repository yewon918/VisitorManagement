<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인 페이지</title>
    <link rel="stylesheet" href="./Login.css" type="text/css" media="all" />
    <script src="Login.js" type="text/javascript"></script>
</head>
<body>
<header>
    <!-- 공통모듈 lib -->
    <!-- <?php include "./header.php"; ?> -->
    </header>

    <div id="container" class="main_container">
        <!--여기에 백그라운드 사진 넣기-->
        <div style="padding: 20px;"></div>
        <div class="login_container">
            <div class="form_container">
                <form name="login_form" action="Check_Login.php" method="post">
                    <div class="form_title_div">
                        <p class="form_title_p">Login For Administor</p>
                    </div>
                    <div>
                        <div>
                            <a class="form_item_name">ID</a>
                        </div>
                        <div>
                            <input type="text" name="ID" placeholder="ID" class="form_input"/>
                        </div>
                        <div class="form_text_alert_padding">
                            <div id="alert_ID" class="form_text_alert"></div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a class="form_item_name">Password</a>
                        </div>
                        <div>
                            <input type="text" name="Password" placeholder="Password" class="form_input"/>
                        </div>
                        <div class="form_text_alert_padding">
                            <div id="alert_Password" class="form_text_alert"></div>
                        </div>
                    </div>
                    
                    
                    <div style="height: 10px;"></div>
                    <div>
                        <button type="submit" class="form_submit_button" onclick="login()">로그인</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>