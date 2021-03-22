<?php
$con= mysqli_connect("localhost", "root","", "bank_system");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bank System</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <style>
            .h{
                background-color: black;
                color: white; 
            }
body{
  background: url(images/i8.png);
  background-repeat:no-repeat;
  background-size: cover;
}
        </style>
    </head>
    <body >
        <header>
        <nav class="navbar navbar-inverse">
         <div class="container-fluid h">                           
         <div class="navbar-header">
          <!--   <button type="button" class="navbar-toggle" data-toggle="collaspe" data-target="#myNavbar">
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                         
             </button>-->
             <a class="navbar-brand h" href="home.php">
                 <strong class="h">  Bank System</strong>             </a> 
             <img src="images/i3.jpg" alt="Logo" style="width:100px; height: 45px"> 
         </div>  
            <!-- <div class="collapse navbar-collapse" id="myNavbar"> -->
              <ul class="nav navbar-nav navbar-right ">
             <li><a href="home.php"><span class="glyphicon glyphicon-home "></span> Home</a></li>
           
                  <li><a href="About.php"><span class="glyphicon glyphicon-user "></span> About </a></li>
           <li><a href="ContactUs.php"><span class="glyphicon glyphicon-phone"></span> Contact us</a></li>
             
       </ul>
                <!-- </div>-->
      
       </div>
       </nav>
       </header>
    
    </body>
</html>