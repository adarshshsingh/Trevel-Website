<?php 
$where=$_POST['whereto'];
$how=$_POST['howmany'];

$from=$_POST['fromdate'];

$todate1=$_POST['todate'];

$abouted=$_POST['text'];
$conn=mysqli_connect("localhost","root","","travel") or die("connection failed");
$sql="INSERT INTO `book`(`whereto`, `howmany`, `fromdate`, `todate`, `about`) VALUES ('{$where}','{$how}','{$from}','{$todate1}','{$abouted}')"; 
$result= mysqli_query($conn,$sql) or die("query unsuccessfull");

header("Location: http://localhost/travel/travel website/index.php");
?>