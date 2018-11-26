<?php 
session_start();
//	echo '<script language="javascript"> alert("Lteest"'.$_SESSION["id"].'"tes"); </script>';

if (isset($_SESSION['id']) && $_SESSION['id']!=null) {
	setcookie("user_id",$_SESSION['id'],0,"/");
	setcookie("payment_status",$_SESSION['payment_status'],0,"/");
	//echo '<script language="javascript"> alert("logged in"); </script>';
	// session_destroy();
	// unset($_SESSION['id']);
	// header("location: ../index.php");
}
else
{
	echo '<script language="javascript"> alert("logged out"); </script>';
	session_destroy();
	unset($_SESSION['id']);
	header("location: ../index.php");
}
?>
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
<link href="css/style1.css" rel='stylesheet' type='text/css' />
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
	   $( document ).ready(function() {
		   if(getCookie('payment_status')=='1')
		   {
		   $('#lblPayment').show();
		   }
		else
		{
		$('#payment').show();
		}
});
function getCookie(cname) {
    var name = cname + "=";
   // alert(document.cookie);
    var decodedCookie = decodeURIComponent(document.cookie);
   // alert(decodedCookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
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
<?php include('classes/class_db.php'); ?>

         <?php require_once('includes/side_nav.php'); ?>

		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">

 	<!--grid-->
 	<div class="validation-system">
  <!--banner-->	
		    <div class="banner">		   
				<h2>
				<a href="index.php">Payment</a>
				</h2>
			</div>

			<div  style="display:none;color: green;font-size: 13px;margin-left: 20px; " id="lblPayment">
			   
				Payment already completed.
				
	    	</div>
			<iframe src = "../paypal.html" height = "300" style="border:none;display:none; " id="payment">
				Sorry your browser does not support Payment Gateway.
			</iframe>
			
	
	</div>
		<!--//banner-->
</body>
</html>
