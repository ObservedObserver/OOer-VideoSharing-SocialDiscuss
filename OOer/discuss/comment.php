<?php
require("discuss_sql_query.php");
require("../global/constant.php");
require("../include/sql_query.php");
        require("../global/topbar.php");
?>
<html>
	<head>
		<link href="css/settings.css" rel="stylesheet" type="text/css" />
		<link href="../css/settings.css" rel="stylesheet" type="text/css" />
		<meta charset="UTF-8">
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
    
    <div class="discuss">
    	<div class="article_title">
    		<?php
    		$article=get_article($_POST["aid"]);
    		echo $article["title"];
    		?>
    	</div>
    	<div class="article_info">
    		<div class="article_info_parts">Author:<?php echo $article["uid"]?></div>
    		<div class="article_info_parts">Establish Date:<?php echo $article["establish_date"]?></div>
    		<div class="article_info_parts">Update Date:<?php echo $article["update_date"]?></div>
    		<div class="article_info_parts">
    			<?php
    			if($_COOKIE["user"]==$article["uid"])//原文作者可以编辑文章
    				echo "<a href='edit_article.php?aid=".$_POST["aid"]."'>Edit</a>";
    			?>
    			
    		</div>
    	</div>
    	<div class="article_text">
    		<?php echo $article["article"]?>
    	</div>
    </div>
    <form action="make_comment.php" method="post"> 
    	<input type="hidden" value="<?php echo $_POST["aid"]?>" name="aid">
    <div class="comments">
    	<div class="comments_title">
    			  Comments  <input type="submit" value="comment" style="width:70px;height:36px">
    	</div>
    	<div class="comments_edit" id="F">
    	<textarea class="text_edit" name="content"></textarea>
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
