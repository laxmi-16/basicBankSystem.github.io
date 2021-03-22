

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include 'Header.php';
            $q="select * from moneytransfer";
            $r= mysqli_query($con, $q);
        ?>
        
        <div class="container-fluid">
            <div class="row">
                <h4 style="font-weight: bold"><center>Transaction History</center></h4>
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                           
                       <tr style="font-weight:bold;"><td>Sender ID</td><td>Sender Name</td><td>Receiver ID</td><td>Receiver Name
        </td><td>Amount</td><td>Date and Time</td><td>Delete</td></tr>
    <?php 
           
            while($row=mysqli_fetch_array($r)){
                $d=$row[5];
                echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td>"
                        . "<td><a href='deleteHistory.php?dat=$d'><img src='images/i11.png'></a></td></tr>";
            }
    ?>
    
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <?php 
        include 'Footer.php';
        ?>
    </body>
</html>
