<?php
include 'conn.php';
session_start();
$rid2=$_SESSION["email"];
echo "<script>alert(hgfh:$rid2);</script>";
if(!(isset($_SESSION["email"]))){
	header("location:index.php");
}
?>
<?php
//$id=$_REQUEST['restid'];
//$rid2=$_SESSION["rid"];
//INSERT INTO `feedback`(`fid`,  `email`, `rat`, `msg`, `status`) VALUES
if(isset($_POST['sub']))
{
$msg=$_POST["msg"];
$rate=$_POST["rate"];
$sql12="INSERT INTO `feedback`(`email`,  `rat`, `msg`, `status`) VALUES ('$rid2','$rate','$msg','0')";
$result=mysqli_query($con,$sql12);
}
?>
<!DOCTYPE html>
			<html lang="en">

<!-- Mirrored from www.palaimatrimony.com/index.php/register by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jan 2018 04:59:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
					<title>Holy Matrimony::Matrimony portal by, Diocese of Palai- Register in Syro-Malabar Matrimony - Catholic Matrimony, Christian Matrimony, Kerala Catholic Matrimonial</title>
					<meta name="keywords" content="Syromalabarmatrimony.org - Kerala Catholic Matrimony site run by Syro-Malabar Church. Register Your Matrimonial Profile &amp; Contact for FREE!" />
					<meta name="description" content="Syromalabarmatrimony, Syromalabarmatrimony matrimony, matrimony, matrimonial, matrimony.com,Catholic matrimony, Catholic matrimonial,Catholic Kerala, christian matrimony, christian matrimonial,  kerala matrimony, kerala catholic matrimony, catholic matrimony, malayalee christian matrimony, matrimony kerala, knanaya matrimonial, matrimonial site in kerala"/>
					<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700" rel="stylesheet">
					<meta name="viewport" content="width=device-width, initial-scale=1.0">
					<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
					<link rel="stylesheet" type="text/css" href="../../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
					<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet">

					<link rel="stylesheet" href="../assets/style2/slider/jquerysctipttop.css">
					<link rel="stylesheet" href="../assets/style2/slider/sliderstyle.css">
					  <link rel="stylesheet" href="../assets/style2/css/main.css">

					<script  src="../assets/style2/slider/jquery-3.1.1.slim.min.js"></script>
					<script  src="../assets/style2/slider/jquery.transit.min.js"></script>
					<script  src="../assets/style2/slider/slider.jquery.js"></script>
					<link rel="stylesheet" type="text/css" href="../assets/style2/plugins/fileupload/css/component.css" />
					<link rel="stylesheet" href="../assets/style2/css/orbit.css">
					<link rel="stylesheet" href="../assets/style2/css/bootstrap.css">
					<link rel="stylesheet" href="../assets/style2/css/styleone.css">

          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

					<!-- Owl Stylesheets -->
					<link rel="stylesheet" href="../assets/style2/css/owl.carousel.min.css">
					<link rel="stylesheet" href="../assets/style2/css/owl.theme.default.min.css">


					<link rel="stylesheet" href="../assets/style2/plugins/select2/css/select2.css">
					<link rel="stylesheet" href="../assets/style2/plugins/uniform/css/default.css"><link rel="stylesheet" href="../assets/style2/css/custom-styles.css"></head>
          <body>
      <div class="container-fluid top-line"></div>
