<!DOCTYPE html>
<html lang="en">
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

    <link rel="stylesheet" href="./assets/style.css" />

    <script
      src="https://kit.fontawesome.com/8eb330855f.js"
      crossorigin="anonymous"
    ></script>
    <title>Contacts</title>
  </head>
  <body>
  <?php include 'header.php'; ?> 
  <section id="contact" class="contact" style="margin-top: 30px;" data-aos="fade-up">
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
                <button type="submit" name="send">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  
    <?php
    if(isset($_POST['send'])){
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'jdmeerut10@gmail.com';                 // SMTP username
$mail->Password = 'jdmeerut@123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('jdmeerut10@gmail.com', 'Jyoti');
$mail->addAddress($_POST['email']);     // Add a recipient

$mail->addReplyTo('jdmeerut10@gmail.com');

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $_POST['subject'];
$mail->Body    = $_POST['message'];
$mail->AltBody = $_POST['message'];

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '<p style="color:white; background:green; padding:10px; position:absolute; box-sizing:border-box; top:300px; right:700px; border-radius:5px;">Message has been sent</p>';
}
}
?>

   



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
  </body>
</html>
