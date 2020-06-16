<?php 
session_start();
$sid = isset($_SESSION["uid"])? $_SESSION["uid"]:"";

$idx = $_GET["idx"];

include "../inc/dbcon.php";
$sql = "select * from notice where idx=$idx;";
//echo $sql;
//return false;
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);
$src = $array['file'];

?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<title>공지사항</title>
<link rel="stylesheet" type="text/css" href="../css/notice_sub.css">
<link rel="stylesheet" type="text/css" href="../css/foot.css">
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
<li class="gm02"><a href="product.php">product</a></li>
<li class="gm03"><a href="news_event.php">event and news</a></li>
<li class="gm04"><a href="notice.php">notice</a></li>
<li class="gm05"><a href="partnershop.php">partnershop</a></li>
</ul>
</div>
<div class="top_menu">
<?php 
  if(!$sid){
?>
<ul>
<li class="tm01"><a href="login/login.php">로그인</a></li>
<li class="tm02"><a href="#none">마이페이지</a></li>
<li class="tm03"><a href="#none">장바구니</a></li>
<li class="tm04"><a href="#none">주문확인</a></li>
<li class="tm05"><a href="member/join.php">JOIN</a><p>3000point 적립</p></li>
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
<a class="admin_page" href="admin/admin.php">관리자페이지 바로가기</a>
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
<li>공지사항&#32;&#62;</li>
<li>게시글</li>
</ul>
</div>
<div class="notice">
<div class="notice_header">
<p><?php echo $array["title"]; ?></p>
<ul>
<li><?php echo $array["uid"]; ?></li>
<li><?php echo $array["reg_date"]; ?></li>
<li>조회&#58;0</li>
</ul>
</div>
<div class="notice_content">
<div name="cont" id="cont" class="cont" style="white-space:pre-line;"><?php echo $array["cont"]; ?></div>
<?php echo "<img src='../images/$src'/>"; ?>
</div>
<?php if($sid == "admin2020"){ ?>
<a class="list_bt" href="../admin/mgr_notice.php">목록으로</a>
<?php } else{ ?>
<a class="list_bt" href="notice.php">목록으로</a>
<?php } ?>
<div class="notice_list">
<?php //이전글 다음글 쿼리 미완성
//              $prev = "SELECT * FROM NOTICE WHERE idx IN ((SELECT idx FROM NOTICE WHERE idx < key ORDER BY idx desc LIMIT 1),(SELECT idx FROM NOTICE WHERE idx > key ORDER BY idx desc LIMIT 1));"; 
$prev ="SELECT * FROM NOTICE WHERE idx = $idx > key ORDER BY desc LIMIT 1;";
$next ="SELECT * FROM NOTICE WHERE idx = $idx < key ORDER BY idx desc LIMIT 1;";

//              echo $prev;
//              return false;
?>
<ul class="next">
<li>다음글</li>
<li><a href="notice_sub.php?idx=<?php echo $next ?>">CJ 대한통운 파업으로 인한 배송지연 공지</a></li>
</ul>
<ul class="prev">
<li>이전글</li>
<li><a href="notice_sub.php?idx=<?php echo $array[$prev] ?>">이전 글 없음</a></li>
</ul>
</div>
</div>
</div>
</div>
<?php include "../inc/foot.php" ?>