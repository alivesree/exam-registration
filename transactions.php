<?php
 require_once('admin/classes/class_db.php');
 $val =$_GET['id'];
 echo $val;

	 $query = "update registered_stu set payment_status=1 WHERE email='$val'";
//	 echo $query;
	 $result = mysqli_query($db, $query);
echo "updated";
session_start();
	setcookie("payment_status","1",0,"/");
	$_SESSION["payment_status"] ="1";
?>