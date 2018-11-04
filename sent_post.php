<?php 
header("content-type:text/javasrcipt;charset=utf-8");
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'lad_connect_mysql');

$con = mysql_connect(HOST,USER,PASS,DB) or die('Unable to connect');

$comment = $_POST['comment'];

if (isset($_POST)){
	if($_POST['isAdd']=='true'){

		$sql = "INSERT INTO content (ID,comment) VALUES ('','".$comment."')";
		mysql_query($con,$sql);
	}
}

mysql_close($con);
?>