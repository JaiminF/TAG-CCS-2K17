<?php
$user   = "tagcl1dc_prk";
$password ="stealth2017";
$database = "tagcl1dc_ccs";
$host   = "localhost";
$con = mysqli_connect($host,$user,$password,$database);
if (!$con)

  {

  die('Could not connect: ' . mysqli_error());

  }

mysqli_select_db($con,$database);

$token = rand(); 


$sql="INSERT INTO `r_users` (`Name`,`R_no`,`contact`,`tech`,`mang`,`design`,`editorial`,`token`)

VALUES

('$_POST[fullname]','$_POST[regno]','$_POST[phonenumber]','$_POST[tech]','$_POST[mang]','$_POST[design]','$_POST[edit]','$token')";

 

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }


 

mysqli_close($con)

?>
<script type="text/javascript">location.href = 'success.html';</script>
