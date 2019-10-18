<?php 
require_once '../config.php';

// if(!isset($_POST['classid'])){
// 	exit("缺少参数1");
// }
// if(!isset($_POST['fenlei'])){
// 	exit("缺少参数2");
// }

// $classid = $_POST['classid'];
// $fenlei = $_POST['fenlei'];

// if(!isset($_GET['classid'])){
// 	exit("缺少参数1");
// }
// if(!isset($_GET['fenlei'])){
// 	exit("缺少参数2");
// }

// $classid = $_GET['classid'];
// $fenlei = $_GET['fenlei'];

if(!isset($_REQUEST['pageindex'])){
	exit("缺少参数3");
}
if(!isset($_REQUEST['pagesize'])){
	exit("缺少参数4");
}

$pageindex = $_REQUEST['pageindex'];
$pagesize = $_REQUEST['pagesize'];
$yue = ($pageindex-1) * $pagesize;


$query = "select * from phome_ecms_movie";
$sql = "select * from phome_ecms_movie  order by newspath desc limit {$yue} ,{$pagesize}";


$result = mysqli_query($link,$sql);
$results = mysqli_query($link,$query);
$count = mysqli_num_rows($results);

$arrs = mysqli_fetch_all($result,MYSQLI_ASSOC);
exit(json_encode(array(
	'data' => $arrs,
	'count'=> $count
)));




