<?php
$uid = $_POST["uid"];
$pwd = $_POST["pwd"];
$uname = $_POST["uname"];
$mobile = $_POST["mobile"];
$mobileM = $_POST["mobileM"];
$mobileL = $_POST["mobileL"];
$mobile = $mobile.$mobileM.$mobileL;
$smsAgree = $_POST["sms"];
$emailId = $_POST["emailId"];
$emailDns = $_POST["emailDns"];
$email = $emailId."@".$emailDns;
$emailAgree = $_POST["email"];
$regDate = date("Y-m-d");

//echo  $uid."<br>";
//echo  $pwd."<br>";
//echo  $repwd."<br>";
//echo  $uname."<br>";
//echo  $mobile."<br>";
//echo  $mobileM."<br>";
//echo  $mobileL."<br>";
//echo  $mobile."<br>";
//echo  $smsAgree."<br>";
//echo  $emailId."<br>";
//echo  $emailDns."<br>";
//echo  $email."<br>";
//echo  $emailAgree."<br>";
//echo  $regDate."<br>";

include "../inc/dbcon.php";

$sql = "insert into excelbeef(uid,pwd,uname,mobile,smsRec,email,emailRec,regDate) values('$uid','$pwd','$uname','$mobile','$smsAgree','$email','$emailAgree','$regDate');";

mysqli_query($dbcon, $sql);

mysqli_close($bdcon);

echo "
<script type=text/javascript>
location.href='result.php';
</script> 
";
?>
