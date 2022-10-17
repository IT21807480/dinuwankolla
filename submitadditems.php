<?php
include_once'config.php';


$name=$_POST["field1"];
$code=$_POST["field2"];
$price=$_POST["field3"];
$qty=$_POST["field4"];
$des=$_POST["field5"];

$sql="INSERT INTO item(Item_id,Item_name,Item_description,price,Quantity,Item_code)VALUES('','$name','$des','$price','$qty','$code')";
if(mysqli_query()$conn,$sql)){
echo "<script>alert('Record Inserted Sucessfully!!')</script>";
header("Location:index.php");

}
else{
	echo"<script>alert('Error in insertion!!')</script>";
}
//close the connection

mysqli_closen($conn);
?>