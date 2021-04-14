
<?php

$id=$_REQUEST["id"];

$con=mysqli_connect("localhost","jdmeerut_jdmeerut","q7%d[A0W5W5H","jdmeerut_jdmeerut");

$query="select * from aboutcard where id='$id'";
$result=mysqli_query($con,$query);

$a=mysqli_fetch_array($result);


?>
 <form method="post" 
       enctype="multipart/form-data">
<table border="1" align="center">
    
<tr>
<td>id</td>       
<td><input type="text" name="id" value="<?php echo $a['0']; ?>" readonly>    
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
<td>fname</td>        
<td>
<input type="text" name="fname" value="<?php echo $a['2']; ?>">   
</td>
    </tr>        
<tr>
<td>position</td>       
<td>
<input type="text" name="position" value="<?php echo $a['3']; ?>">
</td>
    </tr> 
<tr>
    <td colspan="2" align="center"><input type="submit" name="update" value="update">    
    </td>
</tr>          
    
</table>             
</form>   
<?php
if(isset($_POST["update"]))
{
$fname=$_POST['fname'];
$position=$_POST['position'];


if(!isset($_FILES["image"]) || 
          $_FILES["image"]["error"]==
          UPLOAD_ERR_NO_FILE)
  {
      die("No File Selected");
  }
  
if(isset($_FILES["image"]))
{
$image = $_FILES['image']['name'];
$image_temp =$_FILES['image']['tmp_name'];


$target='C:/xampp/htdocs/jdmeerut/image/'.basename($_FILES['image']['name']);
$s=move_uploaded_file($image_temp, "$target");
}
else
{
  $target="img not selected";  
}
$query="UPDATE `aboutcard` SET image='$image',fname='$fname',position='$position' WHERE id='$id'";



mysqli_query($con, $query);
$n=  mysqli_affected_rows($con);
echo "$n";
if($n>0){
    echo "successfully Updated";
    header('location:about.php');
}
else
    echo "Try Again";
    
}

?>
   