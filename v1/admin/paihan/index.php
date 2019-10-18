<?php 
require_once '../config.php';

if(!isset($_REQUEST['classid'])){
	exit("缺少参数1");
}

$classid = $_REQUEST['classid'];

if($classid == 70){
    $sql = "select * from phome_ecms_article where classid={$classid} order by plnum desc limit 10";
}else{
	$sql = "select * from phome_ecms_movie where classid={$classid} order by plnum desc limit 10";
}
	

$result = mysqli_query($link,$sql);

$arrs = mysqli_fetch_all($result,MYSQLI_ASSOC);
exit(json_encode(array(
	'data' => $arrs,
)));







