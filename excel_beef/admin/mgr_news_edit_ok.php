<?php
session_start();
$sid = isset($_SESSION["uid"])? $_SESSION["uid"]:"";

$idx = $_POST["idx"];
$uid = $_POST["id"];
$title = $_POST["title"];
$cont = $_POST["content"];
$thumb = $_POST["thumbnail"];
$file = $_POST["getFile"];

include "../inc/dbcon.php";

$sql = "update news set uid ='$uid', title='$title', cont='$cont', thumbnail='$thumb', file='$file' where idx = '$idx';";
mysqli_query($dbcon,$sql);
mysqli_close($dbcon);

echo "
<script type='text/javascript'>
alert('수정되었습니다.');
location.href='mgr_news_event.php';
</script>
";
?>