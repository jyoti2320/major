<!DOCTYPE html>
<html lang="en" style="overflow:overlay">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

  <link rel="stylesheet" href="./assets/style.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/8eb330855f.js" crossorigin="anonymous"></script>
  <title>Government Colleges</title>


  
</head>

<body>
<?php include 'header.php'; ?> 

<section style="background-color: #577590;">
      <div class="container inner-div" style="background-color: #fff;">
        <div class="row">
          <h1 class="col-heading">
            Government Polytechnic Colleges
          </h1>
          <div class="col-md-12" style="margin-top: 50px; margin-left: 0px; ">
            <div class="table-college college-tables">
              
              
<?php

$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
$query="select * from pcollege";
 
$q=mysqli_query($con,$query);
$rowcount=mysqli_num_rows($q);
?>

              
              <table class="table table-bordered" style="overflow-x: auto;">
                <thead
                  style="
                    background: -webkit-linear-gradient(
                      to right,
                      #f8961e,
                      #f3722c
                    ); /* Chrome 10-25, Safari 5.1-6 */
                    background: linear-gradient(to right, #f8961e, #f3722c);
                    color: white;
                  "
                >
                  <tr>
                    <th scope="col">SI No.</th>
                    <th scope="col">Polytechnic Name</th>
                    <th scope="col"> Address</th>
                    <th scope="col">Available Courses</th>
                    <th scope="col">Aprroved Seats</th>
                    <th scope="col">Website</th>
                  </tr>
                </thead>
             
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
    </tr>
<?php
}
?>
</table>
       


          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include 'footer.php'; ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="./assets/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>

</html>
