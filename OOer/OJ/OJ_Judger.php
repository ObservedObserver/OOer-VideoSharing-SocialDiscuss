<?php 
$username=$_COOKIE["user"];
$cpp_url="cpp/".$username.".cpp";
$program=$_FILES["program"];
move_uploaded_file($program["tmp_name"],$cpp_url);
passthru($cpp_url);
?>
