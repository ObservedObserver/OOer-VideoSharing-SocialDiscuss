<?php
require("include/sql_query.php");
$username=find_user($_COOKIE["user"]);
$personal_data=find_data($_COOKIE["user"]);
$username=$personal_data["username"];
$age=$personal_data["age"];
$email=$personal_data["email"];
$intro=$personal_data["intro"];

?>
<html>
<head>
<title>Edit</title>
<link href="css/settings.css" rel="stylesheet" type="text/css" />
<meta charset="UTF-8">
</head>
<body background="image/index_bg.jpg">
<form action="edit_update.php" method="post" enctype="multipart/form-data">
<div class="form_bg">
    <div class="form_line">
        <div class="form_key">UserName:</div>
        <div class="form_text"><input type="text" class="edit_intext" name="username" value="<?php echo $username ?>"></div>
    </div>
    <div class="form_line">
        <div class="form_key">Age:</div>
        <div class="form_text"><input type="text" class="edit_intext" name="age" value="<?php echo $age ?>"></div>
    </div>
    <div class="form_line">
        <div class="form_key">Email:</div>
        <div class="form_text"><input type="text" class="edit_intext" name="email" value="<?php echo $email?>"></div>
    </div>
    <div class="form_line">
        <div class="form_key">Image:</div>
        <div class="form_text"><input type="file" name="pic" style="margin-top:20px"></div>
    </div>
    <div class="form_line_intro">
    	Introduction:
    	<textarea style="width:380px;height:100px;margin-left:10px;" name="intro"><?php echo $intro;?></textarea>
    </div>
    <div class="form_line">
        <input type="submit" value="submit" class="login_BO">
    </div>
    
</div>
<div class="im">
	<img src="<?php echo find_path($_COOKIE["user"])?>" width="200px" height="200px">
</div>
</form>

</body>
</html>
