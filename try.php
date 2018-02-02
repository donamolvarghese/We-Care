
<!Doctype html>
<?php
include 'database.php';
include_once("header.php"); 
?>
<head> 
<img src="logo.jpg" alt="Your Happy Family"></a>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:light-blue;
}

li {
    float: right;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	text-color:black;
}

li a:hover {
    background-color: #111;
}
button {
    background-color:light-blue;
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: bold;
    display: inline-block;
    font-size: 16px;
	height:50px;
}
</style>
<?php

        $sql1="SELECT `REGID`, `category_id`, `name`, `gender`, `date_of_birth`, `address`, `email`, `PhoneNo`, `place`, `password`, `created_at` FROM `registration` WHERE `email`='$email'";
        //echo $sql1;
        $sql2="select `REGID` as register_id from `registration` where `email`='$email'";
        $result1=mysqli_query($con,$sql2);
        $row1 = mysqli_fetch_array($result1);
        $register_id = $row1['register_id'];
		?>
</head>
    <body>
	<div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>HOME </h1>
			 
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
            </ol>
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    
       <form id="register-form" action="" method="post"   role="form" class="contactForm">
            <div class="row">


            <div class="col-md-3">

              <div class="form-group">
                  <label for="photo">
                      Upload photo</label>
                  <img src="<?php echo $rows['image'] ?>" alt="test"   name="photo"    id="photo" height="150" width="150"/>
                  <div class="validation"></div>
              </div>
            </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">
                            Name</label>
                        <input type="text" name="name"  class="form-control" id="name" value="<?php echo $row['name']?>" />
                        <div class="validation"></div>
                    </div>

                    <div class="form-group">
                        <label for="gender">
                            Gender</label></br>
                        <input type="text" name="gender" class="form-control" id="gender" value="<?php echo $row['gender']?>" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="date_of_birth">
                            Date_of_birth</label>
                        <input type="text" name="dob" class="form-control" id="dob" value="<?php echo $row['date_of_birth']?>" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="email">
                           Email</label>
                        <input type="text" name="mail" class="form-control" id="mail" value="<?php echo $row['email']?>" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="address">
                            Address</label>
                        <input type="text" class="form-control" name="address" id="address"  value="<?php echo $row['address']?>" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="contact">
                            Contact</label>
                        <input type="tel" class="form-control" name="contact"  id="contact" value="<?php echo $row['PhoneNo']?>" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="place">
                            Place</label>
                        <input type="text" class="form-control" name="place"  id="place" value="<?php echo $row['place']?>"/>
                        <div class="validation"></div>
                    </div>



          </div>
        </div><!-- /.row -->

        <!-- /.row -->

        <!-- /.row -->

        <!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js1/jquery-1.10.2.js"></script>
    <script src="js1/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="js1/morris/chart-data-morris.js"></script>
    <script src="js1/tablesorter/jquery.tablesorter.js"></script>
    <script src="js1/tablesorter/tables.js"></script>

  </body>
</html>
