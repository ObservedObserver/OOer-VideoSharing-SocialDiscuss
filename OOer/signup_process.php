<html>
	<head>
		<title>Checking</title>
		<link href="css/settings.css" rel="stylesheet" type="text/css" /> 
		<meta charset="UTF-8"> 
	</head>
	<body bgcolor="#4a4a4a">
		<div class="bg">
			<img src="image/wrongpd.png" style="width:480px;height:400px">
<?php
header("Content-type: text/html;charset=utf-8");
$uid=$_POST["uid"];
$username=$_POST["username"];
$passwd=$_POST["passwd"];
$repasswd=$_POST["repasswd"];
if($_POST["uid"]&&$_POST["username"]&&$_POST["passwd"]&&$_POST["repasswd"])
{
	if($passwd==$repasswd)
	{
		require("include/sql_query.php");
    add_user($uid,$username,$passwd);
    echo "success!Wait 2s!";
    header("refresh:2;url=login.php");
	}
	else 
	{
    echo "Recheck your password!";
    header("refresh:2;url=index.php");
	}
	
}
else
{
	echo "FUCK U!!";
	header("refresh:2;url=index.php");
}

?>
		</div>
	</body>
</html>
