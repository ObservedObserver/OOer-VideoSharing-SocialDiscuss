<?php
define("PATH","C:/AppServ/www/OOer/");
require(PATH."config/config.php");
$sql_ip=SQL_IP;
$sql_user=SQL_USER;
$sql_passwd=SQL_PASSWD;
$link=mysql_connect($sql_ip,$sql_user,$sql_passwd);
function get_article_num()
{
	mysql_query("use ooer;");
	$que="select aid from ooer_discuss order by aid desc";
	$result=mysql_fetch_array(mysql_query($que));
	return $result["aid"];
}
function get_queue($left,$right)
{
	mysql_query("use ooer;");
	$que="select * from ooer_discuss where aid>='".$left."' and aid<='".$right."';";
	$result=mysql_query($que);
	//$ans=mysql_fetch_array($result);
	return $result;
}
function get_list($start,$num,$level)
{
	mysql_query("use ooer;");
	$que="select * from ooer_discuss where level ='".$level."' order by update_date desc limit ";
	$que.=($start.",".$num);
	return mysql_query($que);
}
function get_cqueue($aid)
{
	mysql_query("use ooer;");
	$que="select * from ooer_discuss where aid='".$aid."';";
	$result=mysql_fetch_array(mysql_query($que));
	$str=explode(',',$result["comments"]);
	return $str;
}
function get_article($aid)
{
	mysql_query("use ooer;");
	$que="select * from ooer_discuss where aid='".$aid."';";
	$result=mysql_query($que);
	$ans=mysql_fetch_array($result);
	return $ans;
}
function update_article($aid,$title,$article)
{
	mysql_query("use ooer;");
	date_default_timezone_set('PRC');
	$time=date('Y-m-d H:i:s',time());
	$que="update ooer_discuss set ";
	$que.="update_date='".$time."',";
	$que.="title='".$title."',";
	$que.="article='".$article."'";
	$que.="where aid='".$aid."';";
	//echo $que;
	mysql_query($que);
}
function establish_article($uid,$title,$article)
{
	mysql_query("use ooer;");
	date_default_timezone_set('PRC');
	$time=date('Y-m-d H:i:s',time());
	$que="insert into ooer_discuss set ";
	$que.="update_date='".$time."',";
	$que.="establish_date='".$time."',";
	$que.="uid='".$uid."',";
	$que.="title='".$title."',";
	$que.="article='".$article."';";
	//echo $que;
	mysql_query($que);
}
function get_content($cid)
{
	mysql_query("use ooer;");
	$que="select * from ooer_comments where cid='".$cid."';";
	$result=mysql_query($que);
	$ans=mysql_fetch_array($result);
	return $ans;
}
function update_comments($aid,$uid,$content)
{
	mysql_query("use ooer;");
	$ins="insert into ooer_comments ";
	$ins.="set uid='".$uid."',";
	
	date_default_timezone_set('PRC');
	$time=date('Y-m-d H:i:s',time());
	$ins.="establish_date='".$time."',";
	
	$ins.="content='".$content."';";
	mysql_query($ins);
	
	$cid=mysql_num_rows(mysql_query("select * from ooer_comments;"));
	$que="select * from ooer_discuss where aid='".$aid."';";
	$result=mysql_fetch_array(mysql_query($que));
	$ans=$result["comments"];
	$ans.=($cid.',');
	mysql_query("update ooer_discuss set comments='".$ans."', update_date='".$time."' where aid='".$aid."';");
}

?>
