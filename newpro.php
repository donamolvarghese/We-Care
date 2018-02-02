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


<center>
<table  width="400" border="0">
  <tr><font color="black"<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MY PROFILE</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/responsive-slider.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/style.css" rel="stylesheet">	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	 
    <![endif]-->
	<style>
	body{
background:url('s.jpg') no-repeat center fixed;
background-size:cover;
}
h1{
	color:grey;
}
	body{
background:url('s.jpg') no-repeat center fixed;
background-size:cover;
}
a{
	color:blue;
}
li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
    
  <body>
    <header>
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<div class="navbar-header">
							<div class="navbar-brand">
								<a href="index.html"><h1> </h1></a>
							</div>
						</div>
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="company_homepage.php">Home</a></li>
							    <li role="presentation"><a href="newvacancy.php">New vacancy</a></li>
								
								  <li class="dropdown">
                                  <a href="#" class="dropbtn">DETAILS</a>
                                  <div class="dropdown-content">
                                  <a href="studentapplieddetails.php">STUDENTS APPLIED</a>
	                              
								<li class="dropdown">
                                  <a href="#" class="dropbtn">MY Profile</a>
                                  <div class="dropdown-content">
                                  <a href="companyedit.php">View</a>
	                              <li role="presentation"><a href="cchangepassword.php">Change password</a></li>
								<li role="presentation"><a href="logout.php">Logout</a></li>									
							</ul>
						</div>
					</div>			
				</nav>
			</div>
		</div>
	</header>
	

    <body>
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
<br/>
<tr><input type="hidden" name="p_id" value="<?php echo $cid; ?>" />
      <td><center><b><h4><a href="updatecompanyprofile.php?id=<?php echo $cid;?>">EDIT</a></b></h4></center></td>

 </tr>

</center>
</body>
</html>
