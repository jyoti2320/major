
<?php include "header.php"; ?>
<section class="content">

<div class="container-fluid">
    
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-6" style="padding-top:20px; padding-bottom:20px;">
   <center style="font-size:1.3rem; color:#f3722c; font-weight:500;">Private College Form</center>
      <div class="boc">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 contact">
      <form method="post">
      
              <div class="row" style="padding-bottom: 30px;">
                  <div class="col-md-5">Polytechnic Name : </div>
                  <div class="col-md-7" style=" width:100%;"><input type="text" name="name" class="form-control" required></div>
              </div>
              <div class="row" style="padding-bottom: 30px;">
                  <div class="col-md-5">Address : </div>
                  <div class="col-md-7" style=" width:100%;"><input type="text" name="address" class="form-control" required></div>
              </div>
           
              <div class="row" style="padding-bottom: 30px;">
                  <div class="col-md-5">Course : </div>
                  <div class="col-md-7" style=" width:100%;"><input type="text" name="course" class="form-control" required></div>
              </div>
              <div class="row" style="padding-bottom: 30px;">
                  <div class="col-md-5">Seat : </div>
                  <div class="col-md-7" style=" width:100%;"><input type="text" name="seat" class="form-control" required></div>
              </div>
              <div class="row" style="padding-bottom: 30px;">
                  <div class="col-md-5">Website : </div>
                  <div class="col-md-7" style=" width:100%;"><input type="text" name="website" class="form-control" required></div>
              </div>
            
              <div class="row" style="padding-top: 10px;">
                  <div class="col-md-4"><input type="submit" name="pcollege" value="Add P-College" style="color: #fff; background: #f8961e;" class="btn"></div>
                 
              </div>
                  
      </form>
                </div>
      
      </div>
      </div>
    
    </div>


  
<?php
if(isset($_REQUEST["pcollege"]))
{
    extract($_REQUEST);
    $con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
    $s="INSERT INTO `pcollege`(`name`, `address`, `course`, `seat`, `website`) VALUES ('$name','$address','$course','$seat','$website')";
    mysqli_query($con, $s);
    $n=  mysqli_affected_rows($con);
    
    if($n>0)
        echo "record saved";
    else
        echo "try again";
    
}

?>

<?php

$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
$query="select * from pcollege";
 
$q=mysqli_query($con,$query);
$rowcount=mysqli_num_rows($q);
?>
<table border="2" align="center" style="width:1300px; height:auto; text-align:center;">
<tr style="background:#f8961e; color:white;">
    <th>id</th>
    <th>Polytechnic Name</th>
    <th>Address</th>
    <th>Course</th>
    <th>Seat</th>
    <th>Website</th>
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
    <td><?php echo $p[3]; ?></td>
    <td><?php echo $p[4]; ?></td>
    <td><?php echo $p[5]; ?></td>
    
    <td>
    <a href="delete14.php?id=<?php echo $p[0]; ?>" name="delete11" style="color: #fff; background: violet;" class="btn">Delete</a>
    </td>
</tr>
<?php
}
?>
</table>
          













</section>
