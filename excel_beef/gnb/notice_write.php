<?php 
session_start();
$sid = isset($_SESSION["uid"])? $_SESSION["uid"]: "";

//$idx = $_GET["idx"];

if(!$sid){
	echo "
	<script type='text/javascript'>
		alert('로그인 사용자만 사용가능합니다.');
		location.href='../login/login.php';
	</script>
	";
};


include "../inc/dbcon.php";

$sql = "select * from notice where uid='$sid';";

$result = mysqli_query($dbcon, $sql);

$array = mysqli_fetch_array($result);
//echo $array["uid"];

?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<title>게시판 작성</title>
<link rel="stylesheet" type="text/css" href="../css/head.css">
<link rel="stylesheet" href="../css/notice_edit.css">
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
<li class="gm02"><a href="#none">menu</a></li>
<li class="gm03"><a href="#none">sale</a></li>
<li class="gm04"><a href="news_event.php">event</a></li>
<li class="gm05"><a href="notice.php">notice</a></li>
<li class="gm06"><a href="#none">Q&#38;A</a></li>
<li class="gm07"><a href="partnershop.php">partnershop</a></li>
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
<input type="text" name="sch_txt" id="sch_txt" value="SEARCH" onfocus="this.value=''; return false">
<button type="submit"></button>
</fieldset>
</form>
<!-- <script type="text/javascript">
  var sctTxt = document.getElementById("sch_txt");

  if(sctTxt.focous()){
    remove.value();
  } else {
    sctTxt.value;
  };
</script> -->
<script type="text/javascript">
$(document).ready(function(){
$(".search_bt").click(function(){
$("#search").toggle(300);
});
});
</script>
</header>
<main class="content" id="content">
<h2>게시글 작성</h2>
<form name="notice_edit" action="notice_write_ok.php" method="post">
<fieldset>
<legend>게시글 작성</legend> 
<ul>
<li>
<div><strong>아이디</strong></div>
<div>
<input type="READONLY " name="id" class="id" id="id" value="<?php echo $array["uid"] ?>"></div>
</li>
<li>  
<div><strong>제목</strong></div>
<div><input name="title" type="text" class="title" id="title"></div>
</li>
<li>
<div class="con"><strong>내용</strong></div>
	<div><textarea name="content" type="text" class="content" id="content"></textarea></div>
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
</main>
<?php include "../inc/foot.php" ?>