<div class="pravas-header">
   <div class="container-fluid">
      <div class="container top-sec">
         <div class="logo-outer"><a href="../home.php"><img src="../assets/style2/images/we.png" alt="Syro Malabar Matrimony Network"></a></div>
         <div class="top-tight">    <div class="top_btn_outer">
                </div>
            <div class="top_contact">
               <div class="phone_icon"><img src="../assets/style2/images/top-phone.png"> </div>
               <div class="top-conttext">
               <span style="color: #8c1869;"> 0469 - 2784132</span><br>
                  helpline Number
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
   <div class="container-fluid nav-sec">
      <div class="container">
         <label for="show-menu" class="show-menu">Menu
            <span class="menu-btn"><i class="fa fa-bars" aria-hidden="true"></i>
            </span> </label>
            <input type="checkbox" id="show-menu" role="button">
             <ul id="menu"><li><a class="menuover"  href="../index1.php">HOME</a></li><li>
                  <a class="menuover" href="../about.php"> ABOUT US</a>

               </li>

   <li>
       <a class="menuover" href="Mcourse.php">COURSES</a> <ul class="sub-menu"> <li><a href="Coursedomain/getCourseDetails/26.html">Marriage Prepration Course</a></li>
      </ul> </li>

 <li><a class="menuover" href="uview.php">PROFILE</a></li>

               <li><a class="menuover" href="ustories.php">SUCCESS STORY</a></li>
               <li><a class="menuover" href="se.php">SEARCH</a></li>
							 <li><a class="menuover" href="../contact.php">CONTACT US</a></li>

            </ul>
         </div>
         <div class="clearfix"></div>
      </div>
   </div> <style>
    .error {
        color: red !important;
    }
</style>



<!--DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : CrossWalk
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140216

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="wrapper">
	<div id="header" class="container">


</div>
<style>
body{
	//background-color:white;

}
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 14px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #C71585;
  border: none;
  border-radius: 10px;

}
</style>
<?php


//SELECT `fid`, `regid`, `rat`, `msg`, `status` FROM `feedback` WHERE
$sql1="SELECT * FROM `feedback`"; //value querried from the table
	$res1=mysqli_query($con,$sql1);  //query executing function
	$cnt=0;
	while($fetch1=mysqli_fetch_array($res1))
	{
$cnt=$cnt+1;
$rid=$fetch1['email'];
$sql2="SELECT * FROM `register` WHERE `email`='$rid'"; //value querried from the table
$res2=mysqli_query($con,$sql2);  //query executing function
$fetch2=mysqli_fetch_array($res2);

//$sql3="SELECT * FROM `resturant` WHERE `restid`='$id'"; //value querried from the table
//$res3=mysqli_query($con,$sql3);  //query executing function
//$fetch3=mysqli_fetch_array($res3);
//$rname=$fetch3['restnm'];
if($cnt==4)
{
	break;
}

?>
<div style="width:60%; height:10%; margin-left:20%; margin-top:2%;">
<input type="textarea" value="<?php echo $fetch1['msg'] ?>" disabled style="color:#e68a00; border:none; background-color:white; width:60%; height:50%;"></br>

<?php
for($i=0;$i<$fetch1['rat'];$i++)
{
?>
<img src="images/icons/Star.png" width=15 height=15></img>
<?php
}
?>
<input type="text" value="<?php echo $fetch2['fname'] ?>" disabled style=" margin-left:73%; margin-top:-3%;color:#cc0066
; font-size:150%; border:none; background-color:white;"></br>


</div></div>

<?php
	}
?>

<div style="background-color: #d98cb3;" "width:60%; height:100%;>
 <form name="rating" action="#" method="post"id="form1"><br>
<h2><center>RATE HOLY MATRIMONY</h2></br>
<input type="textarea" placeholder="Enter your comments" name="msg" id="msg" value=""style="border-radius:5px; margin-left:80%; height:10%;"><br/><br/>
<select name="rate" class="form-control" style="margin-left:80%; border-radius:5px;">
							<option style="color: #990000;" value=5>excellent</option>
							<option style="color: #990000;" value=4>very good</option>
							<option style="color:#990000;" value=3>good</option>
							<option style="color:#990000;" value=2>fair</option>
							<option style="color:#990000;" value=1>poor</option>
						</select><br/><br/>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;



	<input type="submit  name=""sub"  value="SEND" id="sub" class="button pull-right ">
  </form>

</body>
</html>
