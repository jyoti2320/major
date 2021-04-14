
<?php
$id=$_REQUEST["id"];

$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");

$query="select * from examslider where id='$id'";
$result=mysqli_query($con,$query);

$a=mysqli_fetch_array($result);


?>
 <form method="post" 
       enctype="multipart/form-data">
<table border="1" align="center">
    
    
<tr>
<td>id</td>       
<td><input type="id" name="id" value="<?php echo $a['0']; ?>" readonly>    
</td>
    </tr>        
<tr>
    <td>image</td>
    <td><img src="<?php echo $a['image']; ?>" height="50" alt="img not found" width="80">
            <br>
    <input type="file" name="image">
    </td>
</tr>
<tr>
    <td colspan="2" align="center"><input type="submit" name="update" value="update">    
    </td>
</tr>          
    
</table>             
</form>   
<?php
if(isset($_REQUEST["update"]))
{
extract($_REQUEST);

//validation for file uplading .......
//dt . 17aug
if(!isset($_FILES["image"]) || 
          $_FILES["image"]["error"]==
          UPLOAD_ERR_NO_FILE)
  {
      die("No File Selected");
  }
//end here ...........................
  
if(isset($_FILES["image"]))
{
//for upload profile pic ..............
$image = $_FILES['image']['name'];
$image_temp =$_FILES['image']['tmp_name'];


$target='C:/xampp/htdocs/jdmeerut/image/'.basename($_FILES['image']['name']);
$s=move_uploaded_file($image_temp, "$target");
}
else
{
  $target="img not selected";  
}
//.....................................

//query for update profile
$query="update examslider set image='$image' where id='$id'";
//echo $query;
//die();

mysqli_query($con, $query);
$n=  mysqli_affected_rows($con);
if($n>0){
    echo "image Updated";
    header('location:exam.php');
}
else
    echo "Try Again";
    
}

?>
   