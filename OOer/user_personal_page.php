<?php
//echo "This is your home page!"."</br>";
//print_r($_COOKIE);
require("include/sql_query.php");
require("global/constant.php");
require("global/topbar.php");
/*
function find_user($uid)
{
    $sql_ip="localhost";
    $sql_user="root";
    $sql_passwd="LChina7988";
    $link=mysql_connect($sql_ip,$sql_user,$sql_passwd);
    mysql_query("use ooer;");
    $que="select username from ooer_users where uid='".$uid."';";
    $result=mysql_query($que);
    $sql_info=mysql_fetch_array($result);
    return $sql_info["username"];
}
*/
if($_GET["user"])
{
	$uid=$_GET["user"];
  $username=find_user($uid);
}
else
{
	if(isset($_COOKIE["user"]))
	{
    //echo "You are".$_COOKIE["user"];
    $uid=$_COOKIE["user"];
    $username=find_user($uid);
	}
	else 
    header("location:login.php");
}

    
?>
<html>
<head>
    <title><?php echo "Welcome $uid"?></title>
    <link href="css/settings.css" rel="stylesheet" type="text/css" />
	<meta charset="UTF-8">
</head>
<body background="<?php print_bg();?>">
<?php
	print_topbar(find_path($uid));
?>              
<div class="main">
    <div class="banner">
	<?php print_banner();?>
   <!-- 
<img src="image/banner.jpeg" width="1000px" height="300px">
-->
    </div>
    <div class="page_list">
    	<div class="page_name"><a href="OJ/OJ.php">OJ</a></div>
    	<div class="page_name"><a href="#">Home Page</a></div>
    	<div class="page_name"><a href="http://10.135.0.188/moodle">Moodle</a></div>
    	<div class="page_name"><a href="discuss/discuss.php">discuss</a></div>
    	<div class="page_name"><a href="http://10.135.0.187">OwnCloud</a></div>
    </div>
    <div class="person">
        <div class="person_image">
	<?php //if(!find_path($uid))echo "点击右侧Edit上传头像～";//未来由于文件损毁会导致显示BUG?>
        <img src="<?php echo find_path($uid)?>" class="profile">
        </div>
        <div class="person_info">
        <table width="600px" height="80px" border="1"  class="gridtable">
            <tr>
                <td>ID:<?php echo $uid?></td>
                <td>UserName:<?php echo $username?></td>
            </tr>
            <tr>
                <td>AGE:<?php 
                	$user_data=find_data($uid);
                	echo $user_data["age"];
                	?></td>
                <td>Email:<?php
                	echo $user_data["email"]
                	?></td>
            </tr>
        </table>
        <?php
        if($_COOKIE["user"]==$uid)
        	echo "<a style='color:#d39ba1' href='edit.php'>Edit</a>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo "<a style='color:#40d1b1' href='logout.php'>Logout</a>"; 
        ?>
        </div>
    </div>
    <div class="person_state">
    <h2 style="text-align:center">Personal Statement</h2>
	<hr style="width:80%;margin:auto"> 
    <p>
    <?php 
    echo $user_data["intro"];
    ?>
    </p>
    </div>
</div>
<?php
	require("global/author.php");
	author();
?>
</body>
</html>
