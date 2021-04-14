<?php include "header.php"; ?>

<?php
                  if(isset($_POST['taxt'])){
                    
                    $txt=$_POST["txt"];

                    $con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
                    $d = "insert into Marquee (txt) values ('$txt')";
                    
                    mysqli_query($con,$d);
                
                  }
            ?>

<section class="content">

<div class="container">   
<div class="row">
    <div class="col-md-2"></div>
<div class="col-md-6" style="padding-top:20px;">
<center style="font-size:1.3rem; color:#f3722c; font-weight:500;">Notification Marquee</center>
<div class="boc">
<div class="row">
    <div class="col-md-10 contact">
    <form method="post">
              
              
        <div class="row" style="padding-bottom: 30px;">
            <div class="col-md-4">text: </div>
            <div class="col-md-8" style=" width:100%;"><input type="text" name="txt" class="form-control"></div>
        </div>
              
        <div class="row" style="padding-top: 30px;">
            <div class="col-md-3"><input type="submit" name="taxt" value="change" style="color: #fff; background: #f8961e;" class="btn"></div>
        </div>
                  
    </form>
    </div>

</div>
</div>
    
</div>

<div class="col-md-2"></div>
</div>
</div>


 
<br><br>


 <table border="2" align="center" style="width:1200px; height:auto; text-align:center;">
<tr style="background:#f8961e; color:white;">
    <th>id</th>
    <th>text</th>
    <th>Option</th>
</tr>
<?php
$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
$query="select * from marquee";
 
$q=mysqli_query($con,$query);
$rowcount=mysqli_num_rows($q);

while($p = mysqli_fetch_array($q))
{
?>
<tr>
    <td><?php echo $p[0]; ?></td>
    <td><?php echo $p[1]; ?></td>
    <td style="width:200px;">
    <a href="edit12.php?id=<?php echo $p[0]; ?>" name="edit3" style="color: #fff; background: skyblue;" class="btn">Edit</a>
    <a href="delete12.php?id=<?php echo $p[0]; ?>" name="delete3" style="color: #fff; background: violet;" class="btn">Delete</a>
    </td>
</tr>
<?php
}
?>
</table>
  </section>              



  <?php include "footer.php"; ?>