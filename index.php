
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!-- Meta tags -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //pop-ups-->
	<!-- Calendar -->
<link rel="stylesheet" href="css/jquery-ui.css" />
<!-- //Calendar -->

	<!-- font-awesome icons -->
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<!-- //font-awesome icons -->
	<!--stylesheets-->
	<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
	<!--//style sheet end here-->
	<link href="//fonts.googleapis.com/css?family=Cuprum:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
</head>

<body>
	<h1 class="header-w3ls" align="center">
		Thrissur Medial College Alumini Association CME programme for Junior Doctors -2018</h1>
	<div class="icon-stu">
	
		<div class="stude-user-wls">
			<span class="fa fa-user" aria-hidden="true"></span>
			<div class="clear"> </div>
		</div>
		<div class="row-col">
			<div class="banner-agileits-btm">
				<div class="w3layouts_more-buttn">
					<a href="#small-dialog1 " class="play-icon popup-with-zoom-anim">login</a>
				</div>
				<div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
					<div class="agileits_modal_body">
         <?php require_once('admin/classes/class_db.php'); ?>

						<!--login form-->
						<div class="newsletter ">
							<h2>Login Form</h2>

							<div class="letter-w3ls">
								<form action="" method="post">

									<div class="form-left-w3l">
										<input type="email" name="email" required placeholder="Email">
									</div>
									<div class="form-right-w3ls ">

										<input type="password" name="password" placeholder="Password" required>

									</div>
									<div class="btnn">
										<input type="submit" name="login" value="Login"><br>
									</div>
								</form>


								<div class="clear"></div>
							</div>
							<!--//login form-->

						</div>
					</div>
                  </div>
				</div>
				<div class="banner-its-btm">

					<div class="outs_more-buttn">
						<a href="#small-dialog2 " class="play-icon popup-with-zoom-anim">Register</a>
					</div>
					<div id="small-dialog2" class="mfp-hide w3ls_small_dialog wthree_pop">
						<div class="agileits_modal_body">

							<!--register form-->
							<div class="student-reg-w3 ">
								<h3>Registration Form</h3>
								<div class="letter-w3ls">
                                 <?php 
if(isset($_POST['submit']))
{
	$sql_one="insert into registered_stu(name,age,present_add,permenent_add,previous,email,phone,dd,bank,experience,status,registered_on)values('$_POST[name]','$_POST[age]','$_POST[p_address]','$_POST[address]','$_POST[previous]','$_POST[email]','$_POST[phonenumber]','$_POST[dd_no]','$_POST[bank]','$_POST[Message]',1,now())";
	
	
 $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'; $pass = array(); //remember to declare $pass as an array 
 $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache 
 for ($i = 0; $i < 8; $i++) { $n = rand(0, $alphaLength); $pass[] = $alphabet[$n]; } 
  $pas= implode($pass); 
	
	$sql_one2="insert into login (user_type,username,password,status) values ('student','$_POST[email]','{$pas}',1)";
	$result=mysqli_query($db,$sql_one);
	$result2=mysqli_query($db,$sql_one2);
	send_email($_POST[email],$pas);
	//	echo '<meta http-equiv="Refresh" Content="0; URL=#">';
//echo $sql_one;
//die();
}

if(isset($_POST['login']))
{
	$sql_one="select * from login where username = '$_POST[email]' and password = '$_POST[password]'";
	
	$sql_two="select * from registered_stu where email = '$_POST[email]' limit 1";

	$result=mysqli_query($db,$sql_one);
if	($result->num_rows>0)	
{
	$result2=mysqli_query($db,$sql_two);	
	$row2 = mysqli_fetch_assoc($result2);
	session_start();
	$_SESSION["id"] = $_POST[email];
	$_SESSION["payment_status"] = $row2['payment_status'];
	$row = mysqli_fetch_assoc($result);
if( $row['user_type'] =="admin")
header("Location: admin/home.php");
else
header("Location: student/index.php"); 
}
else
{
	
	echo '<script language="javascript"> alert("Login Failed"); </script>';
}
}


 function send_email($email,$Password)
			{
				$to      = $email;
				$subject = "Login Details";
			//	$link    = SITE_PATH .'activate.php?id='.base64_encode($id);
				
				$message = '
			<html>
				<head>
				<title>Qatarbedspace Email</title>			
				</head>
				<body>
				<table>
				<tr>
				<td>
				UserName</td>
				<td>
				  "'.$email.'"	
				</td>
				</tr>
							<tr>
				<td>
				Password</td>
				<td>
				  "'.$Password.'"	
				</td>
				</tr>
				</table>
				</body>
				</html>'
				;
				
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				
				// More headers
				$headers .= 'From: <info@mediacrow.com>' . "\r\n";
				//$headers .= 'Cc: bmidhunbabu@live.com' . "\r\n";
				
				
				if(mail($to,$subject,$message,$headers))
				return TRUE;
			}
			



?>
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return valid();">
										<div class="main">
											<div class="form-left-to-w3l">

												<input type="text" name="name" placeholder="Name (In Block letters)" required>
												<div class=l"clear"></div>
											</div>
											<div class="form-right-to-w3ls">

												<input type="text" name="age" placeholder="Age" required>
												  <div class="clear"></div>
											</div>
                                             
										</div>
							<div class="form-add-to-w3ls add">

									<input type="text" name="p_address" placeholder="Present Address" required>
									  <div class="clear"></div>
								</div>
                                <div class="form-add-to-w3ls add">

									<input type="text" name="address" placeholder="Permenent Address" required>
									  <div class="clear"></div>
								</div>
                                <div class="form-add-to-w3ls add">

									<input type="text" name="previous" placeholder="Medical College From Which You Grauated?" required>
									  <div class="clear"></div>
								</div>
								<div class="main">
									<div class="form-left-to-w3l">

										<input type="email" name="email" placeholder="Email" required>
										  <div class="clear"></div>
									</div>
									<div class="form-right-to-w3ls">

										<input type="text" name="phonenumber" placeholder="Phone Number" required>
										  <div class="clear"></div>
									</div>
								</div>
								
								


								<div class="main">
									<div class="form-left-to-w3l">

										<input type="text" name="dd_no" placeholder="DD No" required>
										<div class="clear"></div>
									</div>
									<div class="form-right-to-w3ls">
										<input type="text" name="bank" placeholder="Bank" required>
										<div class="clear"></div>
									</div>
									 
								</div>
								
								<div class="form-control-w3l">
									<textarea name="Message" placeholder="Have you articipated in previous TMCAA Programs? If yes,Give details." required></textarea>
								</div>
								<div class="btnn">
                                <input type="checkbox" name="terms" required> I accept Terms and Conditions<BR> <BR>

									<input type="submit" name="submit" value="Submit"><br>
								</div>

								</form>
							</div>
						</div>
						<!--//register form-->

					</div>
				</div>
				<div class="clear"> </div>
			</div>
			</div>
			</div>
			<div class="copy">
			</div>

			<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>

			<!--scripts-->

			<!--//scripts-->
			<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<script>
				$(document).ready(function () {
					$('.popup-with-zoom-anim').magnificPopup({
						type: 'inline',
						fixedContentPos: false,
						fixedBgPos: true,
						overflowY: 'auto',
						closeBtnInside: true,
						preloader: false,
						midClick: true,
						removalDelay: 300,
						mainClass: 'my-mfp-zoom-in'
					});

				});
			</script>
			<!-- //pop-up-box video -->
			<!-- //js -->
			<!-- Calendar -->
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->

 </body>
</html>