<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style4.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<style>
  /*
    DEMO STYLE
*/

@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
  
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

i,
span {
    display: inline-block;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
    display: flex;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #f8961e;
    color: #fff;
    transition: all 0.3s;
}

#sidebar.active {
    min-width: 80px;
    max-width: 80px;
    text-align: center;
}

#sidebar.active .sidebar-header h3,
#sidebar.active .CTAs {
    display: none;
}

#sidebar.active .sidebar-header strong {
    display: block;
}

#sidebar ul li a {
    text-align: left;
}

#sidebar.active ul li a {
    padding: 20px 10px;
    text-align: center;
    font-size: 0.85em;
}

#sidebar.active ul li a i {
    margin-right: 0;
    display: block;
    font-size: 1.8em;
    margin-bottom: 5px;
}

#sidebar.active ul ul a {
    padding: 10px !important;
}

#sidebar.active .dropdown-toggle::after {
    top: auto;
    bottom: 10px;
    right: 50%;
    -webkit-transform: translateX(50%);
    -ms-transform: translateX(50%);
    transform: translateX(50%);
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #f8961e;
}

#sidebar .sidebar-header strong {
    display: none;
    font-size: 1.8em;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #f3722c;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}

#sidebar ul li a:hover {
    color: #f3722c;
    background: #fff;
}

#sidebar ul li a i {
    margin-right: 10px;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #f3722c;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #f8961e;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.article,
a.article:hover {
    background: #f8961e !important;
    color: #fff !important;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */
.content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
    #sidebar {
        min-width: 80px;
        max-width: 80px;
        text-align: center;
        margin-left: -80px !important;
    }
    .dropdown-toggle::after {
        top: auto;
        bottom: 10px;
        right: 50%;
        -webkit-transform: translateX(50%);
        -ms-transform: translateX(50%);
        transform: translateX(50%);
    }
    #sidebar.active {
        margin-left: 0 !important;
    }
    #sidebar .sidebar-header h3,
    #sidebar .CTAs {
        display: none;
    }
    #sidebar .sidebar-header strong {
        display: block;
    }
    #sidebar ul li a {
        padding: 20px 10px;
    }
    #sidebar ul li a span {
        font-size: 0.85em;
    }
    #sidebar ul li a i {
        margin-right: 0;
        display: block;
    }
    #sidebar ul ul a {
        padding: 10px !important;
    }
    #sidebar ul li a i {
        font-size: 1.3em;
    }
    #sidebar {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}
.boc{
        
        background: white;
      
        margin: 0px;
        padding: 10px;
        box-shadow: 0 0 20px 0 rgba(0 ,0, 0,0.3 );
        transition: 0.4s ease;
        border-radius: 9px;
       
    }
  
.contact{
      padding: 40px;


.image2 img {
  width: 100%;
  height: 270px;
 
}
@media only screen and (max-width: 458px) {
  .image2 img {
    width: 100%;
    height: 100%;
  }
}


</style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                 <span> </span>
                 </button>
               <center> <h3 style="font-size:1.5rem; font-weight:bold; color:#f3722c">Admin Dashboard</h3></center>
      
                </div>
            </nav>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="dashboard.php">
                    <i class="fas fa-home"></i>
                       Dashboard
                    </a>
                </li>
                <li>
                <a href="admindashboard.php">
                    <i class="fas fa-home"></i>
                        Home Slider
                    </a>
                    <a href="about.php">
                        <i class="fas fa-briefcase"></i>
                        Aboutus
                    </a>
                    <a href="marquee.php">
                        <i class="fas fa-briefcase"></i>
                        Marquee
                    </a>
                    <a href="notice.php">
                        <i class="fas fa-briefcase"></i>
                        Notice Board
                    </a>
                  
                    <a href="Technical.php">
                        <i class="fas fa-briefcase"></i>
                        Technical Education
                    </a>
                  


                        <li>
                            <a href="gcollege.php"> 
                            <i class="fas fa-briefcase"></i>
                            Government Colleges</a>
                        </li>
                        <li>
                            <a href="pcollege.php">
                            <i class="fas fa-briefcase"></i>
                            Private Colleges</a>
                        </li>
                        <li>
                            <a href="aid_college.php">
                            <i class="fas fa-briefcase"></i>
                            Aided Colleges</a>
                        </li>
                

                          <li>  <a href="tpo.php"> <i class="fas fa-image"></i>&nbsp; Government TPO</a> </li>
                          <li>  <a href="aid_tpo.php"> <i class="fas fa-image"></i>&nbsp; Aided TPO</a> </li>
                       




                </li>
                
                <li>
                    <a href="gallery.php">
                        <i class="fas fa-image"></i>
                        Gallery
                    </a>
                </li>
                <li>
                    <a href="exam.php">
                    <i class="fa fa-clipboard" aria-hidden="true"></i>
                        Exams
                    </a>
                </li>
                <li>
                    <a href="ncc.php">
                        <i class="fas fa-paper-plane"></i>
                        NCC
                    </a>
                </li>
            </ul>

            
        </nav>

