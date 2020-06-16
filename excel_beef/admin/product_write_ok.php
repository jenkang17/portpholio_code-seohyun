<?php
session_start();
$sid = isset($_SESSION["uid"])? $_SESSION["uid"]: "";

$uid = $_POST["id"];
$name = $_POST["name"];
$origin = $_POST["origin"];
$price = $_POST["price"];
$sale_price = $_POST["salePrice"];
$cont = $_POST["cont"];
$thumbnail = $_POST["thumbnail"];
$file = $_POST["getFile"];
$reg_date = date("y-m-d");

include "../inc/dbcon.php";

$sql = "insert into product(uid,name,origin,price,sale_price,cont,thumbnail,file,reg_date) values('$uid','$name','$origin','$price','$sale_price','$cont','$thumbnail','$file','$reg_date');";

mysqli_query($dbcon,$sql);

mysqli_close($dbcon);
echo "
<script>
 alert('상품이 업데이트 되었습니다.');
 location.href='../gnb/product.php';
</script>
";
?>


