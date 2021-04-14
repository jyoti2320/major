<!DOCTYPE html>
<html lang="en" style="overflow:overlay">
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
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
    <script src="https://cdn.jsdelivr.net/npm/joshjs@1.0.0/dist/josh.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Gallery</title>
  </head>
  <body>
    
  <?php include 'header.php'; ?> 












<section style="background-color: rgb(111, 174, 226);margin-bottom:0%;">   
<div class=" container" style="background-color:white ;">
    <h3 class="gallery_heading"> vraksha ropan</h3>

    <?php

$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
$query="select * from gallery";

$m = mysqli_query($con,$query);
$result = mysqli_num_rows($m);

?>
<div class="row">
<?php
while($p = mysqli_fetch_array($m))
{
?>
<div class="col-md-3 img_div" style="margin-top:60px ;">
            <img src="image/<?php echo $p['1']; ?>" class="img1"> 
</div>
<?php

}
?>
</div>














  
</section> 

   <?php include 'footer.php'; ?> 
     <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="./assets/script.js"></script>
     
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
      </body></html>
