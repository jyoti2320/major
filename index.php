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
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
    <title>jdmeerut</title>
  </head>
  <body>
 
    <?php include 'header.php'; ?>

    
   

<?php

$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
$query="select * from slider";
 
$q=mysqli_query($con,$query);
$rowcount=mysqli_num_rows($q);


?>


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
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






<section style="background:lightgray; padding:30px;">
<div class="container">
    <div class="row">
          <div class="col-md-5" data-aos="fade-left"
          data-aos-anchor="#example-anchor"
          data-aos-offset="500"
          data-aos-duration="500" >
           
            <div class="holder" style="height:300px; box-sizing:border-box; border-radius:5px;">
              
                <h5 style="background:#f8961e; padding:10px; font-weight:400; color:#fff;"> &nbsp;<i class="fa fa-file-text" aria-hidden="true"></i> &nbsp;Important Notice</h5>
                <ul id="ticker01">
                  <marquee direction="up" scrollamount="1" scrolldelay="60">

                  <?php

$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");  
                  $s="select * from notice";

                    $q= mysqli_query($con,$s);
                    $result = mysqli_num_rows($q);
                    while($p = mysqli_fetch_array($q))
                    {
                      ?>
                  
                         <li>
                          <span><i class="fab fa-discourse" style="color:rgb(68, 11, 11); font-size: 15px;
                           padding:5px"></i></span>
                           <?php
                           

                           $con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");              
                                       $s="SELECT * FROM `pdf` WHERE id=1";
      
                          $qo= mysqli_query($con,$s);
                          $res = mysqli_num_rows($qo);
                          while($t = mysqli_fetch_array($qo)){
                         ?>
                         <a href="upload/<?php echo $t['file'];?>">

                           <?php
                          }
                         
                         
                         
                         ?>
                        <?php echo $p[1]; ?>
                        </a>
                         

                      <?php

                  }
               
                ?>
 </li>








           </marquee>
              </ul>
            </div>
          </div>

                  


                    
         <div class="col-md-5" data-aos="fade-left"
          data-aos-anchor="#example-anchor"
          data-aos-offset="500"
          data-aos-duration="500" >
          
          <div class="holder" style="height:300px; box-sizing:border-box; border-radius:5px;">
              
                <h5 style="background:#f8961e; padding:10px; font-weight:400; color:white;"> &nbsp;<i class="fa fa-calendar" aria-hidden="true"></i> &nbsp;Events</h5>
            
                <ul id="ticker01">
                  <marquee direction="up" scrollamount="1" scrolldelay="60">

                  <?php

$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");   
                 $s="select * from event";

                    $q= mysqli_query($con,$s);
                    $result = mysqli_num_rows($q);
                    while($p = mysqli_fetch_array($q))
                    {
                      ?>
                  
                         <li>
                          <span><i class="fab fa-discourse" style="color:rgb(68, 11, 11); font-size: 15px;
                           padding:5px"></i></span>
                         <a href="#"><?php echo $p[1]; ?></a>
                          </li>

                      <?php

                  }
               
                ?>
           </marquee>
              </ul>
            </div>
          </div>

               





          <div class="col-md-2">
              
              <div class="holder" style="list-style:none; box-sizing:sans-sarif; width:250px; background:lightgray;">
              <h5 style=" color:black;"><i class="fa fa-link" aria-hidden="true"></i> &nbsp;Important Links</h5>
              <div style="border:1px solid black; border-radius:5px;">
              <li style="background:#DD4B39; color:white; padding:5px 10px; font-size:12px;"> &nbsp;<a href="gallary.php" style="color:white; text-decoration:none;"><i class="fas fa-image"></i>
                &nbsp;Vraksha-Ropan</a></li>
              <li style="background:#249BDA; color:white; padding:5px 10px; font-size:13px;"> &nbsp;<a href="gcollage.php" style="color:white; text-decoration:none;"><i class="fas fa-copy"></i> &nbsp;Government Colleges</a></li>
              <li style="background:#5CB85C; color:white; padding:5px 10px; font-size:13px;"> &nbsp;<a href="tpo.php" style="color:white; text-decoration:none;"><i class="fas fa-copy"></i> &nbsp;TPO-Government Colleges TPO</a></li>
              <li style="background:#DD4B39; color:white; padding:5px 10px; font-size:13px;"> &nbsp;<a href="tpo-aided.php" style="color:white; text-decoration:none;"><i class="fas fa-copy"></i> &nbsp;TPO-Aided Colleges TPO</a></li>
              <li style="background:#249BDA; color:white; padding:5px 10px; font-size:13px;"> &nbsp;<a href="ncc.php" style="color:white; text-decoration:none;"><i class="fas fa-paper-plane"></i> &nbsp;NCC</a></li>
              <li style="background:#5CB85C; color:white; padding:5px 10px; font-size:13px;"> &nbsp;<a href="exam.php" style="color:white; text-decoration:none;"><i class="fa fa-clipboard" aria-hidden="true"></i> &nbsp;Exams</a></li>
