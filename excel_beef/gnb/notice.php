<?php 
session_start();
$sid = isset($_SESSION["uid"])? $_SESSION["uid"]:"";

$sql ="select * from notice order by idx desc;";
include "../inc/dbcon.php";
$result = mysqli_query($dbcon, $sql);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>공지사항</title>
<link rel="stylesheet" type="text/css" href="../css/notice.css">
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
<a class="search_bt" href="#none" id="search_bt">검색열기</a>
<form name="" action="" method="" class="search" id="search" style="display: none">
<fieldset id="searchBuiltIn">
<legend>내장찾기</legend>
<label for="sch_txt">검색</label>
<input type="text" name="sch_txt" id="sch_txt" value="SEARCH" onFocus="this.value='';return false">
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
<!-- <div class="search_window" style="display: none">
<input class="search" type="text" name="search" value="SEARCH">
</div> -->
</header>
<section id="content" class="content">
<div class="content_wrap">
<div class="location">
<span>현재위치</span>
<ul>
<li><a href="../index.php">홈&#32;&#62;</a></li>
<li>공지사항</li>
</ul>
</div>
<h2>공지사항</h2>
<table summary="게시판">
<thead>
<tr>
<td class="col1">번호</td>
<td class="col2">제목</td>
<td class="col3">아이디</td>
<td class="col4">작성일</td>
<td class="col5">조회</td>
</tr>
</thead>
<tbody>
<?php 
$count_list = mysqli_num_rows($result); 
$begin_num = $count_list;
while($array = mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $begin_num; ?></td>
<td><a href="notice_sub.php?idx=<?php echo $array["idx"] ?>"><?php echo $array["title"]; ?></a></td>
<td><?php echo $array["uid"]; ?></td>
<td><?php echo $array["reg_date"]; ?></td>
<td></td>
</tr>
<?php
$begin_num--;
}
?>
</tbody>
</table>
</div>
</section>
<?php include "../inc/foot.php" ?>