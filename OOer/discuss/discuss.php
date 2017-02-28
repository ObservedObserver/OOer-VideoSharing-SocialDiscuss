<?php
require("discuss_sql_query.php");
require("../include/sql_query.php");
require("../global/constant.php");
require("../global/topbar.php");
define("PAGE_ARTICLE_NUM","20");
//head_id=total-(Page_num-1)*20;
if(isset($_GET["page"]))
	$Page_num=$_GET["page"];
else
	$Page_num=1;
$article_num=get_article_num();
//echo $article_num;
$head_aid=1+($Page_num-1)*PAGE_ARTICLE_NUM;//$article_num-($Page_num-1)*10;
class stack
{
	public $S=array();
	public $top=0;
	public function Push($num)
	{
		$this->S[$this->top]=$num;
		$this->top++;
	}
	public function pop()
	{
		$this->top--;
		return $this->S[$this->top];
	}
}
?>
<html>
	<head>
		<title>discuss</title>
		<meta charset="UTF-8">
		<link href="css/settings.css" rel="stylesheet" type="text/css" />
		<link href="../css/settings.css" rel="stylesheet" type="text/css" />
	</head>
<body background="<?php print_bg();?>">
<?php
	print_topbar(find_path($_COOKIE["user"]));
?>
<!--
	<div class="fixed_iconn">
		<a href="est_article.php">
			<img src="/OOer/image/icon/candy.png">
		</a>
	</div>
-->
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
    	<?php
    	$N=mysql_num_rows(mysql_query("select * from ooer_discuss;"));
	function f($TOT,$x)
	{
		return $TOT-$x+1;
	}
	    ////////////////////顶置贴//////////////////////
	    $result=get_list(0,get_article_num(),2);
			$n=mysql_num_rows($result);
			for($i=0;$i< $n;$i++)
			{
				$ans=mysql_fetch_array($result);
				if($ans["uid"])
    		{
    			$sub_discuss= "<div class=\"discuss_line\"><div class='discuss_line_A'>";
    			$sub_discuss.=("[<a style='color:#d36f6f' href='../user_personal_page.php?user=".$ans["uid"]."'>".$ans["uid"]."</a>]");
    			$sub_discuss.=("<a style='color:#41eaa8' href='article.php?aid=".$ans["aid"]."'>".$ans["title"]."</a>");
    			$sub_discuss.="</div>";//end of discuss_line_A;
					$sub_discuss.="<div class='discuss_line_B'>".$ans["establish_date"]." | ".$ans["update_date"]."</div>";
					$sub_discuss.="</div>";
    			echo $sub_discuss;
    		}
    		else
    			continue;
			}
			/////////////////////普通帖/////////////////////
			$result=get_list($head_aid-1,PAGE_ARTICLE_NUM,1);
			$n=mysql_num_rows($result);
			for($i=0;$i< $n;$i++)
			{
				$ans=mysql_fetch_array($result);
				if($ans["uid"])
    		{
    			$sub_discuss= "<div class=\"discuss_line\"><div class='discuss_line_A'>";
    			$sub_discuss.=("[<a style='color:#d36f6f' href='../user_personal_page.php?user=".$ans["uid"]."'>".$ans["uid"]."</a>]");
    			$sub_discuss.=("<a href='article.php?aid=".$ans["aid"]."'>".$ans["title"]."</a>");
    			$sub_discuss.="</div>";//end of discuss_line_A;
					$sub_discuss.="<div class='discuss_line_B'>".$ans["establish_date"]." | ".$ans["update_date"]."</div>";
					$sub_discuss.="</div>";
    			echo $sub_discuss;
    		}
    		else
    			continue;
			}
			/*
    	$result=get_queue(f($N,$head_aid+PAGE_ARTICLE_NUM-1),f($N,$head_aid));
    	$n=mysql_num_rows($result);
    	$st=new stack;
    	for($i=0;$i< $n;$i++)
    	{
    		$ans=mysql_fetch_array($result);
    		$st -> Push($ans);
    	}
    	for(;$st->top > 0;)
    	{
    		$ans=$st->POP();
    		if($ans["uid"])
    		{
    			$sub_discuss= "<div class=\"discuss_line\"><div class='discuss_line_A'>";
    			$sub_discuss.=("[<a style='color:#d36f6f' href='../user_personal_page.php?user=".$ans["uid"]."'>".$ans["uid"]."</a>]");
    			$sub_discuss.=("<a href='article.php?aid=".$ans["aid"]."'>".$ans["title"]."</a>");
    			$sub_discuss.="</div>";//end of discuss_line_A;
			$sub_discuss.="<div class='discuss_line_B'>".$ans["establish_date"]." | ".$ans["update_date"]."</div>";
			$sub_discuss.="</div>";
    			echo $sub_discuss;
    		}
    		else
    			continue;
    	}
    	*/
    	?>
    	
    </div>
    <div class="dira">
    	<div class="dira_parts">页码:<?php 
					 $T_P=(int)(($article_num-0.1)/PAGE_ARTICLE_NUM+1);
					echo $Page_num."/".$T_P ?></div>
    	<div class="dira_parts"><a href="discuss.php?page= <?php
		//$T_P=(int)(($article_num-0.1)/PAGE_ARTICLE_NUM+1); 
    		if($Page_num==$T_P)
    		{
    			$tran=$Page_num;
    		}
    		else
    		{
    			$tran=$Page_num+1;
    		}
    		echo $tran;
    		?>">下一页</a></div>
    	<div class="dira_parts"><a href="discuss.php?page= <?php
    		if($Page_num==1)
    		{
    			$tran=$Page_num;
    		}
    		else
    		{
    			$tran=$Page_num-1;
    		}
    		echo $tran;
    		?>">上一页</a></div>
    </div>
  </div>
  <?php
	require("../global/author.php");
	author();
?>
	</body>
</html>
