<?php
session_start();
$sid = isset($_SSESION["uid"])? $_SESSION["uid"]: "";

$uid = $_POST["id"];
$title = $_POST["title"];
$content = $_POST["content"];
$file = $_POST["getFile"];
$reg_date = date("y-m-d");

include "../inc/dbcon.php";

$sql = "insert into notice(uid,title,cont,file,reg_date) values('$uid','$title','$content', '$file', '$reg_date');";

//echo $sql;

mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

echo "
	<script type='text/javascript'>
  alert('게시글이 업데이트 되었습니다.');
	 location.href='notice_admin.php';
	</script>
";
?>