
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
div.img {
    margin: 15px;
    border: 3px solid #ccc;
    float: left;
    width: 250px;
	background-color:#;
	height:290px;
	border-radius:13px 13px 13px 13px;
}
div.img:hover span:after {
  position: relative;
  opacity: 0;
  top: 0;
  left:980px;
  transition: 0.5s;
}



div.img:hover span{
    border: 1px solid #777;
	padding-right: 0px;
}

div.img:hover span:after{
  opacity: 1;
  right: 0;
}

div.img img {
    height:160px;
	width:250px;
}

div.desc {
    padding: 2px;
    text-align: center;
	font-family:Benguiat Bk BT;
}
.button1 {	width:100px;
	background-color:skyblue;
	border-radius:13px;
	cursor: pointer;
}
</style>
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
    
<?php 
$sql="SELECT * FROM `employee registration` where Status=1";
$result=mysqli_query($db,$sql);
//$i=0;
while($row=mysqli_fetch_array($result))
{ 
   
   $i++;
	if($i % 6==1)
	{
		echo "<tr>";
	}
?>
			
        	<div class="img">
    				<img src="<?php echo $row['PHOTO']?>" alt="EMPLOYEES"><br><br>
  				<div class="desc">
    				<?php echo $row['NAME']?><br>
					<?php echo $row['PLACE']?><br>
					<?php echo $row['PHONE']?><br>
					<?php echo $row['EMAIL']?><br>
					<?php echo $row['GENDER']?><br>
					<?php echo $row['DOB']?><br>
					<?php echo $row['PASSWORD']?><br>
					<?php echo $row['RESUME']?><br>
					<?php echo $row['ADHAAR']?><br>
					
   				 
					
					
                   <center> <a href="update.php?id=<?php echo $row['RID']; ?>"> ADD</a> </center>
 				 </div>
				 </li>
			</div>
			<!--</div>-->
            
		</td>
<?php  }?>
		  
	
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
