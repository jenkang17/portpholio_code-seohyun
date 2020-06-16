<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800&display=swap&subset=korean" rel="stylesheet">
<title>회원가입 완료</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<!--<link rel="stylesheet" type="text/css" href="../css/join.css">-->
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<style type="text/css">
/*reset*/
body,h1,h2,h3,p,div,ul,li,dl,dt,dd{margin:0;padding:0;}
/*body{font-family:"나눔 고딕", "맑은 고딕", "돋움";font-size:14px;}*/
a{text-decoration:none;color:#222}
ul,li{list-style:none}
address{font-style:normal}
.content {padding: 100px 0 100px 0;}
.content .content_wrap {text-align: center;}
.content .content_wrap h2{ font-size: 28px; display: inline-block; color: #333; margin-bottom: 50px}
.content .content_wrap strong {font-size: 20px; line-height: 28px; display: block; font-weight: 600; color:#7e2f32; margin-bottom: 10px}
.content .content_wrap p{font-size: 16px; line-height: 28px; margin-bottom: 50px;}
.content .content_wrap .link {font-size: 0; margin-bottom: 0 }
.content .content_wrap .link a{ display: inline-block; background: #666; border-radius: 5px; color: #fff; font-size: 18px;width: 200px;height: 60px; line-height: 55px;font-weight: 500} 
/*	padding: 1px 10px 4px 10px; */
.content .content_wrap .link a:first-child{margin-right: 20px;}
.content .content_wrap .link a:hover{background: #999}

</style>
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
<h1><a href="#">엑셀비프</a></h1>
<div id="gnb" class="gnb">
<h2>주요메뉴</h2>
<ul>
<li class="gm01"><a href="about_us.html">about us</a></li>
<li class="gm02"><a href="#none">menu</a></li>
<li class="gm03"><a href="#none">sale</a></li>
<li class="gm04"><a href="news_event.html">event</a></li>
<li class="gm05"><a href="notice.html">notice</a></li>
<li class="gm06"><a href="#none">Q&#38;A</a></li>
<li class="gm07"><a href="#none">mall</a></li>
</ul>
</div>
<div class="top_menu">
<ul>
<li class="tm01"><a href="login.html">로그인</a></li>
<li class="tm02"><a href="#none">마이페이지</a></li>
<li class="tm03"><a href="#none">장바구니</a></li>
<li class="tm04"><a href="#none">주문확인</a></li>
<li class="tm05"><a href="../member/join.php">JOIN</a><p>3000point 적립</p></li>
</ul>
</div>
<a class="search_bt" href="#none">검색열기</a>
<form name="" action="" method="" class="search" id="search" style="display: none">
<fieldset>
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
</div>
<div id="content" class="content">
<div class="content_wrap">
<h2>회원가입 완료</h2>
	<strong>&#39; 회원가입이 정상적으로 완료되었습니다. &#39;</strong>
	<p>엑셀비프 공식홈페이지에서 회원제 서비스로 이용해보세요.</p>
<p class="link">
<a href="../index.php">메인으로</a>
<a href="../login/login.php">로그인</a>
</p>
</div>
</div>
<?php include "../inc/foot.php"; ?>