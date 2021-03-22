<?php
    
    include 'Header.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
       <title>Bank System</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/boostrap.min.js"></script>
        <style>
            
            td{
                border: none;
            }
        </style>
        </head>
    <body>
        <div class="container">
            <div class="row row-responsive">
                <div class="col-lg-6">
                    <h2 class="b" style="font-weight:bold; text-decoration: underline">Contact Us</h2>
                    <br>
                     <form action="contactQuery.php" method="post">
                        <div class="form-group">
                            <label for="name">Your Name:</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control"  pattern="/^\w+([\.-]?\w+)*@(\w+([\.-]?\w+)*(\.\w{2,3})$+/">
                        </div>
                        <div class="form-group">
                            <label for="feedback">Feedback:</label>
                            <textarea name="feedback" class="form-control" maxlength="200" min="10"></textarea>
                        </div>
                         <center> <input type="submit" value="Submit" class="btn btn-success" name="submit" onclick="return validation()">
                         </center><?php
                        if(isset($_REQUEST['error']))
                        {
                        echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
                        }
                        ?> 
                    </form>
                </div><div class="col-lg-2"></div>
                <div class="col-lg-4">
                    
                    <center><h1> Details</h1><br><br>
                        <table class="table text-justify ">
                            <tr>
                                <td colspan="2" style="font-weight: bold">Toll Free No. </td>
                            </tr>
                            <tr>
                                <td></td> <td>079-2345678</td>
                            </tr>
                            <tr><td></td><td>079-12345780 </td></tr>
                            <tr>
                                <td colspan="2" style="font-weight: bold">Email Id. </td>
                            </tr>
                            <tr>
                                <td></td> <td>banksystemInfo@gmail.com</td>
                            </tr>
                            <tr><td></td><td>helpbankInfo@gmail.com </td></tr>

                            
                            
                        </table></center>    
                        </div>
                    
                                            
                    </div>
                </div>
            
       
        <?php
 include 'Footer.php';
?>
    </body>
</html>