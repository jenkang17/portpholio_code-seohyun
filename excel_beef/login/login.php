<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<!--<link rel="stylesheet" href="../css/style.css">-->
<link rel="stylesheet" href="../css/login.css">
<link rel="stylesheet" href="../css/foot.css">
<title>로그인</title>
<script src="../js/jquery-3.4.1.min.js"></script>
<script>
function formCheck(){
	var uid = document.getElementById("uid");
	var pwd = document.getElementById("pwd");
	
	if(!uid.value){
		alert("아이디를 입력해주세요.");
		uid.focus();
		return false;
	};
	if(!pwd.value){
		alert("비밀번호를 입력해주세요.");
		pwd.focus();
		return false;
	};
	document.login_form.submit();
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
<li class="gm03"><a href="../gnb/news_event.php">event news</a></li>
<li class="gm04"><a href="../gnb/notice.php">notice</a></li>
<li class="gm05"><a href="../gnb/partnershop.php">partnershop</a></li>
</ul>
</div>
<div class="top_menu">
<ul>
<li class="tm01"><a href="#">로그인</a></li>
<li class="tm02"><a href="#none">마이페이지</a></li>
<li class="tm03"><a href="#none">장바구니</a></li>
<li class="tm04"><a href="#none">주문확인</a></li>
<li class="tm05"><a href="../member/join.php">JOIN</a><p>3000point 적립</p></li>
</ul>
</div>
<a class="search_bt" href="#none" id="search_bt">검색열기</a>
<form name="search" action="search_ok.php" method="post" class="search" id="search" style="display: none">
<fieldset id="searchBuiltIn">
<legend>내장찾기</legend>
<label for="sch_txt">검색</label>
<input type="text" name="sch_txt" id="sch_txt" value="SEARCH" onFocus="this.value='';return false">
<button type="button"></button>
</fieldset>
</form>
<script>
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
<li>로그인</li>
</ul>
</div>
<h2>로그인</h2>
<form name="login_form" action="login_ok.php" method="post">
<fieldset>
<legend>로그인</legend>
<label for="uid">로그인</label>
<input id="uid" class="id" type="text" name="uid" value="ID 입력" onFocus="this.value='';  return false;">
<input id="pwd" class="pw" type="password" name="pwd" value="password" onFocus="this.value=''; return false;">
<button type="button" onclick="formCheck()">로그인</button>
</fieldset>
</form>
<div class="search_info">
<p>보안접속</p>
<ul>
<li class="search_id"><a href="#none">아이디 찾기</a></li>
<li class="search_pw"><a href="#none">비밀번호 찾기</a></li>
</ul>
</div>
<div class="join">
<p>회원가입을 하시면 다양하고 특별한<br>혜택이 준비되어 있습니다.</p>
<a href="../member/join.php">회원가입</a>
</div>
</div>
</section>
<?php include "../inc/foot.php"; ?>