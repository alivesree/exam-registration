<?php 
session_start();
//	echo '<script language="javascript"> alert("Lteest"'.$_SESSION["id"].'"tes"); </script>';

if (isset($_SESSION['id']) && $_SESSION['id']!=null) {
//	echo '<script language="javascript"> alert("logged in"); </script>';
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TMCAA</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>
</head>

<body>
<div id="wrapper">

<!----->
<?php require_once('classes/class_db.php'); ?>

<?php require_once('includes/side_nav.php'); ?>
       <!-- -->
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
  		<!--banner-->	
		    <div class="banner">		   
				<h2>
				<a href="index.php">Dashboard</a>
				</h2>
		    </div>
		<!--//banner-->
		<!--content-->
		
		<!---->
	
  
		<div class="content-mid">
        
        <div class="col-md-9">
        
       <table class="table">

  <thead>
    <tr>
      <th>Name</th>
        <th>E-Mail</th>
            <th>Contact</th>
			<th>Registered On</th>
			<th>Payment Status</th>
 <th>Action</th>

      <th style="width: 3.5em;"></th>
    </tr>
  </thead>
  <tbody>
  <?php
$sql='select * from registered_stu where status=1 ORDER BY student_id DESC';
// echo $sql;
	$res=mysqli_query($db,$sql);

$i=1;
while($row=mysqli_fetch_array($res))
{
?>

    <tr>
          <td><?=$row['name']; ?></td>
     <td><?=$row['email']; ?></td>
     <td><?=$row['phone']; ?></td>
		  <td><?=$row['registered_on']; ?></td>
		  <td><?= $row['payment_status'] == '1'? 'paid' : 'not paid'; ?></td>
      <td>

<a href="delete-user.php?delcom=<?php echo $row['student_id'];?>"><!--<button class="btn paddi btn-default">Delete</button>--><span class="spa"><i class="fa fa-trash"></i></span></a>
 <a href="update_user.php?upitem=<?php echo $row['student_id'];?>"><span class="spa"><i class="fa fa-pencil"></i></span></a>
  <a href="view_user.php?viewitem=<?php echo $row['student_id'];?>"><span class="spa"><i class="fa fa-eye"></i></span></a>

    </td>
    </tr>
  </tbody>
  <?php

}

?>

</table>
        
        </div>
			
			<div class="col-md-3" style="float:right;">
					 <div class="cal1 cal_2"><div class="clndr"><div class="clndr-controls"><div class="clndr-control-button"><p class="clndr-previous-button">previous</p></div><div class="month">July 2015</div><div class="clndr-control-button rightalign"><p class="clndr-next-button">next</p></div></div><table class="clndr-table" border="0" cellspacing="0" cellpadding="0"><thead><tr class="header-days"><td class="header-day">S</td><td class="header-day">M</td><td class="header-day">T</td><td class="header-day">W</td><td class="header-day">T</td><td class="header-day">F</td><td class="header-day">S</td></tr></thead><tbody><tr><td class="day adjacent-month last-month calendar-day-2015-06-28"><div class="day-contents">28</div></td><td class="day adjacent-month last-month calendar-day-2015-06-29"><div class="day-contents">29</div></td><td class="day adjacent-month last-month calendar-day-2015-06-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-01"><div class="day-contents">1</div></td><td class="day calendar-day-2015-07-02"><div class="day-contents">2</div></td><td class="day calendar-day-2015-07-03"><div class="day-contents">3</div></td><td class="day calendar-day-2015-07-04"><div class="day-contents">4</div></td></tr><tr><td class="day calendar-day-2015-07-05"><div class="day-contents">5</div></td><td class="day calendar-day-2015-07-06"><div class="day-contents">6</div></td><td class="day calendar-day-2015-07-07"><div class="day-contents">7</div></td><td class="day calendar-day-2015-07-08"><div class="day-contents">8</div></td><td class="day calendar-day-2015-07-09"><div class="day-contents">9</div></td><td class="day calendar-day-2015-07-10"><div class="day-contents">10</div></td><td class="day calendar-day-2015-07-11"><div class="day-contents">11</div></td></tr><tr><td class="day calendar-day-2015-07-12"><div class="day-contents">12</div></td><td class="day calendar-day-2015-07-13"><div class="day-contents">13</div></td><td class="day calendar-day-2015-07-14"><div class="day-contents">14</div></td><td class="day calendar-day-2015-07-15"><div class="day-contents">15</div></td><td class="day calendar-day-2015-07-16"><div class="day-contents">16</div></td><td class="day calendar-day-2015-07-17"><div class="day-contents">17</div></td><td class="day calendar-day-2015-07-18"><div class="day-contents">18</div></td></tr><tr><td class="day calendar-day-2015-07-19"><div class="day-contents">19</div></td><td class="day calendar-day-2015-07-20"><div class="day-contents">20</div></td><td class="day calendar-day-2015-07-21"><div class="day-contents">21</div></td><td class="day calendar-day-2015-07-22"><div class="day-contents">22</div></td><td class="day calendar-day-2015-07-23"><div class="day-contents">23</div></td><td class="day calendar-day-2015-07-24"><div class="day-contents">24</div></td><td class="day calendar-day-2015-07-25"><div class="day-contents">25</div></td></tr><tr><td class="day calendar-day-2015-07-26"><div class="day-contents">26</div></td><td class="day calendar-day-2015-07-27"><div class="day-contents">27</div></td><td class="day calendar-day-2015-07-28"><div class="day-contents">28</div></td><td class="day calendar-day-2015-07-29"><div class="day-contents">29</div></td><td class="day calendar-day-2015-07-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-31"><div class="day-contents">31</div></td><td class="day adjacent-month next-month calendar-day-2015-08-01"><div class="day-contents">1</div></td></tr></tbody></table></div></div>
			  <!----Calender -------->
			<link rel="stylesheet" href="css/clndr.css" type="text/css" />
			<script src="js/underscore-min.js" type="text/javascript"></script>
			<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
			<script src="js/clndr.js" type="text/javascript"></script>
			<script src="js/site.js" type="text/javascript"></script>
			<!----End Calender -------->
			</div>
			
			<div class="clearfix"> </div>
		</div>
<div class="copy navbar-fixed-bottom">
            <p>copyright @ all rights reserved </p>
	    </div>
		</div>
		<div class="clearfix"> </div>
       </div>
     </div>
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<script src="js/bootstrap.min.js"> </script>
</body>
</html>