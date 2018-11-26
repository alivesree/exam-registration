<?php
//  if ($_GET['logout']=="1")
//  {
    logout();
// }
function logout()
{
    session_start();
   // echo $_SESSION["id"];

	session_destroy();
    unset($_SESSION['id']);
    //	echo '<script language="javascript"> alert("Lteest"'.$_SESSION["id"].'"tes"); </script>';
    header("location: ./index.php");
}
?>