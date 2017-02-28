<html>
<head>
	<title>article</title>
	<link href="css/chocolate.css" rel="stylesheet" type="text/css">
	<meta charset="UTF-8">
</head>
<body background="/OOer/image/ea_bg.jpg">
<form action="est_article_sql.php" method="post" enctype="multipart/form-data">
	<div class="choc_main">
		<div class="choc_sm_banner">
			<img src="../image/index_banner.jpg" style="width:100%;height:100%">
		</div>
		<div class="choc_main_line">
			<div class="choc_main_line_left">Title </div>
			<div class="choc_main_line_right">
				<input type="text" name="title" class="choc_intext">
			</div>
		</div>
		<div class="choc_main_line">
			<p style="text-algin:center;font-size:10px;line-height:12px">
			上传视频后将此段代码复制到文章内容中，根据需求自行调整参数即可。
			暂时仅支持mp4格式的视频上传；点击提交后请耐心等待，页面上传完毕会自动跳转，Chrome浏览器左下角会显示上传进度
			</p>
			<p style="text-algin:center;font-size:10px;line-height:12px;color:#de4d7a">
			<strong>视频代码:</strong><br>
				&lt;video style="width:1000px;height:563px" autoplay="autoplay" controls&gt;
				&lt;source src="video/用户ID_文章题目.mp4" type="video/mp4"&gt;
				&lt;/video&gt;
			</p>
			<p style="text-algin:center;font-size:10px;line-height:12px;color:#5ce0cc">
				<strong>图片代码:</strong><br>
				&lt;img src="图片地址" style="width:长度;height:宽度"&gt;
			</p>
		</div>
		<div class="choc_main_line">
			<input type="file" name="video" style="margin-top:20px;margin-left:60px">
		</div>
		<div class="choc_main_line">
			<input type="submit" name="Finish" class="choc_BO">
		</div>
	</div>
	
	<div class="choc_article">
		<textarea name="article" style="width:100%;height:100%">Write your article here!</textarea>
	</div>
	<div class="iconn">
		<a href="discuss.php">
			<img src="/OOer/image/icon/candy.png">
		</a>
	</div>
</form>
</body>
</html>
