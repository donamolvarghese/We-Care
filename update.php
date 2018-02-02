<?php 
include 'database.php';

$b=$_GET['id'];
$res=mysqli_query($db,"UPDATE `employee registration` SET `Status`=1 WHERE `RID`='$b'");
 header("location:newview.php");	
?>
