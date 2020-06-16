<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800&display=swap&subset=korean" rel="stylesheet">
<title>회원가입</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/join.css">
<link rel="stylesheet" type="text/css" href="../css/foot.css">
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
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
</script>
<script src="../js/join.js"></script>
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
<i class="fab fa-accessible-icon"></i>
          <li class="gm01"><a href="../gnb/about_us.php">about us</a></li>
          <li class="gm02"><a href="../gnb/product.php">product</a></li>
          <li class="gm03"><a href="../gnb/news_event.php">event news</a></li>
          <li class="gm04"><a href="../gnb/notice.php">notice</a></li>
          <li class="gm05"><a href="../gnb/partnershop.php">partnershop</a></li>
				</ul>
			</div>
			<div class="top_menu">
				<ul>
					<li class="tm01"><a href="../login/login.php">로그인</a></li>
					<li class="tm02"><a href="#none">마이페이지</a></li>
					<li class="tm03"><a href="#none">장바구니</a></li>
					<li class="tm04"><a href="#none">주문확인</a></li>
					<li class="tm05"><a href="#">JOIN</a><p>3000point 적립</p></li>
				</ul>
			</div>
      <a class="search_bt" href="#none" id="search_bt">검색열기</a>
			<form name="ddd" action="ddd.pjp" method="post" class="search" id="search" style="display: none">
				<fieldset id="searchBuiltIn">
					<legend>내장찾기</legend>
					<label for="sch_txt">검색</label>
					<input type="text" name="sch_txt" id="sch_txt" value="SEARCH" onFocus="this.value=''; return false">
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
<li>회원가입</li>
</ul>
</div>
<h2>회원가입</h2>
<form name="join_form" action="members.php" method="post">
<fieldset>
<legend>회원가입</legend>
<table>
<tbody>
<tr>
<td class="txt">
<label for="uid">아이디<span>&#42;</span></label>
</td>
<td>
<input type="text" name="uid" id="uid" onkeyup="idCheck()">

<button class="idcon_bt" type="button" onclick="idCheck()">중복확인</button>
<span class="uid_limit">&#40;영문 소문자&#47;숫자&#44; 8&#126;16자&#41;</span>
<p class="" style="display:none">사용 가능한 아이디 입니다.</p>
<p class="id_overlap" style="display:none">중복된 아이디 입니다.</p>
<p class="id_error" style="display:none">아이디를 조건에 맞게 작성해주세요.&#40;영문 소문자&#47;숫자&#44; 8&#126;16자&#41;</p>
</td>
</tr>
<tr>
<td class="txt">
<label for="pwd">비밀번호<span>&#42;</span></label>
</td>
<td>
<input type="text" name="pwd" id="pwd">
<span class="input_msg">&#40;영문 대소문자&#47;숫자&#47;특수문자 중 2가지 이상 조합&#46; 10&#126;16자&#41;</span>
</td>
</tr>
<tr>
<td class="txt">
<label for="repwd">비밀번호 확인<span>&#42;</span></label>
</td>
<td>
<input type="text" name="repwd" id="repwd">
</td>
</tr>
<tr>
<td class="txt">
<label for="uname">이름<span>&#42;</span></label>
</td>
<td>
<input type="text" name="uname" id="uname">
</td>
</tr>
<tr class="mobile_number">
<td class="txt">
<label for="mobile">휴대전화<span>&#42;</span></label>
</td>
<td>
<select name="mobile" id="mobile">
<option value="010">010</option>
<option value="011">011</option>
<option value="016">016</option>
<option value="017">017</option>
<option value="018">018</option>
<option value="019">019</option>
</select>
-
<input type="text" name="mobileM" id="mobileM">
-
<input type="text" name="mobileL" id="mobileL">
</td>
</tr>
<tr class="sms">
<td class="txt">
	<label for="sms">SMS수신여부<span>&#42;</span></label>
