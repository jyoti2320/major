

<?php include "header.php"; ?>

<section class="content">
<h2 style="color:#17A2B8; font-weight:bold;" id="ncc">NCC :-</h2>

<div class="container-fluid">
    
    <div class="row">
    
    <div class="col-md-5" style="padding-top:20px;">
   <center style="font-size:1.3rem; color:#f3722c; font-weight:500;"> Add NCC Slider</center>
      <div class="boc">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 contact">
      <form method="post" enctype="multipart/form-data">
              
              <div class="row" style="padding-bottom: 30px;">
                  <div class="col-md-3">Image: </div>
                  <div class="col-md-9" style=" width:100%;"><input type="File" name="image" required></div>
              </div>
             
             
              <div class="row" style="padding-top: 10px;">
                  <div class="col-md-4"><input type="submit" name="addnc" value="Add to NCCSlider"style="color: #fff; background: #f8961e;" class="btn"></div>
                 
              </div>
                  
      </form>
                </div>
      
      </div>
      </div>
    
    </div>
      
<?php
if(isset($_POST['addnc'])){
    $image = $_FILES['image']['name'];
$image_temp =$_FILES['image']['tmp_name'];


$target='C:/xampp/htdocs/jdmeerut/image/'.basename($_FILES['image']['name']);
$s=move_uploaded_file($image_temp, "$target");
$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
$query="insert into nccslider (image) values ('$image')";
mysqli_query($con,$query);

}
?>
<?php

$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
$query="select * from nccslider";
 
$q=mysqli_query($con,$query);
$rowcount=mysqli_num_rows($q);
?>
<table border="2" align="center" style="width:800px; height:auto; text-align:center;">
<tr style="background:#f8961e; color:white;">
    <th>id</th>
    <th>image</th>
    <th style="width:200px;">Option</th>
</tr>
<?php
while($p = mysqli_fetch_array($q))
{
?>
<tr>
    <td><?php echo $p[0]; ?></td>
    <td><?php echo $p[1]; ?></td>
    <td>
    <a href="edit9.php?id=<?php echo $p[0]; ?>" name="edit9" style="color: #fff; background: skyblue;" class="btn">Edit</a>
    <a href="delete9.php?id=<?php echo $p[0]; ?>" name="delete9" style="color: #fff; background: violet;" class="btn">Delete</a>
    </td>
</tr>
<?php
}
?>
</table>
                


<div class="col-md-6" style="padding-top:20px; padding-bottom:20px;">
   <center style="font-size:1.3rem; color:#f3722c; font-weight:500;">Description of NCC</center>
      <div class="boc">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 contact">
      <form method="post" enctype="multipart/form-data">
      <div class="row" style="padding-bottom: 30px;">
                  <div class="col-md-3">Image: </div>
                  <div class="col-md-9" style=" width:100%;"><input type="File" name="image" required></div>
              </div>
             
      <div class="row" style="padding-bottom: 30px;">
                  <div class="col-md-4">Description: </div>
                  <div class="col-md-8" style=" width:100%;"><textarea class="form-control" rows="2" name="description" required></textarea></div>
              </div>
              
              <div class="row" style="padding-top: 30px;">
                  <div class="col-md-3"><input type="submit" name="desimg" value="Change"style="color: #fff; background: #f8961e;" class="btn"></div>
                 </div>
                  
      </form>
                </div>
      
      </div>
      </div>
    
    </div>


    </div>
</div>


<?php
                  if(isset($_POST['desimg'])){
                
                    
                    $description=$_POST["description"];
                    $image = $_FILES['image']['name'];
                    $image_temp =$_FILES['image']['tmp_name'];
                    
                    
                    $target='C:/xampp/htdocs/jdmeerut/image/'.basename($_FILES['image']['name']);
                    $s=move_uploaded_file($image_temp, "$target");
                    $con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
                    $c = "INSERT INTO `nccdsp`(`image`, `description`) VALUES ('$image','$description')";
            
                    mysqli_query($con,$c);
                
                  }
            ?>
<?php

$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
$query="select * from nccdsp";
 
$q=mysqli_query($con,$query);
$rowcount=mysqli_num_rows($q);
?>
<table border="2" align="center" style="width:1000px; height:auto; text-align:center;">
<tr style="background:#f8961e; color:white;">
    <th>id</th>
    <th>image</th>
    <th>description</th>
    <th style="width:200px;">Option</th>
</tr>
<?php
while($p = mysqli_fetch_array($q))
{
?>
<tr>
    <td><?php echo $p[0]; ?></td>
    <td><?php echo $p[1]; ?></td>
    <td><?php echo $p[2]; ?></td>
    
    <td>
    <a href="edit10.php?id=<?php echo $p[0]; ?>" name="edit10" style="color: #fff; background: skyblue;" class="btn">Edit</a>
    <a href="delete10.php?id=<?php echo $p[0]; ?>" name="delete10" style="color: #fff; background: violet;" class="btn">Delete</a>
    </td>
</tr>
<?php
}
?>
</table>
                




</section>


