<?php
	$host = '127.0.0.1';
	$database = 'hotel';
	$user = 'root';
	$password = 'vertrigo';
	
	$link = mysqli_connect($host, $user, $password, $database);
	if($link)
	{
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		mysqli_set_charset($link, 'utf8');
	}
	else
		die('Không thể kết nối tới server!');
?>