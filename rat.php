<!DOCTYPE html>
<?php
include 'database.php';
//session_start();

$id=$_SESSION['name'];
echo $id;
echo "<script>alert(hgfh:$id);</script>";
if(!(isset($_SESSION["name"]))){
	header("location:index.php");
}
?>
<?php
//$id=$_REQUEST['restid'];
//$rid2=$_SESSION["rid"];
//INSERT INTO `feedback`(`fid`,  `email`, `rat`, `msg`, `status`) VALUES
if(isset($_POST['sub']))
{
$sql="select username from register where Reg_id='$id'";
//echo $sql;
$result=mysqli_query($db,$sql);
$fetch11=mysqli_fetch_array($result);
$n=$fetch11['username'];
//echo $n;
$msg=$_POST["msg"];
$rate=$_POST["rate"];
$sql12="INSERT INTO `feedback`(`name`, `rat`, `msg`, `status`) VALUES ('$n','$rate','$msg','0')";
//echo $sql12;
$result=mysqli_query($db,$sql12);
}
?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <title>OURCARE CLEANING SERVICE in kanjirapally, Kottayam, Kerala - Professional Housekeeping service, House Cleaning service, Office Cleaning service, Flats cleaning, After Construction Cleaning Service, Commercial Cleaning, Residential Cleaning, Move Out/Move In Cleaning service. WECARE CLEANING SERVICE Cleaning Experts in Kottayam</title>

<META name="description" content=" WECARE CLEANING SERVICE is a group of experts to provide quality Cleaning services, We are Serving our Eco-Friendly Cleaning Services and Quality Maid Services to our valued Customers all over Kerala. Our goal is to consistently provide the customer with 100% quality, fast and friendly services.
         OURCARE CLEANING SERVICE provides - housekeeping Services in kanjirapally, Kottayam,  professional office cleaning and house cleaning in kochi, kakkanad cochin ernakulam, Finished Flat and closed house cleaning in cochin kochi, kakkanad cochin ernakulam  "/> 
		 
<META name="keywords" content="OURCARE CLEANING SERVICE, Housekeeping Services in kanjirapally - kottayam- Kerala, House Cleaning Services in kanjirapally - Kottayam- Kerala, Flats cleaning Services in kanjirapally - Kottayam- Kerala, apartment cleaning Services in kakkanad - Kochi - cochin - Kerala, Floor Cleaning Services in kakkanad - Kochi - cochin - Kerala, Spring Cleaning Services in kakkanad - Kochi - cochin - Kerala, Window Cleaning Services in kakkanad - Kochi - cochin - Kerala, After Construction Cleaning Services in kakkanad - Kochi - cochin - Kerala, Commercial Cleaning Services in kakkanad - Kochi - cochin - Kerala, Residential Cleaning Services in kakkanad - Kochi - cochin - Kerala, Office Cleaning Services in kakkanad - Kochi - cochin - Kerala, Carpet Cleaning Services in kakkanad - Kochi - cochin - Kerala, Move Out/Move In Cleaning Services in kakkanad - Kochi - cochin - Kerala, Car Washing Services in kakkanad - Kochi - cochin - Kerala, Home Cleaning Services in kakkanad - Kochi - cochin - Kerala "/> 

<META name="page-topic" content=" OURCARE CLEANING SERVICE kanjirapally - kottayam- Kerala, Housekeeping, House Cleaning Services, Commercial Cleaning Services, Residential Cleaning"/>

<META name="page-type" content="OURCARE CLEANING SERVICE kanjirapally - kottayam- Kerala, Housekeeping, Residential Cleaning Services, Commercial Cleaning Services"/>

<META name="abstract" content="OURCARE CLEANING SERVICE kanjirapally - kottayam- Kerala, After Construction Cleaning Services in kakkanad - Kochi - cochin - Kerala, Commercial Cleaning Services in kakkanad - Kochi - cochin - Kerala, Residential Cleaning Services in kakkanad - Kochi - cochin - Kerala, Office Cleaning Services in kakkanad - Kochi - cochin - Kerala"/>

<META name="topic" content="OURCARE CLEANING SERVICE kanjirapally - kottayam- Kerala, Housekeeping, Residential Cleaning Services, Commercial Cleaning Services"/>

<Meta name="expires" content="never" >
<meta name="googlebot" content="NOODP" />
<meta name="slurp" content="NOYDIR" />

