<?php

header("Access-Control-Allow-Origin: *");  // 允许任意域名发起的跨域请求
header('Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE'); // 允许请求的类型
header('Access-Control-Allow-Credentials: true'); // 设置是否允许发送 cookies
header('Access-Control-Allow-Headers: Authorization, Content-Type,   If-Match, If-Modified-Since, If-None-Match, If-Unmodified-Since, X-Requested-With');



/**
 * 项目中用到的配置信息
 */
 define('DB_HOST','127.0.0.1');
 define('DB_USER','root');
 define('DB_PASS','root');
 define('DB_NAME','tom');

 $link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
 if(!$link){
 	exit("连接数据库失败");
 	//echo "<h1>连接数据库失败</h1>";
    //echo "系统报错信息：" mysqli_connect_error() ;
    //die();
 }

