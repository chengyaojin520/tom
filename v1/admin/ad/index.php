<?php 
require_once '../config.php';

$sql = "select * from ad";

$query = mysqli_query($link$sql);
if(!$query){
	exit("查询失败");
}

$arrs = mysqli_fetch_all($query,MYSQLI_ASSOC);

echo json_encode($arrs);







 ?>
