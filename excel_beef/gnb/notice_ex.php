<?php 
$sql ="select * from members order by idx desc;";
include "../inc/dbcon.php";
$result = mysqli_query($dbcon, $sql);

$array = mysqli_fetch_array($result);
echo $array["uid"];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>공지사항</title>
<link rel="stylesheet" type="text/css" href="../css/head.css">
<link rel="stylesheet" type="text/css" href="../css/notice.css">
<link rel="stylesheet" type="text/css" href="../css/foot.css">
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
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
<li class="gm02"><a href="#none">menu</a></li>
<li class="gm03"><a href="#none">sale</a></li>
<li class="gm04"><a href="news_event.php">event</a></li>
<li class="gm05"><a href="notice.php">notice</a></li>
<li class="gm06"><a href="#none">Q&#38;A</a></li>
<li class="gm07"><a href="mall.php">mall</a></li>
</ul>
</div>
<div class="top_menu">
<ul>
<li class="tm01"><a href="../login/login.php">로그인</a></li>
<li class="tm02"><a href="#none">마이페이지</a></li>
<li class="tm03"><a href="#none">장바구니</a></li>
<li class="tm04"><a href="#none">주문확인</a></li>
<li class="tm05"><a href="../member/join.php">JOIN</a><p>3000point 적립</p></li>
</ul>
</div>
<a class="search_bt" href="#none" id="search_bt">검색열기</a>
<form name="" action="" method="" class="search" id="search" style="display: none">
<fieldset id="searchBuiltIn">
<legend>내장찾기</legend>
<label for="sch_txt">검색</label>
<input type="text" name="sch_txt" id="sch_txt" value="SEARCH">
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
<main id="content" class="content">
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
<tr>
<td class="col1">번호</td>
<td class="col2">이름</td>
<td class="col2">아이디</td>
<td class="col3">생년월일</td>
<td class="col5">전화번호</td>
<td class="col5">이메일</td>
<td class="col5">성별</td>
<td class="col5">가입일</td>
<td class="col5">수정</td>
<td class="col5">삭제</td>
</tr>
<?php
$count_list = mysqli_num_rows($result);
while($array = mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $count_list; ?></td>
<td><?php echo $array["uname"]; ?></td>
<td><?php echo $array["uid"]; ?></td>
<td><?php echo $array["birthday"]; ?></td>
<td><?php echo $array["mobile"]; ?></td>
<td><?php echo $array["email"]; ?></td>
<?php 
if($array["gender"] == "M"){
$gender = "남";
} else {
$gender = "여";
}
?>
<td><?php echo $gender; ?></td>
<td><?php echo $array["reg_date"]; ?></td>
<td><a href="mgr_member_edit.php?idx=<?php echo $array["idx"] ?>">수정</a></td>
<td><a href="mgr_member_delete.php?idx=<?php echo $array["idx"] ?>">삭제</a></td>
</tr>
<?php 
$count_list--;	
};
?>
</table>
</div>
</main>
<?php include "../inc/foot.php" ?>