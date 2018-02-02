<?php
session_start();
$db=mysqli_connect("localhost","root","","home services");

if (!$db) {


    die('Not connected : ' . mysql_error());
}

?>