</div>
            </div>
        </div>
    
    </section>

    <section>
      <div class="container">
        <div class="board-heading josh-js"
        style="padding: 5%; font-size: 55px;" class="text-centre "
          data-josh-anim-name="fadeInUp"
              data-josh-duration="1000ms">
          <h1 >
            Board of Technical Education, Uttar Pradesh
          </h1>
        </div>
      <div class="board">

       <?php

$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");   
     $query="select * from board";
 
        $m = mysqli_query($con,$query);
    $result = mysqli_num_rows($m);

    ?>
<div class="row">
<?php
while($p = mysqli_fetch_array($m))
{
?>

 
      <div class="col-md-4">
              <div class="card hnbleimage "data-aos="flip-up"
              
               style="width:18rem" >
                <img
                  class="card-img-top"
                  src="upload/<?php echo $p['image']; ?>"
                  alt="Card image cap"
                />
                <div class="card-body ">
                  <h5 class="card-title"><?php echo $p['2']; ?></h5>
                  <p class="card-text">
                  <?php echo $p['3']; ?>
                  </p>
                </div>
              </div>
            </div>
     <?php
}

     ?>
</div>




<?php

$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");$h="select * from description";

$qp= mysqli_query($con,$h);
$result = mysqli_num_rows($qp);
while($p = mysqli_fetch_array($qp))
{
  ?>

        <p class="info">
              <?php echo $p[1]; ?>
            </p>
        
  <?php

}

?>


          </div>
        </div>
      </div>
    </section>

  

<section class="jd" data-aos="zoom-out-up">
      <div class="container"  data-aos="fade-up"
      data-aos-duration="3000">
        <div class="row">
          <div class="col-md-1"></div>
     <?php

$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");$query="select * from aboutcard";

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

$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");$y="select * from aboutdesp";

