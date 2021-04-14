
<?php

$id=$_REQUEST["id"];

$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");

$query="select * from gtpo where id='$id'";
$result=mysqli_query($con,$query);

$a=mysqli_fetch_array($result);


?>
 <form method="post" 
       enctype="multipart/form-data">
<table border="1" align="center">
    
<tr>
<td>SNO.</td>       
<td><input type="text" name="id" value="<?php echo $a['0']; ?>" readonly>    
</td>
    </tr>        

    <tr>
<td>Polytechnic Name</td>        
<td>
<input type="text" name="name" value="<?php echo $a['1']; ?>">   
</td>
    </tr>        

    <tr>
<td>Establishment Year	</td>        
<td>
<input type="text" name="year" value="<?php echo $a['2']; ?>">   
</td>
    </tr>        

    <tr>
<td>Name Of Principal	</td>        
<td>
<input type="text" name="nop" value="<?php echo $a['3']; ?>">   
</td>
    </tr>        

    <tr>
<td>Phone No.	</td>        
<td>
<input type="text" name="pno" value="<?php echo $a['4']; ?>">   
</td>
    </tr>        

    <tr>
<td>Email Address	</td>        
<td>
<input type="text" name="email" value="<?php echo $a['5']; ?>">   
</td>
    </tr>        

    <tr>
<td>Name Of TPO	</td>        
<td>
<input type="text" name="not" value="<?php echo $a['6']; ?>">   
</td>
    </tr>        

    <tr>
<td>Designation</td>        
<td>
<input type="text" name="designation" value="<?php echo $a['7']; ?>">   
</td>
    </tr>        

<tr>
<td>Mobile No.</td>        
<td>
<input type="text" name="mno" value="<?php echo $a['8']; ?>">   
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
$sql="UPDATE `gtpo` SET `name`='$name',`year`='$year',`nop`='$nop',`pno`='$pno',`email`='$email',`not`='$not',`designation`='$designation',`mno`='$mno' where id=$id ";
//echo $sql;

mysqli_query($con,$sql);

$n=mysqli_affected_rows($con);
if($n>0){
echo "successfully Updated";
header('location:tpo.php');
}
else
 echo "try again";

}
?>


