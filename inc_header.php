<?php
	header("Content-type: text/html; charset=utf-8");
	$host = "localhost";
	$dbuser = "root";
	$dbpwd = "root";

	$conn = mysqli_connect($host,$dbuser,$dbpwd);

	if(!$conn){
		die("数据库连接失败");
	}else{

    }

	mysqli_select_db($conn,'php');
