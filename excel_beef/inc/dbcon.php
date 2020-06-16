<?php 
//데이터비이스 연결
$dbcon = mysqli_connect("localhost", "jenkang", "wowsmm1202!!") or die("DB 접속에 실패하였습니다.");

//DB선택
mysqli_select_db($dbcon, "jenkang");

//문자셋 설정
mysqli_set_charset($dbcon, "UTF-8");
?>