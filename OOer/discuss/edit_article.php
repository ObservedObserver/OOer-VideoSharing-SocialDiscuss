<?php
require("../include/sql_query.php");
require("../global/topbar.php");
require("discuss_sql_query.php");
require("../global/constant.php");
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="css/settings.css" rel="stylesheet" type="text/css" />
		<link href="../css/settings.css" rel="stylesheet" type="text/css" />
	</head>
<body background="<?php print_bg();?>">
<?php
        print_topbar(find_path($_COOKIE["user"]));
?>
	<div class="main">
    <div class="banner">
    <?php print_banner();?>
    </div>
    <div class="page_list">
    	<div class="page_name"><a href="/OOer/OJ/OJ.php">OJ</a></div>
    	<div class="page_name"><a href="/OOer/user_personal_page.php">Home Page</a></div>
    	<div class="page_name"><a href="http://10.135.0.188/moodle">Moodle</a></div>
    	<div class="page_name"><a href="/OOer/discuss/discuss.php">discuss</a></div>
    	<div class="page_name"><a href="http://10.135.0.187">OwnCloud</a></div>
    </div>
    <form action="update_article.php" method="post">
    <div class="discuss">
    	<div class="article_title">
		Title:<input type="text" style="height:70%;width:auto;line-height:70%;text-align:center;font-size:60%" name="title" value="<?php
                $article=get_article($_GET["aid"]);
                echo $article["title"];
                ?>">
    	</div>
    	<div class="article_info">
    		<div class="article_info_parts">Author:<?php echo $article["uid"]?></div>
    		<div class="article_info_parts">Establish Date:<?php echo $article["establish_date"]?></div>
    		<div class="article_info_parts">Update Date:<?php echo $article["update_date"]?></div>
    		<div class="article_info_parts">
    		</div>
    	</div>
    	<div class="article_text">
    			<input type="hidden" name="aid" value="<?php echo $_GET["aid"]?>">
    			<textarea name="article" class="article_edit"><?php echo $article["article"]?></textarea>
    			<input type="submit" value="update" class="article_button">
    	</div>
    </div>
    </form>
  </div>
  <?php
	require("../global/author.php");
	author();
?>
	</body>
</html>
