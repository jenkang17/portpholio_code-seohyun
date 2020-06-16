<?php 
session_start();
$sid = isset($_SESSION["uid"])? $_SESSION["uid"]:"";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800&display=swap&subset=korean" rel="stylesheet">
<title>엑셀비프</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/style_itemZoom.css">
<link rel="stylesheet" type="text/css" href="css/foot.css">
<script src="js/jquery-3.4.1.min.js"></script>
<script>
$(document).ready(function(){
var img_width = $(".main_banner img").width();

var len = $(".main_banner li").length;
// alert(len);
$(".main_banner ul").css({width:img_width * len});
$(".main_banner").css({width:img_width});

$(".pager a").click(function(){
var idx = $(this).index();
// alert(idx);
$(".main_banner ul").animate({left:-img_width * idx});
});

});
function doDisplay01(){
	var itemZoom01 = document.getElementById("itemZoom01");
	if(itemZoom01.style.display == 'none'){
		itemZoom01.style.display='block';
	}else {
		itemZoom01.style.display='none';
	};
};
	function doDisplay02(){
	var itemZoom02 = document.getElementById("itemZoom02");
	if(itemZoom02.style.display == 'none'){
		itemZoom02.style.display='block';
	}else {
		itemZoom02.style.display='none';
	};
};
	function doDisplay03(){
	var itemZoom03 = document.getElementById("itemZoom03");
	if(itemZoom03.style.display == 'none'){
		itemZoom03.style.display='block';
	}else {
		itemZoom03.style.display='none';
	};
};
	function doDisplay04(){
	var itemZoom04 = document.getElementById("itemZoom04");
	if(itemZoom04.style.display == 'none'){
		itemZoom04.style.display='block';
	}else {
		itemZoom04.style.display='none';
	};
};
	function doDisplay05(){
	var itemZoom05 = document.getElementById("itemZoom05");
	if(itemZoom05.style.display == 'none'){
		itemZoom05.style.display='block';
	}else {
		itemZoom05.style.display='none';
	};
};
	function doDisplay06(){
	var itemZoom06 = document.getElementById("itemZoom06");
	if(itemZoom06.style.display == 'none'){
		itemZoom06.style.display='block';
	}else {
		itemZoom06.style.display='none';
	};
};
  
