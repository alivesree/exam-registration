<?php include('classes/class_db.php') ?>

<?php
//require_once('includes/class_common.php');
if(isset($_GET['delcom']))
{
	$sql="update registered_stu set status='0' where student_id='$_GET[delcom]'";
	$result=mysqli_query($db,$sql);
	//echo $sql;

echo'<meta http-equiv="refresh" content="0; URL= home.php">';
}
?>	
