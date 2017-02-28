<?php
//uid,article,title
//function establish_article($uid,$,title,$article)
require("discuss_sql_query.php");
//establish_article($_COOKIE["user"],$_POST["title"],$_POST["article"]);
if($_POST["title"]==NULL)
{
	header("location:est_article.php");
	exit;
}
$video=$_FILES["video"];
if($video["name"])
{
	print_r($video);
        $ext=explode(".",$video["name"]);
        $tail_name=end($ext);
	if($tail_name!="mp4")
	{
		echo "Only accept mp4!";
		header("reflash:2;url=discuss.php");
	}
        $upload_name=$_COOKIE["user"]."_".$_POST["title"].".".$tail_name;
        $upload_url="video/".$upload_name;
	echo $upload_url;
        move_uploaded_file($video["tmp_name"],$upload_url);
}
establish_article($_COOKIE["user"],$_POST["title"],$_POST["article"]);
header("location:discuss.php");
?>