$qv= mysqli_query($con,$y);
$result = mysqli_num_rows($qv);
while($p = mysqli_fetch_array($qv))
{
  ?>
          <div class="col-md-6">
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




    <section style="margin-top: 55px;" data-aos="fade-up">
      <div class="container">
      <h2 style="color: #f8961e;
                font-size: 30px;
                font-weight: 900;
                text-transform: uppercase; text-align:center; padding-bottom:30px;"><a href="gallary.php"style="
                color: #f8961e; text-decoration:none;">
              Gallery</a>
</h2>
        <div class="row">
          <div class="col-md-6">
              <div class="row" style="padding-bottom:20px;">
          <div class="col-md-6 img_div">
            <img src="assets/images/vraksha_1.jpeg"class="img1"> 
        </div>
        <div class="col-md-6 img_div">
            <img src="assets/images/vraksha_2.jpeg"class="img1"> 
        </div>

        </div>
<div class="row" style="padding-bottom:20px;">
          <div class="col-md-6 img_div">
            <img src="assets/images/vraksha_3.jpeg"class="img1"> 
        </div>
        <div class="col-md-6 img_div">
            <img src="assets/images/vraksha_4.jpeg"class="img1"> 
        </div>

</div>    
<div class="row" style="padding-bottom:20px;">
          <div class="col-md-6 img_div">
            <img src="assets/images/vraksha_5.jpeg"class="img1"> 
        </div>
        <div class="col-md-6 img_div">
            <img src="assets/images/vraksha_6.jpeg"class="img1"> 
        </div>

        </div>
</div>
        
            

          <div class="col-md-6" data-aos="zoom-in-up" data-aos-duration="3000">
            <div class="row" >
              <div class="col-md-6">
                <div class="box">
                  <div class="icon">
                    <i class="fas fa-user-edit"></i> 
                  </div>

                  <p><a href="exam.php"  style="color:white;text-decoration: none;">Exam</a></p>
                </div>
              </div>
              <div class="col-md-6" data-aos="zoom-in-up" data-aos-duration="3000">
                <div class="box ">
                  <div class="icon">
                    <i class="fas fa-archway"></i>
                  </div>

                  <p><a href="gcollage.php" style="color:white;text-decoration: none;">Colleges</a></p>
                </div>
              </div>
              <div class="col-md-6 col_div" data-aos="zoom-in-up"data-aos-duration="3000"  >
                <div class="box">
                  <div class="icon">
                    <i class="fas fa-chess-queen"></i>
                  </div>

                  <p><a href="games.php"  style="color:white;text-decoration: none;">Games</a></p>
                </div>
              </div>
              <div class="col-md-6 col_div" data-aos="zoom-in-up" 
              data-aos-duration="3000"  >
                <div class="box">
                  <div class="icon">
                    <i class="fab fa-black-tie"></i>
                  </div>

                  <p><a href="tpo.php"  style="color:white;text-decoration: none;">TPO </a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="contact" style="margin-top: 100px;" data-aos="fade-up">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2 class="contact-mine"><a href="contact.php" style="color:#f8961e; text-decoration:none;">
            Contact</a>
          </h2>
        </div>

        <div class="row">
          <div class="col-lg-5 d-flex align-items-stretch" data-aos="flip-left"  data-aos-duration="2000">
            <div class="info">
              <div class="address">
                <i class="fas fa-map-marker-alt"></i> 
                <h4>Location:</h4>
                <p>
                  378 Transport nagar Vishnupuri Indore, Madhya Pradesh 
                </p>
              </div>

              <div class="email">
                <i class="far fa-envelope" ></i>
                <h4>Email:</h4>
                <p>ahirwarjyoti900@gmail.com</p>
              </div>

              <div class="phone">
                <i class="fas fa-phone-alt" ></i>
                <h4>Call:</h4>
                <p>+91 7772046867</p>
              </div>

              <div style="width: 100%; height:300px">
                <iframe
                  width="100%"
                  height="100%"
                  src="https://maps.google.com/maps?width=100%&height=600&hl=en&coord=25.403584973186703,78.56323242187501&q=378 Transport nagar Vishnupuri Indore, Madhya Pradesh&ie=UTF8&t=&z=11&iwloc=B&output=embed"
                  frameborder="0"
                  scrolling="no"
                  marginheight="0"
                  marginwidth="0"
                ></iframe>
              </div>
              <br />
            </div>
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="flip-right"
          data-aos-duration="2000">
            <form
              
              method="post"
              role="form"
              class="php-email-form"
            >
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    id="name"
                    data-rule="minlen:4"
                    data-msg="Please enter at least 4 chars"
                  />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    data-rule="email"
                    data-msg="Please enter a valid email"
                  />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input
                  type="text"
                  class="form-control"
                  name="subject"
                  id="subject"
                  data-rule="minlen:4"
                  data-msg="Please enter at least 8 chars of subject"
                />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea
                  class="form-control"
                  name="message"
                  rows="10"
                  data-rule="required"
                  data-msg="Please write something for us"
                ></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">
                  Your message has been sent. Thank you!
                </div>
              </div>
              <div class="text-center">
                <button type="submit">Send Message</button>
              </div>
            </form>
          </div>
        </div>
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
  </body>
</html>
