<!DOCTYPE html>
<?php
include 'database.php';

if (isset($_POST['submit']))
{
	
   $username=$_POST["name"];   //username value from the form
   $password=$_POST["pass"];
   $sql="SELECT Regid,role FROM login WHERE username='$username' and password='$password'"; //value querried from the table
         //echo $sql;
   $res=mysqli_query($db,$sql);  //query executing function
   
  if($fetch=mysqli_fetch_array($res)){
	   if($fetch['role']==0) // role means user , for admin set to 0 and for user set to
     {
       $_SESSION["name"]=$fetch['Regid'];	// setting username as session variable
                  header("location:admin.php");	//home page or the dashboard page to be redirected
            }
         else
             if($fetch['role']==1) // role means user , for admin set to 0 and for user set to
             {
				 
                    $_SESSION["name"]=$fetch['Regid'];
                    header("location:userindex.php");	//home page or the dashboard page to be redirected
			   }


    }	 
else{
    $message = "Username and/or Password incorrect.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
	}}

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
    </head>
	  <script>
  function validation()
  {
  	var uname=document.myform.uname.value;
  	if((uname == null) || (uname.length == 0)){
  	alert("Enter username!");
  	document.myform.uname.focus();
  	return false;
  	}
  	return true;
          }
  </script>
	
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
                        	<a href="register.php" class="active">Register</a>
							
                        	<a href="about_us.php">About us</a>
                        	<a href="index.php" >Home</a>
                        </nav>
                    </div>
                </div>
				
				
				        <section class="inner_head clearfix">
            <div id="inner_head_main" class="clearfix">
            	<h2><span>Get in touch</span> with us</h2>
            </div>
        </section>
        
        <div class="wrapper clearfix">
        	            
            <div id="about" class="clearfix">
                <h2><span>Login</span></h2>
                
                 <script>
				function validation()
					{
						var uname=document.myform.uname.value;
					   if((uname == null) || (uname.length == 0)){
						alert("Enter username!");
						document.myform.uname.focus();
						return false;
					}
						return true;
					}
                 </script>
				<form action="#" method="post"  name="myform" enctype="multipart/form-data" onsubmit="return capchk()" onsubmit="return validation();">
                <div id="enquiry">
                    <div class="enquire_right">
					 
                    
                    	<input name="name" type="text" class="text_box" id="name" placeholder="Username...">
                  </div>
                    <div class="enquire_right">
                    	<input name="pass" type="password" class="text_box" id="pass" placeholder="Password...">
                </div>
				    <div>
				  <br><br> <script src='https://www.google.com/recaptcha/api.js'></script>
				   <div class="g-recaptcha" data-sitekey="6Le-SEEUAAAAACEi8lORNCXaGidnJdI5_XM6pCx0"></div>
			      <br><br><br><br><div>
					 <input type="submit" name="submit"  value="Login" >
                    </div></br></br>
					<br><div>
					<p class="message">Find Jobs ?<a href="eregister.php">Clickme</a></p>
					</div></br>
					<div>
                   <p class="message">New User? <a href="register.php"</a>REGISTER</p>
					</div>
                    
                </div>
				
                </form>  
                
                        </div></div>  
           
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
                
                
                <script type="text/javascript" src="js/wowslider.js"></script>
                <script type="text/javascript" src="js/script.js"></script>
                </div>
            </div>
        </header>
        <div id="support"><a href="contact_us.php"><img src="images/support.gif"></a></div>
       <script>
			function capchk(){
				var v=grecaptcha.getResponse();
				if(v.length==0){
					return false;
				}
			}
		</script>
     
	 <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    </body>

</html>
