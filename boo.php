<!DOCTYPE html>
<?php
include 'database.php';

//$phone=$_POST["phone"];
//echo("hello");
?>
<?php
function send($sms, $to) {

    $sms = urlencode($sms);
    $token = "5468f5bef8ca0f842d78078a25bf0c66";
    $sendercode="wecare";   
    $url = "http://sms.safechaser.com/httpapi/httpapi?token=".$token."&sender=".$sendercode."&number=".$to.'&route=2&type=1&sms='.$sms;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 50);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 50);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $datares = curl_exec($ch);
    curl_close($ch);
    return $datares;
}



 $id=$_GET['id'];
//echo $id;
 $id1=$_GET['eid'];
$id2=$_GET['pid'];
//echo $id2;
 $id3=$_GET['bid'];

//echo $_session['emppid'];
//$sql2="select `PHONE` from `employee registration` where RID=".$id1"";
//$ress=mysqli_query($db,$sql2);
//echo $ress;
if(isset($_POST['button']))
{
//echo $hai;	

$min_date = date('Y-m-d');
echo $min_date;
$a=$_POST["date"];


if($date<$min_date){
	$message = "Please choose a date greater than or equal to $min_date.";
	echo "<script type='text/javascript'>alert('$message);</script>";
	
}
else{
	
	$sql="INSERT INTO `boo`(`Regid`, `RID`, `date`) VALUES ('$id','$id1','$a')";
//echo $sql;
 $result=mysqli_query($db,$sql);
 echo"<script>alert('Data Entered Successfully');</script>)";
$mess="Hai , Your are booked for a service";
send($mess,$phone);
	
}
//echo $i;



}


?>


<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    
<!-- Mirrored from www.wecarecleaning.co.in/contact_us.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2018 20:46:46 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <title>WECARE CLEANING SERVICE in kakkanad, Kochi, Kerala - Professional Housekeeping service, House Cleaning service, Office Cleaning service, Flats cleaning, After Construction Cleaning Service, Commercial Cleaning, Residential Cleaning, Move Out/Move In Cleaning service. WECARE CLEANING SERVICE Cleaning Experts in Cochin Ernakulam</title>

<META name="description" content=" WECARE CLEANING SERVICE is a group of experts to provide quality Cleaning services, We are Serving our Eco-Friendly Cleaning Services and Quality Maid Services to our valued Customers all over Kerala. Our goal is to consistently provide the customer with 100% quality, fast and friendly services.
         WECARE CLEANING SERVICE provides - housekeeping Services in kochi cochin ernakulam,  professional office cleaning and house cleaning in kochi, kakkanad cochin ernakulam, Finished Flat and closed house cleaning in cochin kochi, kakkanad cochin ernakulam  "/> 
		 
<META name="keywords" content="WECARE CLEANING SERVICE, Housekeeping Services in kakkanad - Kochi - cochin - Kerala, House Cleaning Services in kakkanad - Kochi - cochin - Kerala, Flats cleaning Services in kakkanad - Kochi - cochin - Kerala, apartment cleaning Services in kakkanad - Kochi - cochin - Kerala, Floor Cleaning Services in kakkanad - Kochi - cochin - Kerala, Spring Cleaning Services in kakkanad - Kochi - cochin - Kerala, Window Cleaning Services in kakkanad - Kochi - cochin - Kerala, After Construction Cleaning Services in kakkanad - Kochi - cochin - Kerala, Commercial Cleaning Services in kakkanad - Kochi - cochin - Kerala, Residential Cleaning Services in kakkanad - Kochi - cochin - Kerala, Office Cleaning Services in kakkanad - Kochi - cochin - Kerala, Carpet Cleaning Services in kakkanad - Kochi - cochin - Kerala, Move Out/Move In Cleaning Services in kakkanad - Kochi - cochin - Kerala, Car Washing Services in kakkanad - Kochi - cochin - Kerala, Home Cleaning Services in kakkanad - Kochi - cochin - Kerala "/> 

<META name="page-topic" content=" WECARE CLEANING SERVICE kakkanad - Kochi - cochin - Kerala, Housekeeping, House Cleaning Services, Commercial Cleaning Services, Residential Cleaning"/>

<META name="page-type" content="WECARE CLEANING SERVICE kakkanad - Kochi - cochin - Kerala, Housekeeping, Residential Cleaning Services, Commercial Cleaning Services"/>

<META name="abstract" content="WECARE CLEANING SERVICE kakkanad - Kochi - cochin - Kerala, After Construction Cleaning Services in kakkanad - Kochi - cochin - Kerala, Commercial Cleaning Services in kakkanad - Kochi - cochin - Kerala, Residential Cleaning Services in kakkanad - Kochi - cochin - Kerala, Office Cleaning Services in kakkanad - Kochi - cochin - Kerala"/>

<META name="topic" content=" WECARE CLEANING SERVICE kakkanad - Kochi - cochin - Kerala, Housekeeping, Residential Cleaning Services, Commercial Cleaning Services"/>

<Meta name="expires" content="never" >
<meta name="googlebot" content="NOODP" />
<meta name="slurp" content="NOYDIR" />

<META name="classification" content=" WECARE CLEANING SERVICE kakkanad - Kochi - cochin - Kerala, Housekeeping, House Cleaning Services, Commercial Cleaning Services, Residential Cleaning "/>

