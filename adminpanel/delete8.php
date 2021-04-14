<?php
//for fetch query string data
$id=$_REQUEST["id"];
//echo $rno;
//echo "delete page called";

//code for delete record ===================
 //step 1 for connection
 $con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");

//step 2 for delete query
 $query="delete from examdsp where id=$id";

//step 3 for execute query
 mysqli_query($con,$query);

//step 4 for check affected rows
$n=mysqli_affected_rows($con);

if($n>0)
  header('location:exam.php');
else
  echo "try again";
//==========================================

?>