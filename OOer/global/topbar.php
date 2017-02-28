<?php
function print_topbar($img_path)
{
echo "<div class='top_test'>";
        echo "<div class='top_left' style='margin-left:10%'>";
                echo "<a href='/OOer/mainpage.php'>主页</a>";
        echo "</div>";
        echo "<div class='top_left'>";
                echo "<a href='/OOer/discuss/discuss.php'>论坛</a>";
        echo "</div>";
        echo "<div class='top_left'>";
                echo "<a href='http://10.135.0.187'>网盘</a>";
        echo "</div>";
        echo "<div class='top_left'>";
                echo "<a href='http://10.135.0.188/moodle'>课程</a>";
        echo "</div>";
	echo "<div class='top_left'>";
                echo "<a href='/OOer/OJ/OJ.php'>OJ</a>";
        echo "</div>";

        echo "<div class='top_right' style='margin-right:10%'>";
                echo "<a href='/OOer/logout.php'>登出</a>";
        echo "</div>";
        echo "<div class='top_right'>";
                echo "<div class='top_image'>";
                	echo "<a href='/OOEr/user_personal_page.php'>";
                       echo "<img style='width:100%;height:100%' src='/OOer/".$img_path."'>";
                	echo "</a>";
                echo "</div>";
        echo "</div>";
        echo "<div class='top_right'>";
                echo "<a href='/OOer/edit.php'>编辑</a>";
        echo "</div>";
        echo "<div class='top_right'>";
                echo "<div class='publish'>";
                echo "<a href='/OOer/discuss/est_article.php'>发帖</a>";
                echo "</div>";
        echo "</div>";
echo "</div>";
}
function print_banner()
{
	echo "<img src='/OOer/image/earth.jpg' style='width:100%;height:100%;box-shadow:0px 0px 2px #000000'>";
}
function print_bg()
{
	echo "/OOer/image/star.jpeg";
}
function print_banner_info()
{

}
function print_videotopbar($img_path)
{
echo "<div class='top_test'>";
        echo "<div class='top_left' style='margin-left:10%'>";
                echo "<a href='/OOer/mainpage.php'>主页</a>";
        echo "</div>";
        echo "<div class='top_left'>";
                echo "<a href='/OOer/discuss/discuss.php'>论坛</a>";
        echo "</div>";
        echo "<div class='top_left'>";
                echo "<a href='http://10.135.0.187'>网盘</a>";
        echo "</div>";
        echo "<div class='top_left'>";
                echo "<a href='http://10.135.0.188/moodle'>课程</a>";
        echo "</div>";
	echo "<div class='top_left'>";
                echo "<a href='/OOer/OJ/OJ.php'>OJ</a>";
        echo "</div>";

        echo "<div class='top_right' style='margin-right:10%'>";
                echo "<a href='/OOer/logout.php'>登出</a>";
        echo "</div>";
        echo "<div class='top_right'>";
                echo "<div class='top_image'>";
                	echo "<a href='/OOEr/user_personal_page.php'>";
                       echo "<img style='width:100%;height:100%' src='/OOer/".$img_path."'>";
                  echo "</a>";
                echo "</div>";
        echo "</div>";
        echo "<div class='top_right'>";
                echo "<a href='/OOer/edit.php'>编辑</a>";
        echo "</div>";
        echo "<div class='top_right'>";
                echo "<div class='publish'>";
                echo "<a href='/OOer/video/upload.php'>投稿</a>";
                echo "</div>";
        echo "</div>";
echo "</div>";
}
?>
