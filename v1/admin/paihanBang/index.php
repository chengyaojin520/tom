<?php 
require_once '../config.php';

if(!isset($_REQUEST['paihan'])){
	exit("缺少参数1");
}

$paihan = $_REQUEST['paihan'];

if($paihan == 1){
    $sql = "select * from phome_ecms_movie  order by plnum desc limit 10";
}else if($paihan == 2){
	 $sql = "select * from phome_ecms_movie  order by cha desc limit 10";
}else if($paihan == 3){
	 $sql = "select * from phome_ecms_movie  order by zan desc limit 10";
}else if($paihan == 4){
	 $sql = "select * from phome_ecms_photo  order by onclick desc limit 10";
}
	

$result = mysqli_query($link,$sql);

$arrs = mysqli_fetch_all($result,MYSQLI_ASSOC);
exit(json_encode(array(
	'data' => $arrs,
)));