<META name="distribution" content="Global"/>
<META name="publisher" content="WeCare cleaning service"/>
<META name="robots" content="index, follow"/>
<META name="revisit-after" content="7 days"/>
<META name="author" content="wecarecleaning"/>
<META name="content-Language" content="English"/>
<META name="copyright" content="http//www.wecarecleaning.in/" />
<META name="rating" content="General" />
<META name="security" content="Public" />
<META name="doc-type" content="Web Page" />
<META name="doc-class" content="Published" />
<META name="city" content="Kakkanad, Kochi, Cochin" />
<META name="state" content="Kerala" />
<META name="contact" content="wecarecleaningindia@gmail.com" />
<META name="organization" content="WeCare cleaning service" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<script type="text/javascript" src="js/jquery.js"></script>
        <link rel="stylesheet" href="css/main.css">
		
		 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header class="header clearfix">
        	<div class="wrapper clearfix">
            	<div class="top">
                    <div class="social"><a href="https://www.youtube.com/channel/UCENO--I0b8RdrVujhatWgUQ/" target="_blank"><img src="images/tyoutube.jpg" alt="youtube"></a></div>
                    <div class="social"><a href="https://plus.google.com/115575328040136613917/" target="_blank"><img src="images/google.jpg" alt="twitter"></a></div>
                    <div class="social"><a href="https://twitter.com/wecareclean/" target="_blank"><img src="images/twitter.jpg" alt="twitter"></a></div>
                    <div class="social"><a href="https://www.facebook.com/wecarecleaning/" target="_blank"><img src="images/facebook.jpg" alt="facebook"></a></div>
                	<p>Feel Free To Call :  <span>9400062345</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Follow Us On :</p>
                </div>
                <div class="head clearfix">
                	<div id="logo"><a href="#"><img src="images/logo.jpg"></a></div>
                    <div class="menu">
                    	<nav>
                        	<a href="contact_us.php" class="active">Contact us</a>
                        	 <a href="logout.php" class="active">Logout</a>
							 
                        	
                        	<a href="about_us.php">About us</a>
                        	<a href="index.php" >Home</a>
                        </nav>
                    </div>
                </div>
                
                <div id="banner" class="clearfix">
                <div id="wowslider-container1">
                    <div class="ws_images">
                        <ul>
                            <li><img src="images/banner.jpg" alt="banner" title="Licensed & Insured" id="wows1_0"/></li>
                            <li><img src="images/banner04.jpg" alt="banner" title="One Time Cleaning" id="wows1_0"/></li>
                            <li><img src="images/banner05.jpg" alt="banner" title="Affordable Rates" id="wows1_0"/></li>
                            <li><img src="images/banner02.jpg" alt="banner" title="Quality Service" id="wows1_0"/></li>
                            <li><img src="images/banner03.jpg" alt="banner" title="Eco-friendly" id="wows1_0"/></li>
                        </ul>
                     </div>
                </div>
                <script type="text/javascript" src="js/wowslider.js"></script>
                <script type="text/javascript" src="js/script.js"></script>
                </div>
            </div>
        </header>
        <div id="support"><a href="contact_us.html"><img src="images/support.gif"></a></div>
        
        <section class="inner_head clearfix">
            <div id="inner_head_main" class="clearfix">
            	<h2><span>Get in touch</span> with us</h2>
            </div>
        </section>
        
        <div class="wrapper clearfix">
        	            
            <div id="about" class="clearfix">
                <h2><span> Book</span>Now</h2>
                
                
				<form action="#" method="post" enctype="multipart/form-data">
                <div id="enquiry">
                    


                    <div class="enquire_right">
                    	<input  type="date" name="date" min="<?php echo $min_date;?>" class="text_box"   id="email" placeholder="Email..." >
                    </div>
					
                  
				       <div >
                      <input type="button" name="button"  value="Submit" id="send" >
                    </div>
                    
                </div>
                </form>  
                
                          
            </div>
			<div id="contact">
                <div id="box">
            	<h2><span>Reach</span>&nbsp;Us</h2>
                	<img src="images/contact_logo.jpg" alt="wecare">
                    <p>#521<br>
                    palachuvadu,<br>
                    Near Axis Bank ATM, kakkanad<br>
                    kochi, Kerala - 30<br>
                   <br>
                    <!--Ph: 04842421224<br>-->
                    Mobile: +91 9400062345<br>
                    Email:wecarecleaningindia@gmail.com</p>          
                </div>
            </div>      
        </div>
        
        <footer>
        	<div id="footer">
            	<p>
                	<a href="index.php">Home</a>
                	<a href="about_us.php">About us</a> 
                    <a href="services.php">Services</a> 
                    <a href="testimonials.php">Testimonials</a> 
                    <a href="contact_us.php">Contact us</a><br>
                    Copyright © WeCare Cleaning Service - All Rights Reserved<br>
                    <a href="http://www.graphicconsortium.in/" target="_blank">Website designing and Web Application development - Graphic Consortium, Cochin</a>
                </p>
            </div>
        </footer>
		
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    </body>
	<script>
		   $('body').on('click', '#send', function () {

		   $phone=<?php echo $id2 ?>;
			
		  alert($phone);
    $.ajax({
        type: 'post',
        url: './bookings.php',
        data: {phone1: $phone},
        success: function (response)
        {
			alert(response);
        }
    });
});
		</script>
</html>
