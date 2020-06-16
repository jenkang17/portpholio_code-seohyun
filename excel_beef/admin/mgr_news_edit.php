<?php 
session_start();
$sid = isset($_SESSION["uid"])? $_SESSION["uid"]: "";

$idx = $_GET["idx"];

if(!$sid){
echo "
<script type='text/javascript'>
alert('로그인 사용자만 사용가능합니다.');
location.href='../login/login.php';
</script>
";
};


include "../inc/dbcon.php";

$sql = "select * from news where idx='$idx';";

$result = mysqli_query($dbcon, $sql);

$array = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<title>뉴스 게시물 수정</title>
<link rel="stylesheet" href="../css/mgr_news_edit.css">
<link rel="stylesheet" href="../css/foot.css">
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
function formCheck(frm){
var title = document.getElementById("title");
var cont = document.getElementById("content");

if (!title.value){
alert("제목을 입력해주세요.");
title.focus();
return false;
};
//		if(!cont.value){
//			alert("내용을 입력해주세요.");
//			title.focus();
//			return false;
//		};
frm.submit();
};

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
<a class="admin_page" href="">관리자페이지 바로가기</a>
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
<section class="content" id="content">
<div class="content_wrap">
<div class="location">
<span>현재위치</span>
<ul>
<li><a href="../index.php">홈&#32;&#62;</a></li>
<li>관리자페이지</li>
<li>&#62;뉴스</li>
</ul>
</div>
<h2>뉴스 게시글 작성</h2>
<form name="mgr_news_edit" action="mgr_news_edit_ok.php" method="post">
<fieldset>
<legend>게시글 작성</legend> 
<ul>
<li>
<div><strong>아이디</strong></div>
<div>
<input type="hidden" name="idx" class="idx" id="idx" value="<?php echo $array["idx"]; ?>">
<input type="READONLY " name="id" class="id" id="id" value="<?php echo $array["uid"]; ?>">
</div>
</li>
<li>  
<div><strong>제목</strong></div>
<div><input name="title" type="text" class="title" id="title" value="<?php echo $array["title"]; ?>"></div>
</li>
<li>
<div class="con"><strong>내용</strong></div>
<div><textarea name="content" type="text" class="content" id="content"><?php echo $array["cont"]; ?></textarea></div>
</li>
<li class="thumnail">
<div><strong>썸네일첨부</strong></div>
<div>
<label for="thumbnail" class="thumb_label">
<span>파일선택</span>
<input name="thumbnail" type="file" class="thumbnail" id="thumbnail" required><?php echo $array["thumbnail"]; ?>
</label>
</div>
<li class="file">
<div><strong>사진첨부</strong></div>
<div>
<label for="getFile" class="getFile_label">
<span>파일선택</span>
<input name="getFile" type="file" class="get_file" id="getFile" required>
<?php echo $array["file"]; ?>
</label>
</div>
</li>
</ul>
</fieldset>
<button type="button" onclick="formCheck(this.form)">수정</button>
<button type="button" onclick = "history.back(-1)">취소</button>
</form>
</div>
</section>
<?php include "../inc/foot.php" ?>