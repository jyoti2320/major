<?php include "header.php"; ?>
<section class="content">

<div class="container-fluid">
    
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-6" style="padding-top:20px; padding-bottom:20px;">
   <center style="font-size:1.3rem; color:#f3722c; font-weight:500;">Government College TPO Form</center>
      <div class="boc">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 contact">
      <form method="post">
      
              <div class="row" style="padding-bottom: 30px;">
                  <div class="col-md-5">Polytechnic Name: </div>
                  <div class="col-md-7" style=" width:100%;"><input type="text" name="name" class="form-control" required></div>
              </div>
              <div class="row" style="padding-bottom: 30px;">
                  <div class="col-md-5">Establishment Year	: </div>
                  <div class="col-md-7" style=" width:100%;"><input type="text" name="year" class="form-control" required></div>
              </div>
           
              <div class="row" style="padding-bottom: 30px;">
                  <div class="col-md-5">Name Of Principal	: </div>
                  <div class="col-md-7" style=" width:100%;"><input type="text" name="nop" class="form-control" required></div>
              </div>
              <div class="row" style="padding-bottom: 30px;">
                  <div class="col-md-5">Phone No.	: </div>
                  <div class="col-md-7" style=" width:100%;"><input type="text" name="pno" class="form-control" required></div>
              </div>
              <div class="row" style="padding-bottom: 30px;">
                  <div class="col-md-5">Email Address	: </div>
                  <div class="col-md-7" style=" width:100%;"><input type="text" name="email" class="form-control" required></div>
              </div>
              <div class="row" style="padding-bottom: 30px;">
                  <div class="col-md-5">Name Of TPO		: </div>
                  <div class="col-md-7" style=" width:100%;"><input type="text" name="not" class="form-control" required></div>
              </div>
              <div class="row" style="padding-bottom: 30px;">
                  <div class="col-md-5">Designation	: </div>
                  <div class="col-md-7" style=" width:100%;"><input type="text" name="designation" class="form-control" required></div>
              </div>
              <div class="row" style="padding-bottom: 30px;">
                  <div class="col-md-5">Mobile No.	: </div>
                  <div class="col-md-7" style=" width:100%;"><input type="text" name="mno" class="form-control" required></div>
              </div>
           
              <div class="row" style="padding-top: 10px;">
                  <div class="col-md-4"><input type="submit" name="savetpo" value="Add TPO" style="color: #fff; background: #f8961e;" class="btn"></div>
                 
              </div>
                  
      </form>
                </div>
      
      </div>
      </div>
    
    </div>


  
<?php
if(isset($_REQUEST["savetpo"]))
{
    extract($_REQUEST);
    $con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
    $s="INSERT INTO `gtpo`(`name`, `year`, `nop`, `pno`, `email`, `not`, `designation`, `mno`) VALUES ('$name','$year','$nop','$pno','$email','$not','$designation','$mno')";
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
$query="select * from gtpo";
 
$q=mysqli_query($con,$query);
$rowcount=mysqli_num_rows($q);
?>
<table border="2" align="center" style="width:1300px; height:auto; text-align:center;">
<tr style="background:#f8961e; color:white;">
    <th>id</th>
    <th>Polytechnic Name</th>
    <th>Establishment Year</th>
    <th>Name Of Principal</th>
    <th>Phone No.</th>
    <th>Email Address</th>
    <th>Name Of TPO</th>
    <th>Designation</th>
    <th>Mobile No.</th>
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
    <td><?php echo $p[6]; ?></td>
    <td><?php echo $p[7]; ?></td>
    <td><?php echo $p[8]; ?></td>
    
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
