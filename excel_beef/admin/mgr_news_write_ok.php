<?php
session_start();
$sid = isset($_SESSION["uid"])? $_SESSION["uid"]: "";

$uid = $_POST["id"];
$title = $_POST["title"];
$cont = $_POST["content"];
$thumbnail = $_POST["thumbnail"];
$file = $_POST["getFile"];
$reg_date = date("y-m-d");

include "../inc/dbcon.php";

$sql = "insert into news(uid,title,cont,thumbnail,file,reg_date) values('$uid','$title','$cont','$thumbnail','$file','$reg_date');";

//echo $sql;

mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

echo "
	<script type='text/javascript'>
  alert('게시글이 업데이트 되었습니다.');
	 location.href='mgr_news_event.php';
	</script>
";
?>