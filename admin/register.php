<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Admin</title>
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
  
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
 <script>
function ajaxFunctionMainMenu2(page){
	var ajaxRequest;  
	try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	
	}
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
		object = document.getElementById("ditrictid");
			object.innerHTML = ajaxRequest.responseText;
			object.className = "visibleNotifyMsgSubmenu";
		}
	}
	var type=document.getElementById("states").value;
    var query='?type='+ type ;
	//alert(page);
	ajaxRequest.open("GET", page+query, true);
	ajaxRequest.send(null); 
}
</script>

	</head>
<body>
<div id="wrapper">
<?php include('functions.php') ?>

         <?php require_once('includes/side_nav.php'); ?>

		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">

 	<!--grid-->
 	<div class="validation-system">
  <!--banner-->	
		    <div class="banner">		   
				<h2>
				<a href="index.php">Dashboard</a>
				<i class="fa fa-angle-right"></i>
				<span>Registration</span>
				</h2>
		    </div>
		<!--//banner-->
	
 		<div class="validation-form">
 	<!---->
  <?php 
if(isset($_POST['submit']))
{
	$sql_one="insert into registered_users(name,c_name,s_id,d_id,muncipality,panchayath,phn,mobile,e_mail,url,cat_id,date,description,status)values('$_POST[name]','$_POST[cname]','$_POST[state]','$_POST[states]','$_POST[muncipality]','$_POST[panchayath]','$_POST[phn]','$_POST[mobile]','$_POST[mail]','$_POST[url]','$_POST[category]','$_POST[date]','$_POST[about]',1)";
	$result=mysqli_query($db,$sql_one);
	//	echo '<meta http-equiv="Refresh" Content="0; URL=#">';

	//echo $sql_one;
//die();
}
?>
  	    
        <form action="#" method="post">
         	<div class="vali-form" style="padding-bottom: 0;">      
            <div class="col-md-6 form-group1">
              <label class="control-label">Name</label>
              <input type="text" placeholder="Name" name="name" required>
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Companyname</label>
              <input type="text" placeholder="Companyname" name="cname" required>
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="vali-form" style="padding-bottom: 0;">
              <div class="col-md-6 form-group2 group-mail">
              <label class="control-label">State</label>
            <select name="state" id="states" onchange="javascript:ajaxFunctionMainMenu2('district_ajax.php');" required>
            <option>select one</option>
            	<?php

$sql="select * from states";
$res=mysqli_query($db,$sql);

while($row=mysqli_fetch_array($res))
{
?>
<option value="<?php echo $row['s_id'];?>">
	<?php echo $row['states'];?>
	</option>
<?php
}
?>
            </select>
            </div>              

            <div class="col-md-6 form-group2 group-mail" id="ditrictid">
              <label class="control-label">District</label>
 <select name="dis" id="district">
            <option>select one</option>
            	<?php

$sql_two="select * from district";
$res=mysqli_query($db,$sql_two);

while($row=mysqli_fetch_array($res))
{
?>
<option value="<?php echo $row['d_id'];?>">
	<?php echo $row['district'];?>
	</option>
<?php
}
?>          </select>  </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="vali-form">      
            <div class="col-md-6 form-group1">
              <label class="control-label">Muncipality/Corporation</label>
              <input type="text" placeholder="Muncipality or Corporation" name="muncipality" required>
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Panchayath</label>
              <input type="text" placeholder="Your Panchayath" name="panchayath" required>
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Phone Number</label>
              <input type="text" placeholder="Phone Number" name="phn">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Mobile Number</label>
              <input type="text" placeholder="Mobile Number" name="mobile" required>
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Email</label>
              <input type="text" placeholder="example@gmail.com" name="mail" required>
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Url</label>
              <input type="text" placeholder="Current Website Url" name="url">
            </div>
            <div class="clearfix"> </div>
            </div>
       
             <div class="clearfix"> </div>
                         <div class="vali-form">
              <div class="col-md-6 form-group2 group-mail">
              <label class="control-label">Job Category</label>
            <select name="category">
            <option>select one</option>
            	<?php

$sql_cat="select * from category";
$res=mysqli_query($db,$sql_cat);

while($row=mysqli_fetch_array($res))
{
?>
<option value="<?php echo $row['category'];?>">
	<?php echo $row['category'];?>
	</option>
<?php
}
?>
            </select>
            </div>
            <div class="col-md-6 form-group1 group-mail">
              <label class="control-label ">Date</label>
              <input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" name="date" required>
            </div>
            
            </div>
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1" style="width:100% !important;">
              <label class="control-label">About You...</label>
              <textarea  placeholder="Your Comment..." name="about"></textarea>
            </div>
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group" style="margin-top:15px;">
              <input type="submit" class="btn btn-primary" value="Submit" name="submit">
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>  
        </form>
    
 	<!---->
 </div>
 </div>

 </div>
		</div>
	   	</div>
       
     </body>
</html>

