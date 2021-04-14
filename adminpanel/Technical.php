
<?php include "header.php"; ?>
<section class="content">

<div class="container-fluid">
    
    <div class="row">
    
    <div class="col-md-7" style="padding-top:20px; padding-bottom:20px;">
   <center style="font-size:1.3rem; color:#f3722c; font-weight:500;"> Board Of Technical Education,MP</center>
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
                  <div class="col-md-4">Full Name: </div>
                  <div class="col-md-8" style=" width:100%;"><input type="text" name="fname" class="form-control" required></div>
              </div>
              <div class="row" style="padding-bottom: 30px;">
                  <div class="col-md-4">Position: </div>
                  <div class="col-md-8" style=" width:100%;"><input type="text" name="position" class="form-control" required ></div>
              </div>
              <div class="row" style="padding-top: 30px;">
                  <div class="col-md-3"><input type="submit" name="acarde" value="add Card"style="color: #fff; background: #f8961e;" class="btn"></div>
                 </div>
                  
      </form>
                </div>

</div>
      </div>
    
    </div>


    </div>
</div>



            <?php
                  if(isset($_POST['acarde'])){
                    
                    $fname=$_POST["fname"];
                    $position=$_POST["position"];
                

                    $image = $_FILES['image']['name'];
                    $image_temp =$_FILES['image']['tmp_name'];


                    $target='C:/xampp/htdocs/jdmeerut/upload/'.basename($_FILES['image']['name']);
                    $t=move_uploaded_file($image_temp, "$target");
                    $con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
                    echo $sql="INSERT INTO `board`(`image`, `fname`, `position`) VALUES ('$image','$fname','$position')";
                    
                    if(mysqli_query($con,$sql)){
                        echo "insert";
                    }
                    else{
                        echo "not insert";
                    }
                    }
            ?>





<?php

$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
$query="select * from board";
 
$q=mysqli_query($con,$query);
$rowcount=mysqli_num_rows($q);
?>
<table border="2" align="center" style="width:1000px; height:auto; text-align:center;">
<tr style="background:#f8961e; color:white;">
    <th>id</th>
    <th>image</th>
    <th>fname</th>
    <th>Position</th>
    <th>Option</th>
</tr>
<?php
while($p = mysqli_fetch_array($q))
{
?>
<tr>
    <td><?php echo $p[0]; ?></td>
    <td><?php echo $p[1]; ?></td>
    <td><?php echo $p[2]; ?></td>
    <td><?php echo $p[3]; ?></td>
    <td>
    <a href="edit2.php?id=<?php echo $p[0]; ?>" name="edit2" style="color: #fff; background: skyblue;" class="btn">Edit</a>
    <a href="delete2.php?id=<?php echo $p[0]; ?>" name="delete2" style="color: #fff; background: violet;" class="btn">Delete</a>
    </td>
</tr>
<?php
}
?>
</table>
                




<div class="container-fluid">
    
    <div class="row">
    
    <div class="col-md-7" style="padding-top:20px; padding-bottom:20px;">
   <center style="font-size:1.3rem; color:#f3722c; font-weight:500;"> Board Of Technical Education,MP</center>
      <div class="boc">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 contact">
      <form method="post" enctype="multipart/form-data">
              
              
              <div class="row" style="padding-bottom: 30px;">
                  <div class="col-md-4">Description: </div>
                  <div class="col-md-8" style=" width:100%;"><textarea class="form-control" rows="4" name="description" required></textarea></div>
              </div>
              
              <div class="row" style="padding-top: 30px;">
                  <div class="col-md-3"><input type="submit" name="desp" value="Change"style="color: #fff; background: #f8961e;" class="btn"></div>
                 </div>
                  
      </form>
                </div>

</div>
      </div>
    
    </div>


    </div>
</div>

            <?php
                  if(isset($_POST['desp'])){
                    
                    $description=$_POST["description"];

                    $con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
                    $b = "insert into description (description) values ('$description')";
                    
                    mysqli_query($con,$b);
                
                  }
            ?>

<?php

$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
$query="select * from description";
 
$q=mysqli_query($con,$query);
$rowcount=mysqli_num_rows($q);
?>
<table border="2" align="center" style="width:1200px; height:auto; text-align:center;">
<tr style="background:#f8961e; color:white;">
    <th>id</th>
    <th>description</th>
    <th>Option</th>
</tr>
<?php
while($p = mysqli_fetch_array($q))
{
?>
<tr>
    <td><?php echo $p[0]; ?></td>
    <td><?php echo $p[1]; ?></td>
    <td style="width:200px;">
    <a href="edit3.php?id=<?php echo $p[0]; ?>" name="edit3" style="color: #fff; background: skyblue;" class="btn">Edit</a>
    <a href="delete3.php?id=<?php echo $p[0]; ?>" name="delete3" style="color: #fff; background: violet;" class="btn">Delete</a>
    </td>
</tr>
<?php
}
?>
</table>
  </section>