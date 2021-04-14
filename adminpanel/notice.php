<?php include "header.php"; ?>
<section class="content">


<div class="row">

<div class="col-md-1"></div>
    <div class="col-md-5" style="padding-top:20px;">
   <center style="font-size:1.3rem; color:#f3722c; font-weight:500;"> Add Event</center>
      <div class="boc">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 contact">
      <form method="post">
             
              <div class="row" style="padding-bottom: 30px;">
                  <div class="col-md-4"> Event: </div>
                  <div class="col-md-8" style=" width:100%;"><input type="text" name="event" class="form-control"></div>
              </div>
             
             
              <div class="row" style="padding-top: 10px;">
              <div class="col-md-1"></div>
                  <div class="col-md-4"><input type="submit" name="Adde" value="Add to event"style="color: #fff; background: #f8961e;" class="btn"></div>
                
                  </div>
                  
      </form>
                </div>
      
      </div>
      </div>
    
    </div>
      
    <?php
                  if(isset($_POST['Adde'])){
                    
                    $event=$_POST["event"];

                    $con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
                    $query = "INSERT INTO `event`(`event`) VALUES ('$event')";
                    
                    mysqli_query($con,$query);
                   $p=mysqli_affected_rows($con);
                   if($p>0){
                       echo "record inserted";
                   }
                   else{
                       echo "invalid";
                   }
                    
                  }
            ?>


<div class="col-md-1"></div>
    <div class="col-md-5" style="padding-top:20px;">
   <center style="font-size:1.3rem; color:#f3722c; font-weight:500;"> Add Notice</center>
      <div class="boc">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 contact">
      <form method="post">
      <div class="row" style="padding-bottom: 30px;">
              <div class="col-md-4">id: </div>
                  <div class="col-md-8" style=" width:100%;"><input type="text" name="nid" class="form-control"></div>
                  </div>
             
              <div class="row" style="padding-bottom: 30px;">
                  <div class="col-md-4"> Notice: </div>
                  <div class="col-md-8" style=" width:100%;"><input type="text" name="notice" class="form-control"></div>
              </div>
             
             
              <div class="row" style="padding-top: 10px;">
              <div class="col-md-1"></div>
                  <div class="col-md-4"><input type="submit" name="Addn" value="Add to notice"style="color: #fff; background: #f8961e;" class="btn"></div>
                
                  </div>
                  
      </form>
                </div>
      
      </div>
      </div>
    
    </div>
   </div>   
    <?php
                  if(isset($_POST['Addn'])){
                    $nid=$_POST['nid'];
                    $notice=$_POST["notice"];

                    $con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
                    $query = "INSERT INTO `notice`(`nid`, `notification`) VALUES ($nid,'$notice')";
                    
                    mysqli_query($con,$query);
                   $p=mysqli_affected_rows($con);
                   if($p>0){
                       echo "record inserted";
                   }
                   else{
                       echo "invalid";
                   }
                    
                  }
            ?>
<div class="col-md-1"></div>

    <div class="col-md-8" style="padding-top:20px;">
   <center style="font-size:1.3rem; color:#f3722c; font-weight:500;"> Add Notice content</center>
      <div class="boc">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 contact">
      <form method="post" enctype="multipart/form-data">
      <div class="row" style="padding-bottom: 30px;">
              <div class="col-md-4">Notice: </div>
                  <div class="col-md-8" style=" width:100%;"> <select name="nid" class="form-control">
         <option>select Notice</option>
<?php
//for fill dynamic combobox=========
$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
$query="select * from notice order by notification";
$rs=  mysqli_query($con, $query);
while($a=  mysqli_fetch_array($rs))
{
?>
<option value="<?php echo $a[0]; ?>">
    <?php echo $a[1]; ?></option>
         
<?php
}
//===================================
?>
     </select></div>
                  </div>
             
              <div class="row" style="padding-bottom: 30px;">
                  <div class="col-md-4"> File: </div>
                  <div class="col-md-8" style=" width:100%;"><input type="file" name="file" class="form-control"></div>
              </div>
             
             
              <div class="row" style="padding-top: 10px;">
              <div class="col-md-1"></div>
                  <div class="col-md-4"><input type="submit" name="fill" value="Add to file"style="color: #fff; background: #f8961e;" class="btn"></div>
                
                  </div>
                  
      </form>
                </div>
      
      </div>
      </div>
    
    </div>
   

    <?php
                  if(isset($_REQUEST['fill'])){
                    
                   extract($_REQUEST);
                   if(isset($_FILES["file"]))
                   {
                   
                    $file = $_FILES['file']['name'];
                    $file_temp =$_FILES['file']['tmp_name'];


                    $target='C:/xampp/htdocs/jdmeerut/upload/'.basename($_FILES['file']['name']);
                    $t=move_uploaded_file($file_temp, "$target");
                   }
                   $con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
                    $n="INSERT INTO `pdf`(`nid`,`file`) VALUES ($nid,'$file')";
                    
                    mysqli_query($con,$n);
                    
                    }
            ?>




     </div>
</div>
</section>



       

