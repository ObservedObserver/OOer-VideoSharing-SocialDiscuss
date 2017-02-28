<html>
<head>
<title>Logout</title>
<meta charset="UTF-8">
</head>
<body>
<?php
setcookie("user","");
echo "删除Cookie"."<br>";
echo "成功登出！";
header("refresh:1;url=index.php");
?>
</body>
</html>
