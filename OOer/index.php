<?php
if($_COOKIE["user"])
{
	header("location:mainpage.php");
}
?>
<html>
<head>
<title>OOER</title>
<link href="css/settings.css" rel="stylesheet" type="text/css" />
<meta charset="UTF-8">
</head>
<body background="image/index_bg.jpg">
	
<div class="signup_main">
<form action="signup_process.php" method="post" enctype="multipart/form-data">
	<div class="login_sm_banner">
		<img src="image/index_banner.jpg" style="width:100%;height:100%">
	</div>
	<div  class="login_main_line">
                <p style="font-size:12px;line-height:30px;text-align:center">
		UserID为您未来登录的账号<br>
		如果您已注册，可点击右侧<strong style="color:#e05c91">糖果</strong>切换至登录页面</p>
        </div>

	<div class="login_main_line">
		<div class="login_main_line_left">UserID </div>
		<div class="login_main_line_right">
			<input type="text" name="uid" class="login_intext">
		</div>
	</div>
	<div class="login_main_line">
		<div class="login_main_line_left">DisplayName </div>
		<div class="login_main_line_right">
			<input type="text" name="username" class="login_intext">
		</div>
	</div>
	<div class="login_main_line">
		<div class="login_main_line_left">Password</div>
		<div class="login_main_line_right">
			<input type="password" name="passwd" class="login_intext">
		</div>
	</div>
	<div class="login_main_line">
		<div class="login_main_line_left">Confirm Password</div>
		<div class="login_main_line_right">
			<input type="password" name="repasswd" class="login_intext">
		</div>
	</div>
	<div class="login_main_line">
		<input type="submit" name="signup" class="login_BO">
	</div>
</form>
</div>
<div class="iconn">
	<a href="login.php">
		<img src="image/icon/candy.png">
	</a>
</div>

</body>
</html>
