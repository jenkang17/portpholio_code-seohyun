<?php
$search_id = $_POST["search_id"];

include "../inc/dbcon.php";

$sql = "select uid from excelbeef where uid='".$search_id."';";

$result = mysqli_query($dbcon, $sql);

$row = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<title>아이디 검색결과</title>
<link rel="stylesheet" type="text/css" href="../css/id_search.css">
<?php if(!$row){ ?>
<script type="text/javascript">
function return_id(){
	opener.document.getElementById("uid").value = "<?php echo $search_id; ?>";
	window.close();
};
</script>
<?php }; ?>
</head>
<body>
<h2>"<?php echo $search_id; ?>" 검색결과</h2>
<?php if(!$row){ ?>
<p><span>&#39;사용 가능&#39;</span>한 아이디입니다.</p>
<a href="" onclick="return_id()" onclick="window.close()">사용하기</a>
<?php } else { ?>
<p><span>&#39;중복된&#39;</span> 아이디입니다.</p>
<a href="javascript:history.back()">다시검색</a>
<?php }; ?>
</body>
</html>
<?php
mysqli_close($dbcon);
?>