
 <div class="upper">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <a href="./">
              <div class="log-image">
                <img
                  style="height: 150px;"
                  src="https://th.bing.com/th?id=OIF.YlAS1GfVZfFo%2bAZxP7h8nA&pid=ImgDet&rs=1"
                  alt="sign_image"
                />
              </div>
            </a>
          </div>
          <div class="col-md-6">
            <div class="heading-director">
              <h3 class="text">
                 DIRECTORATE OF <br />
                TECHNICAL  <br>EDUCATION 
              </h3>
            </div>
          </div>
          <div class="col-md-4" style="display:flex;justify-content: center;align-items: center; width:100%;">
            <div class="clean-india" >
              <img
                style="height: 150px;"
                src="http://bteup.ac.in/InstituteContent/999/Content/images/rightLogo.jpg"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php

$con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
$s="select * from marquee";

$o= mysqli_query($con,$s);
$result = mysqli_num_rows($o);
while($p = mysqli_fetch_array($o))
{
  ?>

<marquee style="color:red; font-size:20px; font-weight:400;">
<?php echo $p['1']; ?>
</marquee> 
  <?php

}

?>

   

<section>
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark primary-color p-0">
        <!-- Navbar brand -->

        <!-- Collapse button -->
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#basicExampleNav"
          aria-controls="basicExampleNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
          <!-- Links -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="./index.php"
                >Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about.php">About us</a>

            </li>
            
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                id="navbarDropdownMenuLink"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                >Gallery</a
              >
              <div
                class="dropdown-menu dropdown-primary"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <a class="dropdown-item" href="./gallary.php">Vraksha Ropan</a>
                
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./games.php">Games</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="./contact.php">Contacts</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                id="navbarDropdownMenuLink"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                >Colleges</a
              >
              <div
                class="dropdown-menu dropdown-primary"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <a class="dropdown-item" href="./gcollage.php">Government</a>
                <a class="dropdown-item" href="./aided.php">Aided</a>
                <a class="dropdown-item" href="./pcollage.php">Private</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./exam.php">Exam</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./ncc.php">NCC</a>
            </li>
            <li class="nav-item dropdown">
           
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">TPO</a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="./tpo.php">Government Colleges TPO</a>
                <a class="dropdown-item" href="./tpo-aided.php">Aided Colleges TPO</a>
               
              </div>
            </li> 
          </ul>
          <!-- Links -->
        </div>
        <!-- Collapsible content -->
      </nav>
      <!--/.Navbar-->
    </section>