<META name="classification" content=" OURCARE CLEANING SERVICE kanjirapally - kottayam- Kerala, Housekeeping, House Cleaning Services, Commercial Cleaning Services, Residential Cleaning "/>

<META name="distribution" content="Global"/>
<META name="publisher" content="WeCare cleaning service"/>
<META name="robots" content="index, follow"/>
<META name="revisit-after" content="7 days"/>
<META name="author" content="wecarecleaning"/>
<META name="content-Language" content="English"/>
<META name="copyright" content="#" />
<META name="rating" content="General" />
<META name="security" content="Public" />
<META name="doc-type" content="Web Page" />
<META name="doc-class" content="Published" />
<META name="city" content="kanjirapally - kottayam" />
<META name="state" content="Kerala" />
<META name="contact" content="ourcarecleaning@gmail.com" />
<META name="organization" content="OurCare cleaning service" />

        
	<script type="text/javascript" src="js/jquery.js"></script>
     <link rel="stylesheet" href="css/main.css">
     
     
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header class="header clearfix">
        	<div class="wrapper clearfix">
            	<div class="top">
                    <div class="social"><a href="https://www.youtube.com/channel" target="_blank"><img src="images/tyoutube.jpg" alt="youtube"></a></div>
                    <div class="social"><a href="https://plus.google.com" target="_blank"><img src="images/google.jpg" alt="twitter"></a></div>
                    <div class="social"><a href="https://twitter.com" target="_blank"><img src="images/twitter.jpg" alt="twitter"></a></div>
                    <div class="social"><a href="https://www.facebook.com" target="_blank"><img src="images/facebook.jpg" alt="facebook"></a></div>
                	<p>Feel Free To Call :  <span>9562674881</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Follow Us On :</p>
                </div>
	              <div class="head clearfix">
                	<div id="logo"><a href="#"><img src="images/logo.jpg" alt="The best Commercial & Residential Cleaning service provider's logo kottayam, kerala"></a></div>
                    <div class="menu">
                    	<nav>
						   
						    <a href="logout.php">Logout</a>
                        	
                      
                        	<a href="gallery.php">Gallery</a>
                        	<a href="about_us.php">About us</a>
                        	<a href="userindex.php" class="active">Home</a>
                        </nav>
                    </div>
                </div>
				
				<?php
//SELECT `fid`, `regid`, `rat`, `msg`, `status` FROM `feedback` WHERE
$sql1="SELECT * FROM `feedback` order by `fid` desc"; //value querried from the table
	$res1=mysqli_query($db,$sql1);  //query executing function
	$cnt=0;
	
	while($fetch1=mysqli_fetch_array($res1))
	{
		$cnt=$cnt+1;
        $id1=$fetch1['name'];
        $sql2="SELECT * FROM `register` WHERE `name`='$id1'";		//value querried from the table
        //echo  $sql2;
        $res2=mysqli_query($db,$sql2);  //query executing function
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
<img src="Star.png" width=15 height=15></img>
<?php
}
?>
<input type="text" value="<?php echo $id1 ?>" disabled style=" margin-left:73%; margin-top:-3%;color:#cc0066
; font-size:150%; border:none; background-color:white;"></br>


</div></div>

<?php
	}
?>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
                        <section class="features clearfix">
            <div id="features_main" class="clearfix">
			<div style="background-color: #d98cb3;" "width:60%; height:100%;>
            	<form name="rating" action="#" method="post"id="form1"><br>
              <h2><center>RATE OUR SERVICE</h2></br>
           <div>
    <input type="textarea" placeholder="Enter your comments" name="msg" id="msg" value=""style="border-radius:5px; margin-left:80%; height:10%;"><br/><br/>
<select name="rate" class="form-control" style="margin-left:80%; border-radius:5px;">
							<option style="color: #990000;" value=5>excellent</option>
							<option style="color: #990000;" value=4>very good</option>
							<option style="color:#990000;" value=3>good</option>
							<option style="color:#990000;" value=2>fair</option>
							<option style="color:#990000;" value=1>poor</option>
						</select><br/><br/>
		<center><input type="submit"  name="sub"  value="SEND" id="sub" class="button pull-right ">
  </form>
            </div></div>
        </section>
            
                <script type="text/javascript" src="js/wowslider.js"></script>
                <script type="text/javascript" src="js/script.js"></script>
                </div>
            </div>
        </header>
        <div id="support"><a href="contact_us.php"><img src="images/support.gif" alt="24 hrs cleaning service support in cochin / kochi kerala img"></a></div>
        
        

        
        

      
    </body>


</html>
