<?php
require("include/sql_query.php");
require("discuss/discuss_sql_query.php");
require("global/constant.php");
require("global/topbar.php");
require("video/video_query.php");
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Treiber</title>
		<link href="css/settings.css" rel="stylesheet" type="text/css" />
		<link href="discuss/css/settings.css" rel="stylesheet" type="text/css"/>
		<style>
			.V{
				width:1000px;
				height:400px;
				background-color:rgba(0,0,0,0.6);
				margin:auto;
			}
			.V_row{
				width:500px;
				height:400px;
				float:left;
			}
			.V_row_r{
				width:250px;
				height:400px;
				float:left;
			}
			.video_main{
				width:480px;
				min-height:150px;
				background-color:rgba(0,0,0,0.2);
				margin-left:auto;
				margin-top:20px;
				box-shadow:1px 1px 8px rgba(0,0,0,0.4);
			}
			.video{
				width:200px;
				min-height:126px;
				background-color:rgba(0,0,0,0.2);
				margin:auto;
				margin-top:20px;
				font-size:10px;
				box-shadow:1px 1px 6px rgba(0,0,0,0.4);
			}
			.V a{
				color:#ffffff;
				text-decoration:none;
			}
			.parts_title{
				width:1000px;height:40px;
			}
			parts_title a{
				text-decoration:none;
			}
			.parts_title_A{
				width:100px;height:20px;
				margin-top:10px;
				margin-left:10px;
				line-height:20px;text-align:center;
				background-color:rgba(210,196,229,0.7);
				color:#ffffff;
				border-radius:4px;
				box-shadow:1px 1px 3px #000000;
				float:left;
			}
			.parts_title_B{
				width:100px;height:20px;
				margin-top:10px;
				margin-left:10px;
				line-height:20px;text-align:center;
				background-color:rgba(210,196,229,0.7);
				color:#ffffff;
				border-radius:4px;
				box-shadow:1px 1px 3px #000000;
				float:right;
			}
		</style>
	</head>
<body background="<?php print_bg();?>">
<?php
	print_videotopbar(find_path($_COOKIE["user"]));
	///////////////////////////////////////////
	$result=get_video_list(0,5);
	$ans=array();
	for($i=0;$i<5;$i++)
	{
		$ans[$i]=mysql_fetch_array($result);
		//print_r($ans[$i]);
		//echo "<br>";
	}
?>              
<div class="main">
    <div class="banner">
    	<?php print_banner();?>
    </div>
    <div class="parts_title">
    	<div class="parts_title_A">Video</div>
    	<div class="parts_title_B"><a href="video/video_list.php">More&gt;&gt;</a></div>
    </div>
    <div class="V">
    	<div class="V_row">
    		<div class="video_main"><a href="video/video.php?vid=<?php echo $ans[0]["vid"];?>">
						<img src="video/<?php echo $ans[0]["cover"];?>" style="width:480px;height:300px;">
						<p><?php echo "[".$ans[0]["uid"]."]".$ans[0]["title"];?></p>
					</a>
				</div>
    	</div>
			<div class="V_row">
				<div class="V_row_r">
					<div class="video">
						<a href="video/video.php?vid=<?php echo $ans[1]["vid"];?>">
							<img src="video/<?php echo $ans[1]["cover"];?>" style="width:200px;height:126px;">
							<p><?php echo "[".$ans[1]["uid"]."]".$ans[1]["title"];?></p>
						</a>
					</div>
					
					<div class="video">
						<a href="video/video.php?vid=<?php echo $ans[2]["vid"];?>">
							<img src="video/<?php echo $ans[2]["cover"];?>" style="width:200px;height:126px;">
							<p><?php echo "[".$ans[2]["uid"]."]".$ans[2]["title"];?></p>
						</a>
					</div>
				</div>
				<div class="V_row_r">
				<div class="video">	
						<a href="video/video.php?vid=<?php echo $ans[3]["vid"];?>">
							<img src="video/<?php echo $ans[3]["cover"];?>" style="width:200px;height:126px;">
							<p><?php echo "[".$ans[3]["uid"]."]".$ans[3]["title"];?></p>
						</a>
					</div>
					
					<div class="video">
						<a href="video/video.php?vid=<?php echo $ans[4]["vid"];?>">
							<img src="video/<?php echo $ans[4]["cover"];?>" style="width:200px;height:126px;">
							<p><?php echo "[".$ans[4]["uid"]."]".$ans[4]["title"];?></p>
						</div>
					</div>
				</a>
			</div>
				
    </div>
    <br>
    <hr style="width:96%;margin:auto">
    <br>
    <div class="parts_title">
    	<div class="parts_title_A">Discuss</div>
    	<div class="parts_title_B"><a href="discuss/discuss.php">More&gt;&gt;</a></div>
    </div>
    <div class="discuss">
			<?php
			$result=get_list(0,5,1);
			$n=mysql_num_rows($result);
			for($i=0;$i< $n;$i++)
			{
				$ans=mysql_fetch_array($result);
				if($ans["uid"])
    		{
    			$sub_discuss= "<div class=\"discuss_line\"><div class='discuss_line_A'>";
    			$sub_discuss.=("[<a style='color:#d36f6f' href='user_personal_page.php?user=".$ans["uid"]."'>".$ans["uid"]."</a>]");
    			$sub_discuss.=("<a href='discuss/article.php?aid=".$ans["aid"]."'>".$ans["title"]."</a>");
    			$sub_discuss.="</div>";//end of discuss_line_A;
					$sub_discuss.="<div class='discuss_line_B'>".$ans["establish_date"]." | ".$ans["update_date"]."</div>";
					$sub_discuss.="</div>";
    			echo $sub_discuss;
    		}
    		else
    			continue;
			}
			?>
		</div>
		<br>
		<hr>
		<br>
</div>

<?php
	require("global/author.php");
	author();
?>
</body>
</html>