
<?php 
require_once '../config.php';

if(!isset($_REQUEST['id'])){
	exit("缺少参数1");
}

$id = $_REQUEST['id'];


$sql = "select * from phome_ecms_movie where id ={$id}";
//$sql = "select * from phome_ecms_movie_data_1 as a inner join phome_ecms_movie as b on a.id = b.id where id ={$id} ";

	

$result = mysqli_query($link,$sql);

$arrs = mysqli_fetch_all($result,MYSQLI_ASSOC);

print_r(json_encode($arrs));
// exit(json_encode(array(
// 	'data' => $arrs,
// )));







