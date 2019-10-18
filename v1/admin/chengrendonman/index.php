<?php 
require_once '../config.php';

if(!isset($_REQUEST['classid'])){
	exit("缺少参数1");
}
if(!isset($_REQUEST['fenlei'])){
	exit("缺少参数2");
}
if(!isset($_REQUEST['pageindex'])){
	exit("缺少参数3");
}
if(!isset($_REQUEST['pagesize'])){
	exit("缺少参数4");
}


$classid = $_REQUEST['classid'];
$fenlei = $_REQUEST['fenlei'];
$pageindex = $_REQUEST['pageindex'];
$pagesize = $_REQUEST['pagesize'];
$yue = ($pageindex-1) * $pagesize;

if($fenlei == 0){
	$query = "select * from phome_ecms_movie where classid={$classid} ";
    $sql = "select * from phome_ecms_movie where classid={$classid} limit {$yue} ,{$pagesize}";

}else{
	$query = "select * from phome_ecms_movie where classid={$classid} and fenlei= {$fenlei} ";
    $sql = "select * from phome_ecms_movie where classid={$classid} and fenlei= {$fenlei} limit {$yue} ,{$pagesize}";
}


$result = mysqli_query($link,$sql);
$results = mysqli_query($link,$query);
$count = mysqli_num_rows($results);

$arrs = mysqli_fetch_all($result,MYSQLI_ASSOC);
exit(json_encode(array(
	'data' => $arrs,
	'count'=> $count
)));







