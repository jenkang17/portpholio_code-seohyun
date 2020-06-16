<?php 
session_start();
$sid = isset($_SSESION["uid"])? $_SESSION["uid"]: "";

if(!$sid){
	echo "
	<script type='text/javascript'>
		alert('로그인 사용자만 사용가능합니다.');
		location.href='../login/login.php';
	</script>
	";
};
$sql ="select * from notice order by idx desc;";

$idx ="select * from notice where idx;";


include "../inc/dbcon.php";


$result = mysqli_query($dbcon, $sql);

//$array = mysqli_fetch_array($result);
//$view = mysqli_query("UPDATE notice SET view = view+1 where idx=$idx",$dbcon);

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>공지사항</title>
<link rel="stylesheet" type="text/css" href="../css/head.css">
<link rel="stylesheet" type="text/css" href="../css/notice_admin_mode.css">
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
<thead>
<tr>
<td class="col1">번호</td>
<td class="col2">제목</td>
<td class="col3">아이디</td>
<td class="col4">작성일</td>
<td class="col5">조회</td>
<td class="col6">수정</td>
<td class="col7">삭제</td>
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
<td><a href="notice_edit.php?idx=<?php echo $array["view"] ?>"></a></td>
<td><a href="notice_edit.php?idx=<?php echo $array["idx"] ?>">수정</a></td>
<td><a href="notice_delete.php?idx=<?php echo $array["idx"] ?>">삭제</a></td>
</tr>
<?php
$begin_num--;
}
?>
</tbody>
</table>
<p>
<a class="edit_bt" href="notice_write.php">게시글 작성</a>

</p>
</div>
</main>
<?php include "../inc/foot.php" ?>