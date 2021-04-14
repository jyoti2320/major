<!DOCTYPE html>
<html lang="en" style="overflow:overlay">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css" />

    <script
      src="https://kit.fontawesome.com/8eb330855f.js"
      crossorigin="anonymous"
    ></script>
    <title>Exam</title>
  </head>
  <body>
  <?php include 'header.php'; ?> 



  <?php

$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
$query="select * from examslider";
 
$q=mysqli_query($con,$query);
$rowcount=mysqli_num_rows($q);


?>
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="background-color: #577590; height:auto; overflow-x: hidden;" >
  <div class="carousel-inner container">
    
   <?php

for($i=1; $i<=$rowcount; $i++)
{
  $row=mysqli_fetch_array($q);
?>
<?php
if($i==1)
{
  ?>
  <div class="carousel-item active">
  <img class="d-block img-fluid" src="image/<?php echo $row['image']; ?>" alt="First slide" width="100%">
</div>
<?php
}
else{
  ?>
  <div class="carousel-item">
  <img class="d-block img-fluid" src="image/<?php echo $row['image']; ?>" alt="First slide" width="100%">
</div>
<?php
}
?>

   
<?php
}


?>
    

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
      

<div class="row " >
          <div class="col-md-12 ">
            <h2
              style="
                color: #f3722c;
                font-weight: 700;
                letter-spacing: 3px;
                padding: 2%;
              "
            >
              Examinations
            </h2>    

<?php

$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
$h="select * from description";

$qp= mysqli_query($con,$h);
$result = mysqli_num_rows($qp);
while($p = mysqli_fetch_array($qp))
{
  ?>
    <p style="letter-spacing: 2px; font-size: 16px; text-align: center; padding:5px">
             
    <?php echo $p[1]; ?>
  </p>

  <?php
}
  ?>
          </div>
       
      </div>
    </div> </div>

   <?php include 'footer.php'; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./assets/script.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>