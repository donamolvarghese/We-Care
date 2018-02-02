<!DOCTYPE html>
<?php
include 'database.php';
 echo $id=$_SESSION['name'];
//session_start();
//$cid=$_SESSION["reg_id"];
//echo "$cname";
$result ="select * from register where `Reg_id`='$id'";
$result3=mysqli_query($db,$result);
while($row3 = mysqli_fetch_array($result3))
{ 
$cname=$row3['name'];
$address=$row3['place'];
$emailid=$row3['address'];
$mobileno=$row3['phone'];
$established=$row3['email'];
//$hrname=$row3['hrname'];
//$cid=$row3['cid'];
}
//echo $cid;
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
                        	<a href="contact_us.php">Contact us</a>
                      
                        	<a href="gallery.php">Gallery</a>
                        	<a href="about_us.php">About us</a>
                        	<a href="userindex.php" class="active">Home</a>
                        </nav>
                    </div>
                </div>
				<div>
				 <center><h1> MY PROFILE </h1></center>
<br/>
  <table>
    <tr><td width="200" valign="top"><div align="left"><h4>Name:</h4></div></td>
    <td  valign="top"><h4><?php echo $cname ?></h4></td>
  </tr>
  <tr>
    <td valign="top"><div align="left"><h4>Place:</h4></div></td>
    <td style="width: 161px; height: 30px;"><h4><?php echo $address ?> </h4></td>
  </tr>
  <tr>
    <td valign="top"><div align="left"><h4>Address:</h4></div></td>
    <td valign="top"><h4><?php echo $emailid ?> </h4></td>
  </tr>
  <tr>
    <td valign="top"><div align="left"><h4>Mobile No: </h4></div></td>
    <td valign="top"><h4><?php echo $mobileno ?></h4></td>
  </tr>
  <tr>
    <td valign="top"><div align="left"><h4>Email:</h4> </div></td>
    <td valign="top"><h4><?php echo $established ?></h4> </td>
  </tr>
   
  </br>
</table>
<br/>
<br/></div>
                
                
				
                <script type="text/javascript" src="js/wowslider.js"></script>
                <script type="text/javascript" src="js/script.js"></script>
                </div>
            </div>
        </header>
        <div id="support"><a href="contact_us.php"><img src="images/support.gif" alt="24 hrs cleaning service support in cochin / kochi kerala img"></a></div>
        
        
        <section class="features clearfix">
     
        </section>
        
        
            
            

      
    </body>


</html>
