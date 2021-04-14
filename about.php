<!DOCTYPE html>
<html lang="en"  style="overflow:overlay">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

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
    <title>About Us</title>
  </head>
  <body>
    
<?php include 'header.php'; ?>

<section class="jd" style="background:lightgray;" data-aos="zoom-out-up">
      <div class="container"  data-aos="fade-up"
      data-aos-duration="3000">
        <div class="row">
          <div class="col-md-1"></div>
     <?php

$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
$query="select * from aboutcard";

$m = mysqli_query($con,$query);
$result = mysqli_num_rows($m);

?>
 
 <?php
while($p = mysqli_fetch_array($m))
{
?>

<div class="col-md-4">
<div class="jd-section" >
            <img
                src="upload/<?php echo $p['image']; ?>"
                alt="jdimage"
              />
              <div class="jd-name">
                <p class="name"><?php echo $p['fname']; ?></p>
                <p style="font-size: 16px; letter-spacing:1px ; margin-top:4px ;"><?php echo $p['position']; ?></p>
                </div>
            </div>
          </div>
          <?php
}

     ?>  




<?php

$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
$y="select * from aboutdesp";

$qv= mysqli_query($con,$y);
$result = mysqli_num_rows($qv);
while($p = mysqli_fetch_array($qv))
{
  ?>
          <div class="col-md-6" style="color:#f3722c">
          <div class="jdtext">
             <h2><?php echo $p[1]; ?></h2>
             <p><?php echo $p[2]; ?></p>
        <p class="info" style="font-size:1rem;">
              <?php echo $p[3]; ?>
            </p>
        
  <?php

}

?>



</div>
          <div class="col-md-1"></div>
        </div>
      </div>
    </section>



        
    
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