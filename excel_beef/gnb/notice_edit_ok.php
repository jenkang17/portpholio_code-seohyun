<?php
session_start();
$sid = isset($_SSESION["uid"])? $_SESSION["uid"]: "";

$idx = $_POST["idx"];
$title = $_POST["title"];
$content = $_POST["content"];
$file = $_POST["getFile"];

include "../inc/dbcon.php";

$sql = "update notice set title='$title', cont='$content', file='$file' where idx='$idx';";

mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

echo "
	<script type='text/javascript'>
  alert('수정 되었습니다.');
	 location.href='notice_admin.php';
	</script>
";
?>