<?php
define("PATH","C:/AppServ/www/OOer/");
require(PATH."config/config.php");
$sql_ip=SQL_IP;
$sql_user=SQL_USER;
$sql_passwd=SQL_PASSWD;
$link=mysql_connect($sql_ip,$sql_user,$sql_passwd);
function find_user($uid)
{
    
    mysql_query("use ooer;");
    $que="select username from ooer_users where uid='".$uid."';";
    $result=mysql_query($que);
    $sql_info=mysql_fetch_array($result);
    return $sql_info["username"];
}
function find_data($uid)
{
	mysql_query("use ooer");
	//$que="select * from ooer_users where uid= $uid ;";
	$que="select * from ooer_users where uid='".$uid."';";
	$result=mysql_query($que);
	return mysql_fetch_array($result);
}
function find_path($uid)
{
	mysql_query("use ooer");
	//$que="select * from ooer_users where uid= $uid ;";
	$que="select * from ooer_users where uid='".$uid."';";
	$result=mysql_query($que);
	$sql_info=mysql_fetch_array($result);
	return $sql_info["picture"];
}
function update_path($uid,$new_path)
{
	mysql_query("use ooer");
	$que="update ooer_users set picture= '".$new_path."' where uid='".$uid."';";
	mysql_query($que);
	
}
function update($uid,$age,$email,$username,$intro)
{
	mysql_query("use ooer");
	$que="update ooer_users 
	set username='".$username."',
	 age= '".$age."', 
	 email= '".$email."',
	 intro='".$intro."' 
	where uid='".$uid."';";
	//echo $que;
	mysql_query($que);
}
function add_user($uid,$username,$passwd)
{
    mysql_query("SET NAMES UTF8;");
    mysql_query("use ooer;");
    $str="insert into ooer_users set ";
    $str.="uid='".$uid."',";
    $str.="username='".$username."',";
    $str.="password=md5('".$passwd."'),";
    $str.="level=5;";
    mysql_query($str);
}
?>
