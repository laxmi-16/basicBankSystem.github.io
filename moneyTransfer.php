<?php 
    include 'Header.php';
    
                        
     ?>
          
<html><head>
	<style> .red{ color:red;} .green{ color:green;}</style>
</head>
    <body>
<div class="container">
    <div class="row"><?php  if(isset($_REQUEST['error']))
                        {
                        echo "<h2><b class='red' style='text-align:center' >" . $_GET['error'] . "</b></h2>";
                        }
                        if(isset($_REQUEST['t']))
                        {
                        echo "<h2><b class='green' style='text-align:center' >" . $_GET['t'] . "</b></h2>";
                        }
          ?>

        <div class="col-lg-6">
            <h2 style="font-weight: bold"><center>Enter Your Details</center> </h2>
            <form name="myform" action="creditDebit.php" method="post">
                <div class="form-group">
                    <label for="sid">Sender's Customer ID</label> 
                    <input type="text" class="form-control" name="sid" required>
                </div>
                <div class="form-group">
                    <label for="sname">Sender's Full Name</label> 
                    <input type="text" class="form-control" name="sname" required>
                </div>
                  
                <div class="form-group">
                    <label for="rid">Receiver's Customer ID</label> 
                    <input type="text" class="form-control" name="rid" required>
                </div>
                <div class="form-group">
                    <label for="rname">Receiver's Full Name</label> 
                    <input type="text" class="form-control" name="rname" required>
                </div>
                     <div class="form-group">
                    <label for="amt">Amount for Transfer</label> 
                    <input type="number" class="form-control" name="amt" required>
                </div>
               
                    <div class="form-group"><center>
                            <input type="submit" class="btn btn-primary" value="Transfer" > 
                    <a href="home.php"><input type="button" class="btn btn-danger" value="Cancel" ></a>
                    </center>
                    </div>
                     
            </form>
        </div>
        <div class="col-lg-6 "><center><br>
                <br><br><img src="images/i3.jpg"></center></div>
    </div>
</div>

<?php
        include 'Footer.php';
?>
    </body>
</html>