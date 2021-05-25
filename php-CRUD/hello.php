<?php
$servername="localhost";
$username="root";
$password="";
$con=mysqli_connect('localhost','root','','db-connect');

if(!$con){
    die("connection failed: " .mysqli_connect_error());
}else{
    $con->error;
}
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$dept=$_POST['dept'];
$phoneno=$_POST['phoneno'];
$sql="INSERT INTO `students-details`(`firstname`, `lastname`, `dept`, `phoneno`) VALUES ('$firstname','$lastname','$dept','$phoneno')";
$rs=mysqli_query($con,$sql);
if ($rs!='')
{
	 echo"records inserted";
}
else{
	 echo" records Not inserted";
}
$con->close();

?>