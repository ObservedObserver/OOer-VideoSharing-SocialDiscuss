<?php
require("../global/constant.php");//echo "The article id is:".$_GET["aid"];
require("discuss_sql_query.php");
require("../include/sql_query.php");
require("../global/topbar.php");
?>
<html>
	<head>
		<title>article</title>
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
    		$article=get_article($_GET["aid"]);
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
    				echo "<a href='edit_article.php?aid=".$_GET["aid"]."'>Edit</a>";
    			?>
    			
    		</div>
    	</div>
    	<div class="article_text">
    		<?php echo $article["article"]?>
    	</div>
    </div>
    
    <div class="comments">
    	
    	<div class="comments_OP">
    	<div class="comments_title">
    		
    		<form action="comment.php#F" method="post">
    			<input type="hidden" value="<?php echo $_GET["aid"]?>" name="aid">
    			  Comments  <input type="submit" value="comment" style="width:70px;height:36px">
    			  
    		</form>
    	</div>
    	<?php
    	if(isset($_GET["com"]))//判断当前com页码
				$com_num=$_GET["com"];
			else
				$com_num=1;
    	?>
    	<div class="comments_dir">Page#:<?php echo $com_num ?></div>
    	<div class="comments_dir"><a href="article.php?<?php 
    		$index="aid=".$_GET["aid"]."&";
    		if($com_num==1)
    			$c=$com_num;
    		else
    		 $c=$com_num-1;
    		$index.="com=".$c." ";
    		echo $index;
    		?>">Last Page</a></div>
    	<div class="comments_dir"><a href="article.php?<?php 
    		$index="aid=".$_GET["aid"]."&";
    		if($com_num==(1+(int)((count($result)-0.1)/5)))
    			$c=$com_num;
    		else
    		 $c=$com_num+1;
    		$index.="com=".$c." ";
    		echo $index;
    		?>">Next Page</a></div>
    	
    </div>
  <?php
	//head_id=total-(Page_num-1)*10;
	
	$pointer=1+($com_num-1)*5;//$article_num-($Page_num-1)*10;

	$result=get_cqueue($_GET["aid"]);//截取comments字段记录到result数组
	?>
    	<?php
    	//$com_id=explode(',',$article["comments"]);
    	//print_r($com_id);

    	for($i=$pointer-1;$i< $pointer+5&&$i< count($result);$i++)
    	{
    		$cid=$result[$i];
    		if(!$cid)break;
    		$content=get_content($cid);
    		//print_r($cid);
    		$img_path=find_path($content["uid"]);
    		$com="<div class=\"comments_parts\"><div class=\"comments_parts_img\">";
    		$com.="
    		<a href='../user_personal_page.php?user=".$content["uid"]."'>
    		<img src='/OOer/".$img_path."' class=\"personal_img\">
    		</a>
    		</div>";
    		
    		$com.="<div class=\"comments_parts_content\">";
    			$com.="<div class=\" cid_info\"><a href='../user_personal_page.php?user=".$content["uid"]."'>";
    				$com.=$content["uid"]."</a>|".$content["establish_date"];
    			$com.="</div>";
    			$com.="<div class=\" cid_content\">";
    				$com.=$content["content"];
    			$com.="</div>";
    		$com.="</div>";
    		
    		$com.="</div>";
    		echo $com;
    		//need aid->comments->array->foreach->cid->content
    		//aid->comments==>get coments array($aid)
    		//$article["comments"]
    	} 
    	?>
    	
    	
    </div>
  </div>
  <?php
	require("../global/author.php");
	author();
?>
	</body>
</html>
