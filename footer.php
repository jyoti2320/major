<footer id="footer" style="margin-top: 60px;" data-aos="fade-up">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-contact">
              <h3 style="line-height: 35px;">Joint Director UP west</h3>
              <p>
                <strong>Phone:</strong> +91 7772046867<br />
                <strong>Email:</strong> jyotiahirwar11@gmail.com<br />
              </p>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li>
                  <i class="fas fa-chevron-right" style="font-size:10px ; padding:5px"></i> <a href="#">Home</a>
                </li>
                <li>
                  <i class="fas fa-chevron-right" style="font-size:10px ; padding:5px"></i> <a href="#">About us</a>
                </li>
                <li>
                  <i class="fas fa-chevron-right" style="font-size:10px ; padding:5px"></i> <a href="#">Services</a>
                </li>
                <li>
                  
                  <i class="fas fa-chevron-right" style="font-size:10px ; padding:5px"></i>  <a href="#">Terms of service</a>
                </li>
                <li>
                 
                  <i class="fas fa-chevron-right" style="font-size:10px ; padding:5px"></i>  <a href="#">Privacy policy</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Colleges</h4>
              <ul>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="gcollage.php">Government Colleges</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="aided.php">Aided Colleges</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="pcollage.php">Private Colleges</a>
                </li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
              <h4>Join Our Newsletter</h4>
              <p>
             If You have any query, so please join us </p>
              <form method="post">
                <input type="email" name="email" />
                <input type="submit"
                  value="Subscribe" name="Subscribe"
                />
              </form>

              <?php
                  if(isset($_POST['Subscribe'])){
                    
                    $email=$_POST["email"];

                    $con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
                    $d = "insert into store (email) values ('$email')";
                    
                    if(mysqli_query($con,$d)){
                      echo "<script>
                      alert('we are contact you within 24 hours!!')
                      </script>";
                    }
                    else{
                      echo "<script>
                      alert('failed!!')
                      </script>";
                    }
                  }
            ?>









            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright-wrap d-md-flex py-4">
          <div class="mr-md-auto text-center text-md-left">
            <div class="copyright">
              &copy; Copyright <strong><span>Joint Director</span></strong
              >. All Rights Reserved
            </div>
            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->
            </div>
          </div>
          <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" class="google-plus"><i class="fab fa-google"></i></a>
            <a href="#" class="linkedin"><i class="fab fa-skype"></i></a>
          </div>
        </div>
      </div>
  