function log_out(){
  var n = confirm("로그아웃 하시겠습까?");
  if(n){
    location.href = "login/logout.php";
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
<h1><a href="#">엑셀비프</a></h1>
<div id="gnb" class="gnb">
<h2>주요메뉴</h2>
<ul>
<li class="gm01"><a href="gnb/about_us.php">about us</a></li>
<li class="gm02"><a href="gnb/product.php">product</a></li>
<li class="gm03"><a href="gnb/news_event.php">event and news</a></li>
<li class="gm04"><a href="gnb/notice.php">notice</a></li>
<li class="gm05"><a href="gnb/partnershop.php">partnershop</a></li>
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
<a class="search_bt" href="#none" id="search_bt">검색열기</a>
<form name="search" action="search_ok.php" method="post" class="search" id="search" style="display: none">
<fieldset id="searchBuiltIn">
<legend>내장찾기</legend>
<label for="sch_txt">검색</label>
<input type="text" name="sch_txt" id="sch_txt" value="SEARCH" onFocus="this.value='';return false">
<button type="submit"></button>
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
<div class="main_banner">
<h2>주요소식</h2>
<ul>
<li class="banner01"><a><img src="images/main_banner02.jpg" alt="농장에서 식탁까지. 150년 전통 글로벌 기업 카길의 대표적인 육류 브랜드 EXCEL BEEF"></a></li>
<li class="banner02"><a><img src="images/main_banner01.jpg" alt="농장에서 식탁까지. 150년 전통 글로벌 기업 카길의 대표적인 육류 브랜드 EXCEL BEEF"></a></li>
<li class="banner03"><a><img src="images/main_banner03.jpg" alt="농장에서 식탁까지. 150년 전통 글로벌 기업 카길의 대표적인 육류 브랜드 EXCEL BEEF"></a></li>
</ul>
<div class="pager">
<a href="#">1</a>
<a href="#">2</a>
<a href="#">3</a>
</div>
</div>
<div class="content_wrap">
<div id="brandStory" class="brand_story">
<h2>BRAND STORY</h2>
<ul>
<li class="brand01"><a href="gnb/about_us.php#aboutExcel">엑셀비프 소개</a></li>
<li class="brand02"><a href="gnb/about_us.php#appointment">고객과의 4가지 약속 알아보기</a></li>
<li class="brand03"><a href="gnb/about_us.php#cargillPremium">이벤트 바로가기</a></li>
</ul>
</div>
<div id="product" class="product">
<h2>product</h2>
<div class="item01">
<ul>
<li class="bg01"><a href="#none">안심 200그램 21,500원에서 10프로 세일 19,350원</a></li>
<li><strong>스터링실버 안심&#40;200g&#41;</strong></li>
<li><em>21&#44;500&#92;</em></li>
<li><span>10&#37;&#32;19&#44;350&#92;</span></li>
</ul>  
<ul class="item_icones">
<li class="icone01"><a href="#none">찜하기</a></li>
<li class="icone02"><a href="#none">장바구니</a></li>
<li class="icone03"><a href="#none" onclick="doDisplay01()">확대</a></li>
</ul>
<div class="item_zoom" id="itemZoom01" style="display: none">
<h2>상품보기</h2>
<div class="item_tenderloin">
<div class="item_info">
<dl>
<dt>스터링실버 안심 &#40;200g&#41;</dt>
<dd class="country">원산지<span>미국</span></dd>
<dd class="price">소비자가<span>21&#44;500원</span></dd>
<dd class="sale_price">판매가<span>19&#44;350원</span></dd>
</dl>
<p>&#40;최소주문수량 1개 이상 &#47; 최대주문수량 10000개 이하&#41;</p>
<a class="item_save" href="#none">찜하기</a>
</div>
<div class="item_option">
<p>수량을 선택해 주세요.</p>
<dl>
<dt>스터링실버 안심 &#40;200g&#41;</dt>
<dd class="number"><input type="number" name="usernumber" min="0" max="10000" value="0"></dd>
<dd class="price">19&#44;350원</dd>
</dl>
<div class="option_price"><span>총 상품금액&#40;수량&#41;  &#58;</span><strong>19&#44;350원</strong><em>&#40;1개&#41;</em></div>
</div>
<div class="item_button">
<ul>
<li class="bt_01"><a href="#none">바로 구매하기</a></li>
<li class="bt_02"><a href="#none">장바구니 담기</a></li>
<li class="bt_03"><a href="gnb/product.php">상품 상세보기</a></li>
</ul>
</div>
</div>
<div class="item_img">
<script>
function changeImage01(url){
var mainImg01 = document.getElementById("mainImg01");
mainImg01.src = url;
};
</script> 
<dl>
<dt class="main_img01">
	<img id="mainImg01" src="images/item_zoom1-01.jpg" style="width: 100%" alt="사진">
	<img id="mainImg01" src="images/item_zoom1-02.jpg" style="width: 100%" alt="사진">
	<img id="mainImg01" src="images/item_zoom1-03.jpg" style="width: 100%" alt="사진">
	<img id="mainImg01" src="images/item_zoom1-04.jpg" style="width: 100%" alt="사진">
</dt>
<dd class="img01">
<img class="demo" src="images/item_zoom1-01.jpg" onclick="changeImage01('images/item_zoom1-01.jpg'); currentSlide(1)" alt="사진1">
<img class="demo" src="images/item_zoom1-02.jpg" onclick="changeImage01('images/item_zoom1-02.jpg'); currentSlide(2)" alt="사진2">
<img class="demo" src="images/item_zoom1-03.jpg" onclick="changeImage01(this.src); currentSlide(3)" alt="사진3">
<img class="demo" src="images/item_zoom1-04.jpg" onclick="changeImage01(this.src); currentSlide(4)" alt="사진4">
</dd>
</dl>
<!--
<a class="prev" onclick="plusSlides(-1)">이전 사진보기</a>
<a class="next" onclick="plusSlides(1)">다음 사진보기</a>
-->
</div>
<a class="window_close" href="#none" onclick="javascript:doDisplay01();">창 닫기</a>
</div>
</div>
<div class="item02">
<ul>
<li class="bg02"><a href="#none">꽃등심 250그램 21,500원에서 10프로 세일 19,350원</a></li>
<li><strong>스터링실버 꽃등심&#40;200g&#41;</strong></li>
<li><em>21&#44;500&#92;</em></li>
<li><span>10&#37;&#32;19&#44;350&#92;</span></li>
</ul>
<ul class="item_icones">
<li class="icone01"><a href="#none">찜하기</a></li>
<li class="icone02"><a href="#none">장바구니</a></li>
<li class="icone03"><a href="#none" onclick="doDisplay02()">확대</a></li>
</ul>
<div class="item_zoom" id="itemZoom02" style="display: none">
<h2>상품보기</h2>
<div class="item_tenderloin">
<div class="item_info">
<dl>
<dt>스터링실버 꽃등심&#40;200g&#41;</dt>
<dd class="country">원산지<span>미국</span></dd>
<dd class="price">소비자가<span>21&#44;500원</span></dd>
<dd class="sale_price">판매가<span>19&#44;350원</span></dd>
</dl>
<p>&#40;최소주문수량 1개 이상 &#47; 최대주문수량 10000개 이하&#41;</p>
<a class="item_save" href="#none">찜하기</a>
</div>
<div class="item_option">
<p>수량을 선택해 주세요.</p>
<dl>
<dt>스터링실버 꽃등심 &#40;200g&#41;</dt>
<dd class="number"><input type="number" name="usernumber" min="0" max="10000" value="0"></dd>
<dd class="price">19&#44;350원</dd>
</dl>
<div class="option_price"><span>총 상품금액&#40;수량&#41;  &#58;</span><strong>19&#44;350원</strong><em>&#40;1개&#41;</em></div>
</div>
<div class="item_button">
<ul>
<li class="bt_01"><a href="#none">바로 구매하기</a></li>
<li class="bt_02"><a href="#none">장바구니 담기</a></li>
<li class="bt_03"><a href="gnb/product.php">상품 상세보기</a></li>
</ul>
</div>
</div>
<div class="item_img">
<script>
function changeImage02(url){
var mainImg01 = document.getElementById("mainImg02");
mainImg01.src = url;
};
</script> 
<dl>
<dt class="main_img01">
	<img id="mainImg02" src="images/item_zoom2-01.jpg" style="width: 100%" alt="사진">
	<img id="mainImg02" src="images/item_zoom2-02.jpg" style="width: 100%" alt="사진">
	<img id="mainImg02" src="images/item_zoom2-03.jpg" style="width: 100%" alt="사진">
	<img id="mainImg02" src="images/item_zoom2-04.jpg" style="width: 100%" alt="사진">
</dt>
<dd class="img01">
<img class="demo" src="images/item_zoom2-01.jpg" onclick="changeImage02('images/item_zoom2-01.jpg'); currentSlide(1)" alt="사진1">
<img class="demo" src="images/item_zoom2-02.jpg" onclick="changeImage02('images/item_zoom2-02.jpg'); currentSlide(2)" alt="사진2">
<img class="demo" src="images/item_zoom2-03.jpg" onclick="changeImage02(this.src); currentSlide(3)" alt="사진3">
<img class="demo" src="images/item_zoom2-04.jpg" onclick="changeImage02(this.src); currentSlide(4)" alt="사진4">
</dd>
</dl>
<!--
<a class="prev" onclick="plusSlides(-1)">이전 사진보기</a>
<a class="next" onclick="plusSlides(1)">다음 사진보기</a>
-->
</div>
<a class="window_close" href="#none" onclick="javascript:doDisplay02();">창 닫기</a>
</div>
</div>
<div class="item03">
<ul>
<li class="bg03"><a href="#none">스터링실버 채끝 250그램 21,500원에서 10프로 세일 19,350원</a></li>
<li><strong>스터링실버 채끝&#40;250g&#41;</strong></li>
<li><em>21&#44;500&#92;</em></li>
<li><span>10&#37;&#32;19&#44;350&#92;</span></li>
</ul>
<ul class="item_icones">
<li class="icone01"><a href="#none">찜하기</a></li>
<li class="icone02"><a href="#none">장바구니</a></li>
<li class="icone03"><a href="#none" onclick="doDisplay03()">확대</a></li>
</ul>
<div class="item_zoom" id="itemZoom03" style="display: none">
<h2>상품보기</h2>
<div class="item_tenderloin">
<div class="item_info">
<dl>
<dt>스터링실버 채끝&#40;200g&#41;</dt>
<dd class="country">원산지<span>미국</span></dd>
<dd class="price">소비자가<span>21&#44;500원</span></dd>
<dd class="sale_price">판매가<span>19&#44;350원</span></dd>
</dl>
<p>&#40;최소주문수량 1개 이상 &#47; 최대주문수량 10000개 이하&#41;</p>
<a class="item_save" href="#none">찜하기</a>
</div>
<div class="item_option">
<p>수량을 선택해 주세요.</p>
<dl>
<dt>스터링실버 채끝 &#40;250g&#41;</dt>
<dd class="number"><input type="number" name="usernumber" min="0" max="10000" value="0"></dd>
<dd class="price">19&#44;350원</dd>
</dl>
<div class="option_price"><span>총 상품금액&#40;수량&#41;  &#58;</span><strong>19&#44;350원</strong><em>&#40;1개&#41;</em></div>
</div>
<div class="item_button">
<ul>
<li class="bt_01"><a href="#none">바로 구매하기</a></li>
<li class="bt_02"><a href="#none">장바구니 담기</a></li>
<li class="bt_03"><a href="gnb/product.php">상품 상세보기</a></li>
</ul>
</div>
</div>
<div class="item_img">
<script>
function changeImage03(url){
var mainImg03 = document.getElementById("mainImg03");
mainImg03.src = url;
};
</script> 
<dl>
<dt class="main_img01">
	<img id="mainImg03" src="images/item_zoom3-01.jpg" style="width: 100%">
	<img id="mainImg03" src="images/item_zoom3-02.jpg" style="width: 100%">
	<img id="mainImg03" src="images/item_zoom3-03.jpg" style="width: 100%">
	<img id="mainImg03" src="images/item_zoom3-04.jpg" style="width: 100%">
</dt>
<dd class="img01">
<img class="demo" src="images/item_zoom3-01.jpg" onclick="changeImage03('images/item_zoom3-01.jpg'); currentSlide(1)">
<img class="demo" src="images/item_zoom3-02.jpg" onclick="changeImage03('images/item_zoom3-02.jpg'); currentSlide(2)">
<img class="demo" src="images/item_zoom3-03.jpg" onclick="changeImage03(this.src); currentSlide(3)">
<img class="demo" src="images/item_zoom3-04.jpg" onclick="changeImage03(this.src); currentSlide(4)">
</dd>
</dl>
<!--
<a class="prev" onclick="plusSlides(-1)">이전 사진보기</a>
<a class="next" onclick="plusSlides(1)">다음 사진보기</a>
-->
</div>
<a class="window_close" href="#none" onclick="javascript:doDisplay03();">창 닫기</a>
</div>
</div>
<div class="item04">
<ul>
<li class="bg04"><a href="#none">살치살 500그램 32,500원</a></li>
<li><strong>살치살&#40;500g&#41;</strong></li>
<li><em>35&#44;750&#92;</em></li>
<li><span>10&#37;&#32;32&#44;500&#92;</span></li>
</ul>
<ul class="item_icones">
<li class="icone01"><a href="#none">찜하기</a></li>
<li class="icone02"><a href="#none">장바구니</a></li>
<li class="icone03"><a href="#none" onclick="doDisplay04()">확대</a></li>
</ul>
<div class="item_zoom" id="itemZoom04" style="display: none">
<h2>상품보기</h2>
<div class="item_tenderloin">
<div class="item_info">
<dl>
<dt>스터링실버 살치살&#40;500g&#41;</dt>
<dd class="country">원산지<span>미국</span></dd>
<dd class="price">소비자가<span>35&#44;750원</span></dd>
<dd class="sale_price">판매가<span>32&#44;500원</span></dd>
</dl>
<p>&#40;최소주문수량 1개 이상 &#47; 최대주문수량 10000개 이하&#41;</p>
<a class="item_save" href="#none">찜하기</a>
</div>
<div class="item_option">
<p>수량을 선택해 주세요.</p>
<dl>
<dt>스터링실버 살치살 &#40;500g&#41;</dt>
<dd class="number"><input type="number" name="usernumber" min="0" max="10000" value="0"></dd>
<dd class="price">32&#44;500원</dd>
</dl>
<div class="option_price"><span>총 상품금액&#40;수량&#41;  &#58;</span><strong>32&#44;500원</strong><em>&#40;1개&#41;</em></div>
</div>
<div class="item_button">
<ul>
<li class="bt_01"><a href="#none">바로 구매하기</a></li>
<li class="bt_02"><a href="#none">장바구니 담기</a></li>
<li class="bt_03"><a href="gnb/product.php">상품 상세보기</a></li>
</ul>
</div>
</div>
<div class="item_img">
<script>
function changeImage04(url){
var mainImg04 = document.getElementById("mainImg04");
mainImg04.src = url;
};
</script> 
<dl>
<dt class="main_img01">
	<img id="mainImg04" src="images/item_zoom4-01.jpg" style="width: 100%">
	<img id="mainImg04" src="images/item_zoom4-02.jpg" style="width: 100%">
	<img id="mainImg04" src="images/item_zoom4-03.jpg" style="width: 100%">
	<img id="mainImg04" src="images/item_zoom4-04.jpg" style="width: 100%">
</dt>
<dd class="img01">
<img class="demo" src="images/item_zoom4-01.jpg" onclick="changeImage04('images/item_zoom4-01.jpg'); currentSlide(1)">
<img class="demo" src="images/item_zoom4-02.jpg" onclick="changeImage04('images/item_zoom4-02.jpg'); currentSlide(2)">
<img class="demo" src="images/item_zoom4-03.jpg" onclick="changeImage04(this.src); currentSlide(3)">
<img class="demo" src="images/item_zoom4-04.jpg" onclick="changeImage04(this.src); currentSlide(4)">
</dd>
</dl>
</div>
<a class="window_close" href="#none" onclick="javascript:doDisplay04();">창 닫기</a>
</div>
</div>
<div class="item05">
<ul>
<li class="bg05"><a href="#none">스터링실버 치마살 500g 35,000원</a></li>
<li><strong>스터링실버 치마살&#40;500g&#41;</strong></li>
<li><em>38&#44;500&#92;</em></li>
<li><span>10&#37;&#32;35&#44;000&#92;</span></li>
</ul>
<ul class="item_icones">
<li class="icone01"><a href="#none">찜하기</a></li>
<li class="icone02"><a href="#none">장바구니</a></li>
<li class="icone03"><a href="#none" onclick="doDisplay05()">확대</a></li>
</ul>
<div class="item_zoom" id="itemZoom05" style="display: none">
<h2>상품보기</h2>
<div class="item_tenderloin">
<div class="item_info">
<dl>
<dt>스터링실버 치마살&#40;200g&#41;</dt>
<dd class="country">원산지<span>미국</span></dd>
<dd class="price">소비자가<span>38&#44;500원</span></dd>
<dd class="sale_price">판매가<span>35&#44;000원</span></dd>
</dl>
<p>&#40;최소주문수량 1개 이상 &#47; 최대주문수량 10000개 이하&#41;</p>
<a class="item_save" href="#none">찜하기</a>
</div>
<div class="item_option">
<p>수량을 선택해 주세요.</p>
<dl>
<dt>스터링실버 치마살&#40;500g&#41;</dt>
<dd class="number"><input type="number" name="usernumber" min="0" max="10000" value="0"></dd>
<dd class="price">35&#44;000원</dd>
</dl>
<div class="option_price"><span>총 상품금액&#40;수량&#41;  &#58;</span><strong>35&#44;000원</strong><em>&#40;1개&#41;</em></div>
</div>
<div class="item_button">
<ul>
<li class="bt_01"><a href="#none">바로 구매하기</a></li>
<li class="bt_02"><a href="#none">장바구니 담기</a></li>
<li class="bt_03"><a href="gnb/product.php">상품 상세보기</a></li>
</ul>
</div>
</div>
<div class="item_img">
<script>
function changeImage05(url){
var mainImg05 = document.getElementById("mainImg05");
mainImg05.src = url;
};
</script> 
<dl>
<dt class="main_img01">
	<img id="mainImg05" src="images/item_zoom5-01.jpg" style="width: 100%">
	<img id="mainImg05" src="images/item_zoom5-02.jpg" style="width: 100%">
	<img id="mainImg05" src="images/item_zoom5-03.jpg" style="width: 100%">
	<img id="mainImg05" src="images/item_zoom5-04.jpg" style="width: 100%">
</dt>
<dd class="img01">
<img class="demo" src="images/item_zoom5-01.jpg" onclick="changeImage05('images/item_zoom5-01.jpg'); currentSlide(1)">
<img class="demo" src="images/item_zoom5-02.jpg" onclick="changeImage05('images/item_zoom5-02.jpg'); currentSlide(2)">
<img class="demo" src="images/item_zoom5-03.jpg" onclick="changeImage05(this.src); currentSlide(3)">
<img class="demo" src="images/item_zoom5-04.jpg" onclick="changeImage05(this.src); currentSlide(4)">
</dd>
</dl>
</div>
<a class="window_close" href="#none" onclick="javascript:doDisplay05();">창 닫기</a>
</div>
</div>
<div class="item06">
<ul>
<li class="bg06"><a href="#none">최고급 la갈비 1.2kg 45,600원</a></li>
<li><strong>최고급 LA갈비&#40;1.2kg&#41;</strong></li>
<li><em>51&#44;160&#92;</em></li>
<li><span>10&#37;&#32;45&#44;600&#92;</span></li>
</ul>
<ul class="item_icones">
<li class="icone01"><a href="#none">찜하기</a></li>
<li class="icone02"><a href="#none">장바구니</a></li>
<li class="icone03"><a href="#none" onclick="doDisplay06()">확대</a></li>
</ul>
<div class="item_zoom" id="itemZoom06" style="display: none">
<h2>상품보기</h2>
<div class="item_tenderloin">
<div class="item_info">
<dl>
<dt>최고급 LA갈비&#40;1.2kg&#41;</dt>
<dd class="country">원산지<span>미국</span></dd>
<dd class="price">소비자가<span>51&#44;160원</span></dd>
<dd class="sale_price">판매가<span>45&#44;600원</span></dd>
</dl>
<p>&#40;최소주문수량 1개 이상 &#47; 최대주문수량 10000개 이하&#41;</p>
<a class="item_save" href="#none">찜하기</a>
</div>
<div class="item_option">
<p>수량을 선택해 주세요.</p>
<dl>
<dt>최고급 LA갈비 &#40;1.2kg&#41;</dt>
<dd class="number"><input type="number" name="usernumber" min="0" max="10000" value="0"></dd>
<dd class="price">45&#44;600원</dd>
</dl>
<div class="option_price"><span>총 상품금액&#40;수량&#41;  &#58;</span><strong>45&#44;600원</strong><em>&#40;1개&#41;</em></div>
</div>
<div class="item_button">
<ul>
<li class="bt_01"><a href="#none">바로 구매하기</a></li>
<li class="bt_02"><a href="#none">장바구니 담기</a></li>
<li class="bt_03"><a href="gnb/product.php">상품 상세보기</a></li>
</ul>
</div>
</div>
<div class="item_img">
<script>
function changeImage06(url){
var mainImg06 = document.getElementById("mainImg06");
mainImg06.src = url;
};
</script> 
<dl>
<dt class="main_img01">
	<img id="mainImg06" src="images/item_zoom6-01.jpg" style="width: 100%">
	<img id="mainImg06" src="images/item_zoom6-02.jpg" style="width: 100%">
	<img id="mainImg06" src="images/item_zoom6-03.jpg" style="width: 100%">
	<img id="mainImg06" src="images/item_zoom6-04.jpg" style="width: 100%">
</dt>
<dd class="img01">
<img class="demo" src="images/item_zoom6-01.jpg" onclick="changeImage06('images/item_zoom6-01.jpg'); currentSlide(1)">
<img class="demo" src="images/item_zoom6-02.jpg" onclick="changeImage06('images/item_zoom6-02.jpg'); currentSlide(2)">
<img class="demo" src="images/item_zoom6-03.jpg" onclick="changeImage06(this.src); currentSlide(3)">
<img class="demo" src="images/item_zoom6-04.jpg" onclick="changeImage06(this.src); currentSlide(4)">
</dd>
</dl>
</div>
<a class="window_close" href="#none" onclick="javascript:doDisplay06();">창 닫기</a>
</div>
</div>
</div>
<div id="event" class="event">
<h2>EVENT</h2>
<ul>
<li class="event01">
<a href="#none">12월 이벤트 스테이크 2+1. 스터링 실버 스테이크 2개 이상 구매 시, 채끝 1peice 무료 증정&#40;200개 한정&#41;</a>
</li>
<li class="event02">
<a href="https://vimeo.com/376304485" target="video">
<iframe name="video" title="vimeo-player" src="https://player.vimeo.com/video/376304485?autoplay=1&loop=1&autopause=0" frameborder="0" allowfullscreen></iframe>
</a>
</li>
<li class="event03">
<div class="event03_1">
<a href="#none"></a>
</div>
<div class="event03_2">
<a href="#none"></a>
</div>
</li>
</ul>
</div>
<div class="news_store">
<div id="news" class="news">
<h2>NEWS</h2>
<ul>
<li class="news_bg"></li>
<li class="news_more">
<span>엑셀뉴스</span>
<a href="gnb/news_event.php">MORE</a>
</li>
</ul>
</div>
<div id="store" class="store">
<h2>STORE 바로가기</h2>
<ul>
<li class="store01"><a href="http://itsmeat.shop/" target="_blank">이츠미트</a></li>
<li class="store02"><a href="http://www.anguspark.com/" target="_blank">앵거스박</a></li>
<li class="store03"><a href="https://cattlehouse.co.kr/" target="_blank">캐틀하우스</a></li>
</ul>
</div>
</div>
<div id="sns" class="sns_news">
<h2>SNS NEWS</h2>
<ul>
<li class="instargram"><a href="https://www.instagram.com/" target="_blank">인스타그램</a></li>
<li class="youtube"><a href="https://www.youtube.com/" target="_blank">유튜브</a></li>
<li class="facebook"><a href="https://www.facebook.com/" target="_blank">페이스북</a></li>
<li class="kakao"><a href="https://story.kakao.com/s/login" target="_blank">카카오 스토리</a></li>
</ul>
</div>
</div>
</section>
<?php include "inc/foot.php" ?>