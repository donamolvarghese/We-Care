
<!Doctype html>
<?php
include_once("head.php");
include 'database.php'; 
if(!(isset($_SESSION['user_name'])))
{

//header('location:index.php');
}
?>
 
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

<div id="page-wrapper">
    <body>
        <div class="row">
          <div class="col-lg-12">
            <h1>HOME </h1>
			 <form name="my" method="post" action="#">
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
            </ol>
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    
<table border=5px style="margin-left:0%; margin-top:10%;">
<tr><th>ID</th><th>Name</th><th>Salary</th><th>Address</th><th>Contact</th><th>Date of join</th><th>Email</th></tr>
<?php 
$sql="SELECT * FROM `employee details` WHERE `Status`=0";
$result=mysqli_query($db,$sql);
//$i=0;
while($row=mysqli_fetch_array($result))
{
?>
	<tr>
	<td><input type="text" value="<?php echo $row['E_id']; ?>" name="E_id"></td>
	<td><input type="text" value="<?php echo $row['E_name']; ?>" name="E_name"></td>
	<td><input type="text" value="<?php echo $row['Salary']; ?>" name="Salary"></td>
    <td><input type="text" value="<?php echo $row['E_address']; ?>" name="E_address"></td>
	<td><input type="text" value="<?php echo $row['E_contact']; ?>" name="E_contact"></td>
	<td><input type="text" value="<?php echo $row['Dateof join']; ?>" name="E_doj"></td>
    <td><input type="text" value="<?php echo $row['Email']; ?>" name="Email"></td>
	
	<!--<td><a href="deleterecord.php?id=<?php echo $row['E_id']?>"><button class="button" name="submit" >DELETE</button></a></td>-->
	<!--<td><a href="deleterecord.php?id=<?php echo $row['email']?>"><input type="submit" name="submit"  value="Delete" class="button"></a></td>-->
	<td><button class="button" name="submit" >UPDATE</button></td></tr>
	
<?php 
if(isset($_POST['submit']))
{
  //echo 'hai';
  $id=$_POST['E_id'];
$a=$_POST["E_name"];
$b=$_POST["Salary"];
$c=$_POST["E_address"];
$d=$_POST["E_contact"];
$e=$_POST["E_doj"];
$f=$_POST["Email"];
$SQL="UPDATE `employee details` SET `E_name`='$a',`Salary`='$b',`E_address`='$c',`E_contact`='$d',`Dateof join`='$e',`Email`='$f'  WHERE `E_id`='$id'";
$res=mysqli_query($db,$SQL);
//echo $SQL;
echo "<script> alert('edit successfull');</script>";
}}?>  
	
	 
		
	</form></td>
		<!--<form action="deletemember.php" method="post"> -->
	 
	 
	
	<?php

?>
</table>

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
