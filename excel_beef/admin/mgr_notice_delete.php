<?php
session_start();
$sid = isset($_SESSION["uid"])? $_SESSION["uid"] : "";

$idx = $_GET["idx"];

$sql = "delete from notice where idx='$idx';";

include "../inc/dbcon.php";

mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

unset($_SESSION["idx"]);

echo "
	<script type='text/javascript'>
  alert('게시글이 삭제 되었습니다.');
	 location.href='mgr_notice.php';
	</script>
";
?>