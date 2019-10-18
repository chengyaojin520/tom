
 <?php 

require_once '../config.php';


 $sql = "select * from nav";
 $query = mysqli_query($link,$sql);
 if(!$query){
 	exit("查询失败");
 	//echo "<h1>查询失败</h1>";
 	//echo '系统报错信息：' mysqli_connect_error();
 	//die();
 }
 $arrs = mysqli_fetch_all($query,MYSQLI_ASSOC);
 echo $arr=json_encode($arrs);




 