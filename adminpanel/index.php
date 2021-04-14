<?php session_start(); ?>
<html>
    <head>
<meta charset="UTF-8" />
    <meta name="keywords" content="footer, address, phone, icons" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      href="http://fonts.googleapis.com/css?family=Cookie"
      rel="stylesheet"
      type="text/css"
    />
   
    
        <title>Admin Login</title>
        <link rel="stylesheet" href="style2.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script
      src="https://kit.fontawesome.com/8eb330855f.js"
      crossorigin="anonymous"
    ></script>

    <script>
      $(document).ready(function () {
        $(window).scroll(function () {
          var scroll = $(window).scrollTop();
          if (scroll > 30) {
            $(".navbar").css("background-color", " white");
            $(".navbar").css(
              "box-shadow",
              " 0px 0px 8px 1px rgb(177, 176, 176)"
            );
          } else {
            $(".navbar").css("box-shadow", "none");
          }
        });
      });
    </script>
    <style>
       body{
background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) ,url("bg.jpg");
			background-repeat:no-repeat;
			background-size:cover;
			background-position:fixed;
			padding:0px;
			margin:0px;
}
 .contact{
            color:white;
			      background:rgba(0,0,0,0.5);
            border-radius:10px;
            font-family:sans-serif;
			      box-shadow:0 0 10px rgba(0,0,0,0.13);
            align-items: center;
            padding:40px;
			margin:0 auto;
      
           	}
             .input .form-control{
		background:transparent;
		border:0;
		outline:none;
		border-bottom:2px solid gray;
		color:white;
		margin:0px;
		padding:10px;
		

}
.btn{
color:white;
background: linear-gradient(to right, #f3722c, #f8961e);
width:100%;
font-weight:bold;
}
        
    </style>
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6"style=" padding-top:150px; ">
       
      <form method="post" class="contact">
      <center style=" padding-bottom:40px; color:white; font-weight:bold; font-size:2rem;"><i class="fa fa-user" aria-hidden="true"></i>
&nbsp;Admin Login</center>
<div class="input">
<input type="text" name="username" id="user" class="form-control" placeholder="Username"><br>
<input type="password" name="password" id="pass" class="form-control" placeholder=" password"><br>
</div>   

<input type="Submit" class="btn" name="Login" value="Login"><br>    </form>
 
    </div>
    <div class="col-md-3"></div>
    </div>
</div>



</body>
</html>




<?php
    if(isset($_POST['Login']))
    {
        extract($_REQUEST);
        $con=mysqli_connect("localhost","root","","jdmeerut_jdmeerut");
            $q="select * from adminlogin where username='$username' and password='$password'";
    $result=mysqli_query($con,$q);
    $n=mysqli_num_rows($result);
   if($n>0){
       echo "login successful";
       header("location:dashboard.php");
       
    }
    else{
        echo "invalid";
    }
    }
?>
