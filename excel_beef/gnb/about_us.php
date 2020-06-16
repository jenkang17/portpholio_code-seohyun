<?php
    session_start();

    // echo $_SESSION["uid"];
    $sid = isset($_SESSION["uid"])? $_SESSION["uid"]:"";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>회사소개</title>
<link rel="stylesheet" type="text/css" href="../css/aboutUs.css">
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
<li class="gm01"><a href="#none">about us</a></li>
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
<main id="content" class="content">
<div class="content_wrap">
<div class="location">
<span>현재위치</span>
<ul>
<li><a href="../index.php">홈&#32;&#62;</a></li>
<li>회사소개</li>
</ul>
</div>
<div class="about_us">
<div class="about_us_header">
<h2>회사소개</h2>
</div>
<div class="about_us_content">
<div class="about_excel" id="aboutExcel">
<h3>ABOUT EXCEL</h3>
<img src="../images/aboutUs_content01.jpg" alt="엑셀은 150여년 동안 전 세계인에게 품질 좋은 먹거리를 제공하는 것을 기본 정신으로 하는 글로벌 기업 가킬사의 미국산, 캐나다산, 호주산, 소고기 브랜드를 종합적으로 만나볼 수 있게 하고자 만들게 되었습니다. 카길사의 대표 소고기 브랜드 excel과 소고기의 영문인 beef를 합쳐 통합적인 의미를 담고자 했습니다.
excel 소고기는 서울 올림픽이 개최된 1988년 해에 정부의 수입산 소고기 개방에 맞춰 한국 시장에 첫 선을 보였습니다.그 후 30여 년 동안 우수한 맛과 품질을 바탕으로 국내 소고기 시장에서 곡개의 신뢰를 꾸준히 쌓아오고 있습니다.
2019년 9월 현재 기준으로 국내 소고기 시장의 40%를 차지하고 있으며 도소매 시장, 외식업체, 육가공장, 리테일 및 온라인 시장 등의 다양한 소비처에서 폭 넓게 사용되고 있습니다.">
</div>
<div class="about_cargill">
<h3>ABOUT CARGILL</h3>
<img src="../images/aboutUs_content02.jpg" alt="엑셀은 150여년 동안 전 세계인에게 품질 좋은 먹거리를 제공하는 것을 기본 정신으로 하는 글로벌 기업 가킬사의 미국산, 캐나다산, 호주산, 소고기 브랜드를 종합적으로 만나볼 수 있게 하고자 만들게 되었습니다. 카길사의 대표 소고기 브랜드 excel과 소고기의 영문인 beef를 합쳐 통합적인 의미를 담고자 했습니다.
excel 소고기는 서울 올림픽이 개최된 1988년 해에 정부의 수입산 소고기 개방에 맞춰 한국 시장에 첫 선을 보였습니다.그 후 30여 년 동안 우수한 맛과 품질을 바탕으로 국내 소고기 시장에서 곡개의 신뢰를 꾸준히 쌓아오고 있습니다.
2019년 9월 현재 기준으로 국내 소고기 시장의 40%를 차지하고 있으며 도소매 시장, 외식업체, 육가공장, 리테일 및 온라인 시장 등의 다양한 소비처에서 폭 넓게 사용되고 있습니다.">
</div>
<div class="appointment" id="appointment">
<h3>APPOINTMENT</h3>
<img src="../images/aboutUs_content02_1.jpg" alt="엑셀은 150여년 동안 전 세계인에게 품질 좋은 먹거리를 제공하는 것을 기본 정신으로 하는 글로벌 기업 가킬사의 미국산, 캐나다산, 호주산, 소고기 브랜드를 종합적으로 만나볼 수 있게 하고자 만들게 되었습니다. 카길사의 대표 소고기 브랜드 excel과 소고기의 영문인 beef를 합쳐 통합적인 의미를 담고자 했습니다.
excel 소고기는 서울 올림픽이 개최된 1988년 해에 정부의 수입산 소고기 개방에 맞춰 한국 시장에 첫 선을 보였습니다.그 후 30여 년 동안 우수한 맛과 품질을 바탕으로 국내 소고기 시장에서 곡개의 신뢰를 꾸준히 쌓아오고 있습니다.
2019년 9월 현재 기준으로 국내 소고기 시장의 40%를 차지하고 있으며 도소매 시장, 외식업체, 육가공장, 리테일 및 온라인 시장 등의 다양한 소비처에서 폭 넓게 사용되고 있습니다.">
</div>
<div class="cargill_premium" id="cargillPremium">
<h3>CARGILL PREMIUM</h3>
<img src="../images/aboutUs_content03.jpg" alt="엑셀은 150여년 동안 전 세계인에게 품질 좋은 먹거리를 제공하는 것을 기본 정신으로 하는 글로벌 기업 가킬사의 미국산, 캐나다산, 호주산, 소고기 브랜드를 종합적으로 만나볼 수 있게 하고자 만들게 되었습니다. 카길사의 대표 소고기 브랜드 excel과 소고기의 영문인 beef를 합쳐 통합적인 의미를 담고자 했습니다.
excel 소고기는 서울 올림픽이 개최된 1988년 해에 정부의 수입산 소고기 개방에 맞춰 한국 시장에 첫 선을 보였습니다.그 후 30여 년 동안 우수한 맛과 품질을 바탕으로 국내 소고기 시장에서 곡개의 신뢰를 꾸준히 쌓아오고 있습니다.
2019년 9월 현재 기준으로 국내 소고기 시장의 40%를 차지하고 있으며 도소매 시장, 외식업체, 육가공장, 리테일 및 온라인 시장 등의 다양한 소비처에서 폭 넓게 사용되고 있습니다.">
</div>
</div>
</div>
</div>
</main>
<?php include "../inc/foot.php" ?>