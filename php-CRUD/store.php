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
$id=$_POST['id'];
$product_name=$_POST['product_name'];
$product_price=$_POST['product_price'];
$sql="INSERT INTO `add_products`(`id`, `product_name`, `product_price`) VALUES ('$id', '$product_name' , '$product_price')";
$rs=mysqli_query($con,$sql);
if ($rs!='')
{
	 echo"records inserted";
}
else{
	 echo"records Not inserted";
}
$con->close();

?>