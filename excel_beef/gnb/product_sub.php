<?php
session_start();
$sid = isset($_SESSION["uid"])? $_SESSION["uid"]:"";

$idx = $_GET["idx"];

include "../inc/dbcon.php";
$sql = "select * from product where idx=$idx;";

$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);
$src = $array['thumbnail'];
$srca = $array['file'];
?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>상세페이지</title>
<link rel="stylesheet" type="text/css" href="../css/product_sub.css">
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
<section class="content" id="content">
<div class="location">
<span>현재위치</span>
<ul>
<li><a href="../index.php">홈&#32;&#62;</a></li>
<li>상품</li>
</ul>
</div>
<h2><?php echo $array["name"]; ?></h2>
<article>
<div class="thumb"><?php echo "<img src='../images/$src'/>"; ?></div>
<div class="info">
<form name="" action="" method="post">
<fieldset>
<legend>상품정보</legend>
<table>
<tbody>
<tr>
<th>
<label for="origin">원산지</label>
</th>
<td id="origin"><?php echo $array["origin"] ?></td>
</tr>
<tr>
<th>
<label for="price">가격</label>
</th>
<td id="price"><?php echo $array["price"] ?>&#92;</td>
</tr>
<tr class="sale_price">
<th>
<label for="salePrice">판매가</label>
</th>
<td id="salePrice"><?php echo $array["sale_price"] ?>&#92;</td>
</tr>
<tr>
<th>
<label for="delivery">배송비</label>
</th>
<td id="delivery" class="delivery">
<select name="deliveryPrice" id="deliveryPrice">
<option value="선불">주문시 선결제(선불)</option>
<option value="착불">주문시 선결제(착불)</option>
</select>
</td>
</tr>
</tbody>
</table>
</fieldset>
</form>
<div class="total_product">
<p>수량을 선택해주세요</p>
<ul>
<li class="product_name"><?php echo $array["name"] ?></li>
<li class="product_count"><input type="number" min="1" max="10000" value="1"></li>
<li class="product_price"><?php echo $array["sale_price"] ?>&#92;</li>
</ul>
<ul class="total_price">
<li>총 상품금액&#40;수량&#41; &#58;</li>
<li> <?php echo $array["sale_price"] ?>&#92;</li>
</ul>
</div>
<div class="buy">
<a href="" class="get">바로구매</a>
<ul>
<li class="cart"><a href="">장바구니 담기 CART</a></li>
<li class="wishlist"><a href="">관심상품 등록 WISHLIST</a></li>
</ul>
</div>
</div>
</article>
</section>
<section class="product_page">
<?php echo "<img src='../images/$srca'/>"; ?>
</section>
<?php include "../inc/foot.php"?>