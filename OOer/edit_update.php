<?php
require("include/sql_query.php");
//$personal_data=find_data($_POST["user"]);
$username=$_POST["username"];
$email=$_POST["email"];
$age=$_POST["age"];
$intro=$_POST["intro"];

//function update($uid,$age,$email,$username)
update($_COOKIE["user"],$age,$email,$username,$intro);

$pic_info=$_FILES["pic"];

//print_r($_FILES["pic"]);
//Array ( [name] => [type] => [tmp_name] => [error] => 4 [size] => 0 ) 
//Array ( [name] => miku.png [type] => image/png [tmp_name] => C:\Windows\Temp\phpEB78.tmp [error] => 0 [size] => 371053 ) 
if($pic_info["name"])
{
	$img_path=find_path($_COOKIE["user"]);
	if($img_path)
		unlink($img_path);
	$pic=$_FILES["pic"];
	$ext=explode(".",$pic["name"]);
	$tail_name=end($ext);
	$upload_name=$_COOKIE["user"].".".$tail_name;
	$upload_url="upload/".$upload_name;
	update_path($_COOKIE["user"],$upload_url);
	move_uploaded_file($pic["tmp_name"],$upload_url);
}
//if($Age)
header("location:user_personal_page.php");

?>