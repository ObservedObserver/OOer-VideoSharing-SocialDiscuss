<html>
	<head>
		<title>Checking</title>
		<link href="css/settings.css" rel="stylesheet" type="text/css" />  
	</head>
	<body bgcolor="#4a4a4a">
		<div class="bg">
			<img src="image/wrongpd.png" style="width:480px;height:400px">
			YOUR PASSWORD IS WRONG!!
		</div>
		<?php
	require("global/author.php");
	author();
?>
	</body>
</html>
<?php
$uid=$_POST["uid"];
$passwd=$_POST["passwd"];
define("PATH","C:/AppServ/www/OOer/");
require(PATH."config/config.php");
$sql_ip=SQL_IP;
$sql_user=SQL_USER;
$sql_password=SQL_PASSWD;
$link=mysql_connect($sql_ip,$sql_user,$sql_password);
mysql_query("use ooer;");
$que="select password from ooer_users where uid='".$uid."';";
$result=mysql_query($que);
$ans=mysql_fetch_array($result);
if($ans["password"]==md5($passwd))
{
    //echo "Login Successful!";
    $cookie_name="user";
    $cookie_value=$uid;
    setcookie($cookie_name,$cookie_value,time()+3600*24*3);
    $url = "mainpage.php";  
    header("location:$url");
}
    
else 
{
	header("Refresh:1;url=login.php");
}
    
?>
