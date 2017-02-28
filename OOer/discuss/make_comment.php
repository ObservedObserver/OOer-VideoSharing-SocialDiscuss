<?php
require("discuss_sql_query.php");
update_comments($_POST["aid"],$_COOKIE["user"],$_POST["content"]);
header("location:article.php?aid=".$_POST["aid"]." ");
?>
