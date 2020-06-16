<?php 
session_start();
$sid = isset($_SESSION["uid"])? $_SESSION["uid"]:"";

$idx = $_GET["idx"];
include "../inc/dbcon.php";
$sql = "select * from news where idx=$idx;";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);
$src = $array['file'];

?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<title>뉴스</title>
<link rel="stylesheet" type="text/css" href="../css/head.css">
<link rel="stylesheet" type="text/css" href="../css/news_sub.css">
<link rel="stylesheet" type="text/css" href="../css/foot.css">
<!--
<script type="text/javascript">
String content = request.getParameter("cont")
content = content.replace("\r\n", "<br>");
</script>
-->
</head>
<body>
<div class="skip_menu">
<a class="product" href="#product"><span>상품보기 바로가기</span></a>
<a class="brandStory" href="#brandStory"><span>브랜드 스토리 바로가기</span></a>
<a class="event" href="#event"><span>이벤트 바로가기</span></a>
<a class="news" href="#news"><span>뉴스 바로가기</span></a>
<a class="store" href="#store"><span>온라인매장 바로가기</span></a>
<a class="sns" href="#sns"><span>소셜 네트워크 바로가기</span></a>
<a class="footer" href="#footer"><span>사이트 이용정보 바로가기</span></a>
</div>
<div id="wrap" class="wrap">
<div id="header" class="header">
<h1><a href="../index.php">엑셀비프</a></h1>
<div id="gnb" class="gnb">
<h2>주요메뉴</h2>
<ul>
<li class="gm01"><a href="about_us.php">about us</a></li>
<li class="gm02"><a href="#none">product</a></li>
<li class="gm03"><a href="#none">event news</a></li>
<li class="gm04"><a href="news_event.php">notice</a></li>
<li class="gm05"><a href="notice.php">partner shop</a></li>
</ul>
</div>
<div class="top_menu">
<?php 
  if(!$sid){
?>
<ul>
<li class="tm01"><a href="../login/login.php">로그인</a></li>
<li class="tm02"><a href="#none">마이페이지</a></li>
<li class="tm03"><a href="#none">장바구니</a></li>
<li class="tm04"><a href="#none">주문확인</a></li>
<li class="tm05"><a href="../member/join.php">JOIN</a><p>3000point 적립</p></li>
</ul>
<?php
} else {
?>
<ul>
<li class="tm06"><a href="#none" onclick="log_out()">로그아웃</a></li>
<li class="tm02"><a href="#none">마이페이지</a></li>
<li class="tm03"><a href="#none">장바구니</a></li>
<li class="tm04"><a href="#none">주문확인</a></li>
</ul>
<?php 
}
?>
<?php if($sid == "admin2020"){?>
<a class="admin_page" href="../admin/admin.php">관리자페이지 바로가기</a>
<?php } ?>
</div>
<a class="search_bt" href="#none">검색열기</a>
<form name="" action="" method="" style="display:none">
<fieldset>
<legend>내장찾기</legend>
<label for="sch_txt">검색</label>
<input type="text" name="sch_txt" id="sch_txt" value="SEARCH">
<button type="submit"></button>
</fieldset>
</form>
</div>
<div id="content" class="content">
<div class="content_wrap">
<div class="location">
<span>현재위치</span>
<ul>
<li>홈&#32;&#62;</li>
<li>뉴스&#38;이벤트&#32;&#62;</li>
<li>뉴스</li>
</ul>
</div>
<div class="news">
<div class="news_header">
<p><?php echo $array["title"]; ?></p>
<ul>
<li><?php echo $array["uid"]; ?></li>
<li><?php echo $array["reg_date"]; ?></li>
<li>조회&#58;0</li>
</ul>
</div>
<div class="news_content">
<div name="cont" id="cont" class="cont" style="white-space:pre-line;"></div>
<?php echo "<img src='../images/$src'/>"; ?>
</div>
<?php if($sid == "admin2020"){?>
<a class="list_bt" href="../admin/mgr_news_event.php">목록으로</a>
<?php } else {?>
<a class="list_bt" href="news_event.php">목록으로</a>
<?php } ?>
<div class="news_list">
<ul class="next">
<li>다음글</li>
<li><a href="news_sub.php?idx=<?php echo $array[$next."title"] ?>"></a></li>
</ul>
<ul class="prev">
<li>이전글</li>
<li><a href="news_sub.php?idx=<?php echo $array[$prev] ?>"></a></li>
</ul>
</div>
</div>
</div>
</div>
<?php include "../inc/foot.php" ?>