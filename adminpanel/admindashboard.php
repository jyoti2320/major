<?php include "header.php"; ?>

        <!-- Page Content  -->
        <div id="content">
          <h2 style="color:#17A2B8; font-weight:bold;" id="home">Home :-</h2>
<section>

<div class="container-fluid">
    
    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-5" style="padding-top:20px; padding-bottom:30px;">
   <center style="font-size:1.3rem; color:#f3722c; font-weight:500;"> Add Slider</center>
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
                  <div class="col-md-4"><input type="submit" name="add" value="Add to Slider"style="color: #fff; background: #f8961e;" class="btn"></div>
                 
              </div>
                  
      </form>
                </div>
      
      </div>

      <div class="col-md-2"></div>
      </div>
    
    </div>
      
<?php
if(isset($_POST['add'])){
    $image = $_FILES['image']['name'];
$image_temp =$_FILES['image']['tmp_name'];


$target='C:/xampp/htdocs/jdmeerut/image/'.basename($_FILES['image']['name']);
$s=move_uploaded_file($image_temp, "$target");
$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
$query="insert into slider (image) values ('$image')";
mysqli_query($con,$query);
$n=mysqli_affected_rows($con);
if($n>0){
    echo "image insert";
}
else{
    echo "try again";
}
}
?>
</section>

<?php

$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
$query="select * from slider";
 
$q=mysqli_query($con,$query);
$rowcount=mysqli_num_rows($q);
?>
<table border="2" align="center" style="width:800px; height:auto; text-align:center;">
<tr style="background:#f8961e; color:white;">
    <th>id</th>
    <th>image</th>
    <th>Option</th>
</tr>
<?php
while($p = mysqli_fetch_array($q))
{
?>
<tr>
    <td><?php echo $p[0]; ?></td>
    <td><?php echo $p[1]; ?></td>
    <td>
    <a href="edit1.php?id=<?php echo $p[0]; ?>" name="edit1" style="color: #fff; background: skyblue;" class="btn">Edit</a>
    <a href="delete1.php?id=<?php echo $p[0]; ?>" name="delete1" style="color: #fff; background: violet;" class="btn">Delete</a>
    </td>
</tr>
<?php
}
?>
</table>
                







           
            </div>
    </div>

<?php include "footer.php"; ?>