<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Directory</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!--<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />--> 
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
  
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
 

	</head>
<body>
<div id="wrapper">
<?php include('classes/class_db.php');  ?>

         <?php require_once('includes/side_nav.php'); ?>

		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">

 	<!--grid-->
 	<div class="validation-system">
  <!--banner-->	
		    <div class="banner">		   
				<h2>
				<a href="home.php">Dashboard</a>
				<i class="fa fa-angle-right"></i>
				<span>Update User</span>

				</h2>
		    </div>
		<!--//banner-->
	
 		<div class="validation-form">
 	<!---->
  <?php 
//	echo "test";
	  if(isset($_GET['upitem']))
{
//	echo "inner";
$sqla="select * from registered_stu where student_id=".$_GET['upitem']."";
$res1=mysqli_query($db,$sqla);

while($row=mysqli_fetch_array($res1))
{
//echo $row['muncipality'];
?>
    <form action="#" method="post" name="form13" id="form13">
      <input type="hidden" name="sta" value="<?php echo $row['student_id'];?>" />

         	<div class="vali-form" style="padding-bottom: 0;">      
            <div class="col-md-6 form-group1">
              <label class="control-label">Name</label>
              <input type="text" placeholder="Name" name="name" value="<?php echo $row['name'];?>" required>
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Age</label>
              <input type="text" placeholder="Companyname" name="age" value="<?php echo $row['age'];?>" required>
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="vali-form">      
            <div class="col-md-6 form-group1">
              <label class="control-label">Present Address</label>
              <input type="text" placeholder="Muncipality or Corporation" name="present" value="<?php echo $row['present_add'];?>" required>
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Permenent Adress</label>
              <input type="text" name="paddress" value="<?php echo $row['permenent_add'];?>" required>
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Previous Collge Attended for graduation</label>
              <input type="text" placeholder="Phone Number" name="graduation" value="<?php echo $row['previous'];?>">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Email ID</label>
              <input type="text" placeholder="Mobile Number" name="email" value="<?php echo $row['email'];?>" required>
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Phone Number</label>
              <input type="text" placeholder="example@gmail.com" name="phn" value="<?php echo $row['phone'];?>"required>
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Previous Experience with us</label>
              <input type="text" placeholder="Current Website Url" name="experience" value="<?php echo $row['experience'];?>">
            </div>
            <div class="clearfix"> </div>
            </div>
       
             <div class="clearfix"> </div>
                         <div class="vali-form">
              <div class="col-md-6 form-group1">
              <label class="control-label">Registered on</label>
              <input type="text" placeholder="jobcategory" name="registered" value="<?php echo $row['registered_on'];?>" required>

            </div>
           
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group" style="margin-top:15px;">
              <input type="submit" class="btn btn-primary" value="Submit" name="update">
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>  
        </form>
     <?php
}
}
?>
  <?php
if(isset($_POST['update']))
{
	
	$sql_one="update registered_stu set name='$_POST[name]',age='$_POST[age]',present_add='$_POST[present]',permenent_add='$_POST[paddress]',previous='$_POST[graduation]',email='$_POST[email]',phone='$_POST[phn]',experience='$_POST[experience]',registered_on='$_POST[registered]' where student_id='$_POST[sta]'";
	
	
	$re=mysqli_query($db,$sql_one);
//		echo $sql_one();
//	die();

		echo '<meta http-equiv="Refresh" Content="0; URL=home.php">';

}
?>
 
 	<!---->
 </div>
 </div>

 </div>
		</div>
	   	</div>
       
     </body>
</html>

