<html> 
    <head> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <title>footer tag</title> 
        <style> 
            .column { 
                 
               width:33%;
               height: 100px;
               float:left;
               margin-bottom: 0px;
              color:white;
              
            } 
            .p1 { 
                font-size:20px; 
                font-weight:bold; 
                width:100%;
                color:white;
            } 
         .x1
         {
             color:white;
         }
           footer {
               left: 0;
 
    padding: 10px 0;
    background-color: black;
    bottom: 0;
    width: 100%;
    float:left;
    color:white;
    height: 15%;
         }
        </style> 
    </head> 
    <body> 
        <footer> 
           <div class="container">
               <div class="col-lg-4 column">
                <p class="p1 x1">Information</p> 
                <ul style="list-style-type:disc"> 
                    <a href="AboutUs.php" class="x1">  <li>About Us</li> </a>    
                    <a href="ContactUs.php" class="x1">  <li>Contact Us</li> </a>
                </ul>
               </div>
               <div class="col-lg-4 column">
                   <p class="p1 x1" >Toll free No:</p>   
                   <ul style="list-style-type:disc" class="x1"> 
                    <li>079-2345678</li>
                     <li>079-12345780</li>
                </ul>
               </div>
               <div class="col-lg-4 column">
                   <p class="p1 x1">Email:</p>   
                   <ul style="list-style-type:disc" class="x1"> 
                    <li>banksystemInfo@gmail.com</li>
                    <li>helpbankInfo@gmail.com</li>
                </ul>
               </div>

           </div>
        </footer> 
        
    </body> 
</html>