<?php 
session_start();
$sid = isset($_SESSION["uid"])? $_SESSION["uid"]:"";

if(!$sid){
	echo "
	<script type='text/javascript'>
		alert('로그인 사용자만 사용가능합니다.');
		location.href='../login/login.php';
	</script>
	";
};

$sql = "select * from news order by idx desc;";
include "../inc/dbcon.php";
$result = mysqli_query($dbcon, $sql);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<title>이벤트 &#38; 뉴스</title>
<link rel="stylesheet" type="text/css" href="../css/mgr_news_event.css">
<link rel="stylesheet" type="text/css" href="../css/foot.css">
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script>
function log_out(){
  var n = confirm("로그아웃 하시겠습까?");
  if(n){
    location.href = "../login/logout.php";
  }
};
</script>
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
<header id="header" class="header">
<h1><a href="../index.php">엑셀비프</a></h1>
<div id="gnb" class="gnb">
<h2>주요메뉴</h2>
<ul>
<li class="gm01"><a href="../gnb/about_us.php">about us</a></li>
<li class="gm02"><a href="../gnb/product.php">product</a></li>
<li class="gm03"><a href="../gnb/news_event.php">event and news</a></li>
<li class="gm04"><a href="../gnb/notice.php">notice</a></li>
<li class="gm05"><a href="../gnb/partnershop.php">partnershop</a></li>
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
<a class="admin_page" href="admin.php">관리자페이지 바로가기</a>
<?php } ?>
</div>
<a class="search_bt" href="#none" id="search_bt">검색열기</a>
<form name="" action="" method="" class="search" id="search" style="display: none">
<fieldset id="searchBuiltIn">
<legend>내장찾기</legend>
<label for="sch_txt">검색</label>
<input type="text" name="sch_txt" id="sch_txt" value="SEARCH" onfocus="this.value=''; return false">
<button type="submit"></button>
</fieldset>
</form>
<script type="text/javascript">
$(document).ready(function(){
$(".search_bt").click(function(){
$("#search").toggle(300);
});
});
</script>
</header>
<section id="content" class="content">
<div class="content_wrap">
<div class="location">
<span>현재위치</span>
<ul>
<li>홈&#32;&#62;</li>
<li>관리자페이지 &#62;</li>
<li>이벤트 및 뉴스</li>
</ul>
</div>
<h2>이벤트 및 뉴스</h2>
<form name="" action="" method="">
<fieldset>
<legend>내장찾기</legend>
<label for="sch_txt">검색</label>
<input type="text" name="sch_txt" id="sch_txt" value="SEARCH">
<button type="submit"></button>
</fieldset>
</form>
<div class="event_news">
<div class="left_event">
<ul>
<li class="event01"><a href="#none">스테이크 2+1</a></li>
<li class="event02"><a href="#none">스테이크 2+1</a></li>
<li class="event03"><a href="#none">스테이크 2+1</a></li>
</ul>
</div>
<div class="right_news">
<a href="mgr_news_write.php" class="news_write">게시글 작성</a>
<table>
<tbody>
<?php 
$count_list = mysqli_num_rows($result); 
$begin_num = $count_list;
while($array = mysqli_fetch_array($result)){
$src = $array["thumbnail"];
?>
<tr>
  <td class="thumb_img"><a href="../gnb/news_sub.php?idx=<?php echo $array["idx"] ?>"><?php echo "<img src='../images/$src'" ?></a></td>
  <td><strong><?php echo $array["title"] ?></strong></td>
  <td><em><?php echo $array["reg_date"] ?></em></td>
  <td><p><?php echo $array["cont"] ?></p></td>
  <td class="news_edit"><a href="mgr_news_edit.php?idx=<?php echo $array["idx"]?>">수정</a></td>
  <td class="news_delete"><a href="mgr_news_delete.php?idx=<?php echo $array["idx"]?>">삭제</a></td>
</tr>
<?php
$begin_num--;
}
?>
</tbody>
</table>
</div>
</div>
</div>
</section>
<?php include "../inc/foot.php" ?>