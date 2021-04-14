<?php
//for fetch query string value
$id=$_REQUEST["id"];
//echo $rno;

//step 1 for connection
$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");

//step 2 for search query
$query="select * from examdsp where id=$id";

//step 3 for execute query
$result=mysqli_query($con,$query);

//step 4 for fetch record
$a=mysqli_fetch_array($result);
//echo "<pre>";print_r($a);

//step 5 for fill record in html controls
?>
<form method="post">
<table border="1" align="center">
<tr>
<td>id</td>
<td><input type="text" value="<?php echo $a[0]; ?>"
  readonly></td>
</tr>
<tr>
<td>description</td>
<td><input type="text" value="<?php echo $a[1]; ?>"
name="description" ></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="update" name="update">
</td>
</tr>
</table>
</form>
<?php
if(isset($_REQUEST["update"]))
{
extract($_REQUEST);
$sql="update examdsp set description='$description' where id=$id ";
//echo $sql;

mysqli_query($con,$sql);

$n=mysqli_affected_rows($con);
if($n>0){
echo "successfully Updated";
header('location:exam.php');
}
else
 echo "try again";

}
?>


