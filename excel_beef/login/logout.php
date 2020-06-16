<?php
session_start();
unset($_SESSION["uid"]);
?>
<script>
alert("로그아웃 되었습니다.");
location.href = "../index.php";
</script>