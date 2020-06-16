<?php 
session_start();
$sid = isset($_SESSION["uid"])? $_SESSION["uid"]:"";

//$idx = $_GET["idx"];

//if(!$sid){
//	echo "
//	<script type='text/javascript'>
//		alert('로그인 사용자만 사용가능합니다.');
//		location.href='../login/login.php';
//	</script>
//	";
//};


include "../inc/dbcon.php";

$sql = "select * from product where uid='$sid';";

$result = mysqli_query($dbcon, $sql);

//$array = mysqli_fetch_array($result);
//echo $array["uid"];

?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<title>상품 업로드</title>
<link rel="stylesheet" href="../css/product_write.css">
<link rel="stylesheet" href="../css/foot.css">
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
	function formCheck(frm){
		var name = document.getElementById("name");
		var cont = document.getElementById("content");
		
		if (!name.value){
			alert("제목을 입력해주세요.");
			name.focus();
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
<li><a href="../index.php">홈 &#32;</a></li>
<li>&#62; 관리자페이지</li>
<li>&#62; 상품 업로드</li>
</ul>
</div>
<h2>상품 업로드</h2>
<form name="product_write" action="product_write_ok.php" method="post">
<fieldset>
<legend>상품 업로드</legend> 
<ul>
<li>
<div><strong>아이디</strong></div>
<div><input type="READONLY " name="id" class="id" id="id" value="<?php echo $sid ?>"></div>
</li>
<li>  
<div><strong>상품명</strong></div>
<div><input name="name" type="text" class="name" id="name"></div>
</li>
<li>  
<div><strong>원산지</strong></div>
<div><input name="origin" type="text" class="origin" id="origin"></div>
</li>
<li>
<div><strong>가격</strong></div>
<div><input name="price" type="text" class="price" id="price"></div>
</li>
<li>
<div><strong>할인가격</strong></div>
<div><input name="salePrice" type="text" class="sale_price" id="salePrice"></div>
</li>
<li>
<div  class="con"><strong>상품 설명글</strong></div>
<div><textarea name="cont" type="text" class="cont" id="cont"></textarea></div>
</li>
<li class="thumnail">
<div><strong>썸네일첨부</strong></div>
<div>
<input name="thumbnail" type="file" class="thumbnail" id="thumbnail" value="썸네일 첨부">
</div>
</li>
<li class="file">
<div><strong>사진첨부</strong></div>
<div>
<input name="getFile" type="file" class="get_file" id="getFile" value="파일첨부">
</div>
</li>
</ul>
</fieldset>
<button type="button" onclick="formCheck(this.form)">등록</button>
<button type="button" onclick = "history.back(-1)">취소</button>
</form>
</div>
</section>
<?php include "../inc/foot.php" ?>