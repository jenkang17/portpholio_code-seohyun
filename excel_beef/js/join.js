function form_check(){
	var uid = document.getElementById("uid");
	var pwd = document.getElementById("pwd");
	var repwd = document.getElementById("repwd");
	var uname = document.getElementById("uname");
	var mobileM = document.getElementById("mobileM");
	var mobileL = document.getElementById("mobileL");
	var smsY = document.getElementById("smsY");
	var smsN = document.getElementById("smsN");
	var emailY = document.getElementById("emailY");
	var emailN = document.getElementById("emailN");
	var termCheck = document.getElementById("terms_check");
	var privacyCheck = document.getElementById("privacy_check");
	
	
//		id check
		if(!uid.value){
			alert("아이디를 입력해주세요.");
			uid.focus();
			return false;
		};
//		var idLen = uid.value.length;
//		if(idLen < 8 || idLen > 16){
//			alert("8~16자 이내로 입력해주세요.");
//			uid.focus();
//			return false;
//		};
		var idCheck = /^[a-z0-9]{8,16}$/;
		if(!idCheck.test(uid.value)){
			alert("아이디를 조건에 맞게 작성해주세요.");
			uid.focus();
			return false;
		};
	
//pw check
	if(!pwd.value){
		alert("비밀번호를 입력해주세요.");
		pwd.focus();
		return false;
	};
	var pwdCheck = /^[a-zA-Z0-9]{8,16}$/;
	if(!pwdCheck.test(pwd.value)){
		alert("비밀번호를 조건에 맞게 작성해주세요.");
		pwd.focus();
		return false;
	};
	if(!repwd.value){
		alert("비밀번호를 입력해주세요.");
		repwd.focus();
		return false;
	};
	
	if(pwd.value != repwd.value){
		alert("비밀번호를 확인해주세요.")
	};
	
	//name check
	if(!uname.value){
		alert("이름을 입력해주세요.");
		uname.focus();
		return false;
	};
	
	//mobile
	if(!mobileM.value){
		alert("휴대폰 번호를 입력해주세요.");
		mobileM.focus();
		return false;
	};
	if(!mobileL.value){
		alert("휴대폰 번호를 입력해주세요.");
		mobileL.focus();
		return false;
	};
	
	var mobileCheck = /^[0-9]{3,4}$/;
	if(!mobileCheck.test(mobileM.value)){
		alert("핸드폰 번호가 잘못 입력되었습니다.");
		mobile.focus();
		return false;
	};
	if(!mobileCheck.test(mobileL.value)){
		alert("핸드폰 번호가 잘못 입력되었습니다.");
		mobile.focus();
		return false;
	};
	
	//SMS
	if(smsY.checked != true && smsN.checked != true){
		alert("문자 수신 동의 여부를 선택해주세요.");
		return false;
	};
	
	//email
	if(emailY.checked != true && emailN.checked != true){
		alert("이메일 수신 동의 여부를 선택해주세요.");
		return false;
	};
	
	//term
	if(termCheck.checked != true){
		alert("이용약관 동의에 체크해주세요.");
		return false;
	};
	if(privacyCheck.checked != true){
		alert("개인정보수집 동의에 체크해주세요.");
		return false;
	};
	
	join_form.submit();
};

function email_change(){
	var emailSel = document.getElementById("emailSel");
	var emailDns = document.getElementById("emailDns");
	var idx = emailSel.options.selectedIndex;
	var val = emailSel.options[idx].value;
	
	emailDns.value = val;
	
};

function idCheck(){
 window.open("id_check.php","p", "width=550,height=250,left=660,top=300");
};
//function check(){
//	if(uid.value == true){
//		alert("값이있습니다.");
//	};
//	};
