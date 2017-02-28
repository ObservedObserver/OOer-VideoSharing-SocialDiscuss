<?php
//function update_article($aid,$text)
require("discuss_sql_query.php");
update_article($_POST["aid"],$_POST["title"],$_POST["article"]);
header("location:discuss.php");
?>
