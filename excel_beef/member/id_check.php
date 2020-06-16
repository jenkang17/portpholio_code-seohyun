<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<title>아이디 중복검색</title>
<link rel="stylesheet" type="text/css" href="../css/id_check.css">
<script type="text/javascript">
function id_search(){
	var searchId = document.getElementById("search_id");
	var nid = document.getElementById("nid");
	var idCheck = /^[a-z0-9]{8,16}$/;
	
	if(this.window){
		searchId.focus();
	};
	
	if(!searchId.value){
		nid.innerHTML="아이디를 입력해주세요.";
		searchId.focus();
		return false;
	} else if(!idCheck.test(searchId.value)){
		nid.innerHTML="아이디를 조건에 맞게 작성해주세요.";
		searchId.focus();
		return false;
	};
	document.id_check_form.submit();
};
</script>
</head>
<body>
<h2>아이디 중복확인</h2>
<p>&#42;영문 소문자&#47;숫자&#44; 8&#126;16자&#42;</p>
<form name="id_check_form" action="id_search.php" method="post">
<fieldset>
<label>아이디 검색</label>
<table>
<tbody>
	<tr>
		<td><label for="search_id">아이디입력</label></td>
		<td>
		<input class="search_id" type="text" name="search_id" id="search_id" autofocus>
		<button class="search_bt" type="button" onclick="id_search()">검색</button>
		</td>
	</tr>
</tbody>
</table>
</fieldset>
</form>
<p id="nid" class="nid"></p>
</body>
</html>