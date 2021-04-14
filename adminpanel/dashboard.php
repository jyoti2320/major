<?php include "header.php"; ?>

<section class="content">
<div class="row" style="padding-bottom:45px; padding-left:30px;">


<div class="col-md-3 p-3 boc" style="">
<?php
$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
$q="select * from gcollege";
$result=mysqli_query($con,$q);
$n=mysqli_num_rows($result);
?>
<div class="row">
<div class="col">
<h5 style=" color:#f8961e;">Total Government Colleges<h5>
</div>
<div class="col">
<h2 style="float:right; color:#f8961e;"><?php echo $n; ?></h2>
</div>
</div>

</div>
<div class="col-md-1"></div>
<div class="col-md-3 p-3 boc" style="">

<?php
$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
$qu="select * from aid_college";
$resultt=mysqli_query($con,$qu);
$na=mysqli_num_rows($resultt);
?>
<div class="row">
<div class="col">
<h5 style=" color:#f8961e;">Total Aided Colleges<h5>
</div>
<div class="col">
<h2 style="float:right; color:#f8961e;"><?php echo $na; ?></h2>
</div>
</div>



</div>
<div class="col-md-1"></div>
<div class="col-md-3 p-3 boc" style="">

<?php
$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
$qq="select * from pcollege";
$results=mysqli_query($con,$qq);
$nn=mysqli_num_rows($results);
?>
<div class="row">
<div class="col">
<h5 style=" color:#f8961e;">Total Private Colleges<h5>
</div>
<div class="col">
<h2 style="float:right; color:#f8961e;"><?php echo $nn; ?></h2>
</div>
</div>



</div>


</div>



<div class="row" style="padding-left:30px;">


<div class="col-md-3 p-3 boc" style="">
<?php
$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
$q="select * from gtpo";
$result=mysqli_query($con,$q);
$n=mysqli_num_rows($result);
?>
<div class="row">
<div class="col">
<h5 style=" color:#f8961e;">Total Government TPO Colleges<h5>
</div>
<div class="col">
<h2 style="float:right; color:#f8961e;"><?php echo $n; ?></h2>
</div>
</div>

</div>
<div class="col-md-1"></div>
<div class="col-md-3 p-3 boc" style="">

<?php
$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
$qu="select * from atpo";
$resultt=mysqli_query($con,$qu);
$na=mysqli_num_rows($resultt);
?>
<div class="row">
<div class="col">
<h5 style=" color:#f8961e;">Total Aided TPO Colleges<h5>
</div>
<div class="col">
<h2 style="float:right; color:#f8961e;"><?php echo $na; ?></h2>
</div>
</div>



</div>
</div>







</section>