</td>
<td class="sms_agree">
<label for="smsY">
<input type="radio" name="sms" id="smsY" value="Yes">동의함
</label>
<label for="smsN">
<input type="radio" name="sms" id="smsN" value="No">동의안함
</label>
<p>쇼핑몰에서 제공하는 유익한 이벤트 소식을 SMS로 받으실 수 있습니다.</p>
</td>
</tr>
<tr class="email01">
<td class="txt">
<label for="email">이메일<span>&#42;</span></label>
</td>
<td>
<input class="email_id" type="text" name="emailId" id="emailId"> @
<input class="email_dns" type="text" name="emailDns" id="emailDns">
<select class="email_sel" name="emailSel" id="emailSel" onchange="email_change()">
<option value="">직접입력</option>
<option value="naver.com">네이버</option>
<option value="hanmail.net">다음</option>
<option value="gmail.com">구글</option>
</select>
</td>
</tr>
<tr class="email02">
<td class="txt">
<label for="apply">이메일 수신여부<span>&#42;</span></label>
</td>
<td class="email_agree">
<label for="emailY">
<input type="radio" name="email" id="emailY" value="Yes">동의함
</label>
<label for="emailN">
<input type="radio" name="email" id="emailN" value="No">동의안함
</label>
<p>쇼핑몰에서 제공하는 유익한 이벤트 소식을 이메일로 받으실 수 있습니다.</p>
</td>
</tr>
</tbody>
</table>
</fieldset>
</form>
<div class="terms">
<h3>이용약관 동의</h3>
<div class="terms_content">
<p>제1조(목적)
이 약관은 모닝썬푸드 회사(전자상거래 사업자)가 운영하는 이츠미트 몰(이하 “몰”이라 한다)에서 제공하는 인터넷 관련 서비스(이하 “서비스”라 한다)를 이용함에 있어 사이버 몰과 이용자의 권리․의무 및 책임사항을 규정함을 목적으로 합니다.
※「PC통신, 무선 등을 이용하는 전자상거래에 대해서도 그 성질에 반하지 않는 한 이 약관을 준용합니다.」
</p>
<p>제2조(정의)
① “몰”이란 모닝썬푸드 회사가 재화 또는 용역(이하 “재화 등”이라 함)을 이용자에게 제공하기 위하여 컴퓨터 등 정보통신설비를 이용하여 재화 등을 거래할 수 있도록 설정한 가상의 영업장을 말하며, 아울러 사이버몰을 운영하는 사업자의 의미로도 사용합니다.
② “이용자”란 “몰”에 접속하여 이 약관에 따라 “몰”이 제공하는 서비스를 받는 회원 및 비회원을 말합니다.
③ ‘회원’이라 함은 “몰”에 (삭제) 회원등록을 한 자로서, 계속적으로 “몰”이 제공하는 서비스를 이용할 수 있는 자를 말합니다.
④ ‘비회원’이라 함은 회원에 가입하지 않고 “몰”이 제공하는 서비스를 이용하는 자를 말합니다.
</p>
<p>제3조 (약관 등의 명시와 설명 및 개정)
① “몰”은 이 약관의 내용과 상호 및 대표자 성명, 영업소 소재지 주소(소비자의 불만을 처리할 수 있는 곳의 주소를 포함), 전화번호․모사전송번호․전자우편주소, 사업자등록번호, 통신판매업 신고번호, 개인정보보호책임자등을 이용자가 쉽게 알 수 있도록 00 사이버몰의 초기 서비스화면(전면)에 게시합니다. 다만, 약관의 내용은 이용자가 연결화면을 통하여 볼 수 있도록 할 수 있습니다.
② “몰은 이용자가 약관에 동의하기에 앞서 약관에 정하여져 있는 내용 중 청약철회․배송책임․환불조건 등과 같은 중요한 내용을 이용자가 이해할 수 있도록 별도의 연결화면 또는 팝업화면 등을 제공하여 이용자의 확인을 구하여야 합니다.
③ “몰”은 「전자상거래 등에서의 소비자보호에 관한 법률」, 「약관의 규제에 관한 법률」, 「전자문서 및 전자거래기본법」, 「전자금융거래법」, 「전자서명법」, 「정보통신망 이용촉진 및 정보보호 등에 관한 법률」, 「방문판매 등에 관한 법률」, 「소비자기본법」 등 관련 법을 위배하지 않는 범위에서 이 약관을 개정할 수 있습니다.
④ “몰”이 약관을 개정할 경우에는 적용일자 및 개정사유를 명시하여 현행약관과 함께 몰의 초기화면에 그 적용일자 7일 이전부터 적용일자 전일까지 공지합니다. 다만, 이용자에게 불리하게 약관내용을 변경하는 경우에는 최소한 30일 이상의 사전 유예기간을 두고 공지합니다. 이 경우 "몰“은 개정 전 내용과 개정 후 내용을 명확하게 비교하여 이용자가 알기 쉽도록 표시합니다.
⑤ “몰”이 약관을 개정할 경우에는 그 개정약관은 그 적용일자 이후에 체결되는 계약에만 적용되고 그 이전에 이미 체결된 계약에 대해서는 개정 전의 약관조항이 그대로 적용됩니다. 다만 이미 계약을 체결한 이용자가 개정약관 조항의 적용을 받기를 원하는 뜻을 제3항에 의한 개정약관의 공지기간 내에 “몰”에 송신하여 “몰”의 동의를 받은 경우에는 개정약관 조항이 적용됩니다.
⑥ 이 약관에서 정하지 아니한 사항과 이 약관의 해석에 관하여는 전자상거래 등에서의 소비자보호에 관한 법률, 약관의 규제 등에 관한 법률, 공정거래위원회가 정하는 전자상거래 등에서의 소비자 보호지침 및 관계법령 또는 상관례에 따릅니다.
</p>
</div>
<p>이용약관에 동의하십니까?</p>
<label for="terms_check"><input type="checkbox" name="terms_check" id="terms_check">동의함</label>
</div>
<div class="privacy">
<h3>개인정보 수집 및 이용 동의</h3>
<div class="privacy_content">
<p>제1조(목적)
이 약관은 모닝썬푸드 회사(전자상거래 사업자)가 운영하는 이츠미트 몰(이하 “몰”이라 한다)에서 제공하는 인터넷 관련 서비스(이하 “서비스”라 한다)를 이용함에 있어 사이버 몰과 이용자의 권리․의무 및 책임사항을 규정함을 목적으로 합니다.
※「PC통신, 무선 등을 이용하는 전자상거래에 대해서도 그 성질에 반하지 않는 한 이 약관을 준용합니다.」
</p>
<p>제2조(정의)
① “몰”이란 모닝썬푸드 회사가 재화 또는 용역(이하 “재화 등”이라 함)을 이용자에게 제공하기 위하여 컴퓨터 등 정보통신설비를 이용하여 재화 등을 거래할 수 있도록 설정한 가상의 영업장을 말하며, 아울러 사이버몰을 운영하는 사업자의 의미로도 사용합니다.
② “이용자”란 “몰”에 접속하여 이 약관에 따라 “몰”이 제공하는 서비스를 받는 회원 및 비회원을 말합니다.
③ ‘회원’이라 함은 “몰”에 (삭제) 회원등록을 한 자로서, 계속적으로 “몰”이 제공하는 서비스를 이용할 수 있는 자를 말합니다.
④ ‘비회원’이라 함은 회원에 가입하지 않고 “몰”이 제공하는 서비스를 이용하는 자를 말합니다.
</p>
<p>제3조 (약관 등의 명시와 설명 및 개정)
① “몰”은 이 약관의 내용과 상호 및 대표자 성명, 영업소 소재지 주소(소비자의 불만을 처리할 수 있는 곳의 주소를 포함), 전화번호․모사전송번호․전자우편주소, 사업자등록번호, 통신판매업 신고번호, 개인정보보호책임자등을 이용자가 쉽게 알 수 있도록 00 사이버몰의 초기 서비스화면(전면)에 게시합니다. 다만, 약관의 내용은 이용자가 연결화면을 통하여 볼 수 있도록 할 수 있습니다.
② “몰은 이용자가 약관에 동의하기에 앞서 약관에 정하여져 있는 내용 중 청약철회․배송책임․환불조건 등과 같은 중요한 내용을 이용자가 이해할 수 있도록 별도의 연결화면 또는 팝업화면 등을 제공하여 이용자의 확인을 구하여야 합니다.
③ “몰”은 「전자상거래 등에서의 소비자보호에 관한 법률」, 「약관의 규제에 관한 법률」, 「전자문서 및 전자거래기본법」, 「전자금융거래법」, 「전자서명법」, 「정보통신망 이용촉진 및 정보보호 등에 관한 법률」, 「방문판매 등에 관한 법률」, 「소비자기본법」 등 관련 법을 위배하지 않는 범위에서 이 약관을 개정할 수 있습니다.
④ “몰”이 약관을 개정할 경우에는 적용일자 및 개정사유를 명시하여 현행약관과 함께 몰의 초기화면에 그 적용일자 7일 이전부터 적용일자 전일까지 공지합니다. 다만, 이용자에게 불리하게 약관내용을 변경하는 경우에는 최소한 30일 이상의 사전 유예기간을 두고 공지합니다. 이 경우 "몰“은 개정 전 내용과 개정 후 내용을 명확하게 비교하여 이용자가 알기 쉽도록 표시합니다.
⑤ “몰”이 약관을 개정할 경우에는 그 개정약관은 그 적용일자 이후에 체결되는 계약에만 적용되고 그 이전에 이미 체결된 계약에 대해서는 개정 전의 약관조항이 그대로 적용됩니다. 다만 이미 계약을 체결한 이용자가 개정약관 조항의 적용을 받기를 원하는 뜻을 제3항에 의한 개정약관의 공지기간 내에 “몰”에 송신하여 “몰”의 동의를 받은 경우에는 개정약관 조항이 적용됩니다.
⑥ 이 약관에서 정하지 아니한 사항과 이 약관의 해석에 관하여는 전자상거래 등에서의 소비자보호에 관한 법률, 약관의 규제 등에 관한 법률, 공정거래위원회가 정하는 전자상거래 등에서의 소비자 보호지침 및 관계법령 또는 상관례에 따릅니다.
</p>
</div>
<p>이용약관에 동의하십니까?</p>
<label for="privacy_check">
<input type="checkbox" name="privacy_check" id="privacy_check">동의함
</label>
</div>
<button class="join_bt" type="button" onclick="form_check(this.form)">회원가입</button>
<button class="cancel_bt" type="button" onClick="javascript:history.back();">회원가입 취소</button>
</div>
</main>
<?php include "../inc/foot.php" ?>