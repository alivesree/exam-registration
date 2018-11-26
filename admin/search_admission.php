<?php include('functions.php') ?>
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
  
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
</head>

<body>
<div class="clear"></div>
 <div class="content_wrapper">
 <?php
include('includes/side_nav.php');
?>

 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">

 	<!--grid-->
 	<div class="validation-system">
	 <!--banner-->	
		    <div class="banner">		   
				<h2>
				<a href="home.php">Dashboard</a>
				<i class="fa fa-angle-right"></i>
				<span>Search Result</span>
				</h2>
		    </div>
		<!--//banner-->
  <div class="main_section">



  <div class="main_section">
  <div class="content-mid">
        
        <div class="col-md-9">
        
       <table class="table">

                   <tr><th>ID</th><th>Name</th><th>Company Name</th><th>action</th> </tr> 

                     <?php
					 
			$j=1;
	 $sql11="SELECT * FROM registered_users where name LIKE '%".$_GET['search_box']."%' AND status=1 ORDER BY id DESC";
   $result11=mysqli_query($db,$sql11);
   while($row11=mysqli_fetch_array($result11))
   {
   
   $sql="SELECT * FROM registered_users where id='$row11[id]' ORDER BY id DESC";
   $result=mysqli_query($db,$sql);
   while($row=mysqli_fetch_array($result))
   {
	

			?>
            <tr> <td><?= $row['id']; ?></td> <td><?=$row['name'];?></td>    <td><?=$row['c_name'];?></td> 
<td>

<a href="delete-user.php?delcom=<?php echo $row['id'];?>"><!--<button class="btn paddi btn-default">Delete</button>--><span class="spa"><i class="fa fa-trash"></i></span></a>
 <a href="update_user.php?upitem=<?php echo $row['id'];?>"><span class="spa"><i class="fa fa-pencil"></i></span></a>
  <a href="view_user.php?viewitem=<?php echo $row['id'];?>"><span class="spa"><i class="fa fa-eye"></i></span></a>

    </td></tr>
                   
  <?php
  $j++;
}
}
?> 
                    
              
              
        </table>

<div class="clear"></div>

        
		</div>
        </div></div></div>
   </div></div></div>
    <div class="clear"></div>

</body>
</html>
