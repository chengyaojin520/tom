<?php 
require_once '../config.php';

if(!isset($_REQUEST['txttype'])){
	exit("缺少参数2");
}
if(!isset($_REQUEST['pageindex'])){
	exit("缺少参数3");
}
if(!isset($_REQUEST['pagesize'])){
	exit("缺少参数4");
}


//$classid = $_REQUEST['classid'];
$txttype = $_REQUEST['txttype'];
$pageindex = $_REQUEST['pageindex'];
$pagesize = $_REQUEST['pagesize'];
$yue = ($pageindex-1) * $pagesize;


if($txttype == '全部'){
	$query = "select id from phome_ecms_article ";
    $sql = "select * from phome_ecms_article limit {$yue} ,{$pagesize}";
}else{
	$query = "select id from phome_ecms_article  where txttype = '{$txttype}' ";
    $sql = "select * from phome_ecms_article where txttype = '{$txttype}' limit {$yue} ,{$pagesize}";
}


$result = mysqli_query($link,$sql);
$results = mysqli_query($link,$query);
$count = mysqli_num_rows($results);

$arrs = mysqli_fetch_all($result,MYSQLI_ASSOC);
exit(json_encode(array(
	'data' => $arrs,
	'count'=> $count
)));







