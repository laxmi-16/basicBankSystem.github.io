<?php
    include 'Header.php';
    $id=$_GET["id"];
    $q="select * from customers where customerID=$id";
    $r= mysqli_query($con, $q);
    $row= mysqli_fetch_array($r);
?>
<div class="container">
    <div class="row">
        <h1><center>Details</center></h1>
        <br><br>
        <div class="col-auto">
            <table class="table table-condensed">
                <tr>
                    <td style="font-weight: bold">Customer ID</td>
                    <td>:&nbsp;&nbsp;<?php echo $row[0];?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold">Full Name</td>
                    <td>:&nbsp;&nbsp;<?php echo $row[1];?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold">Email</td>
                    <td>:&nbsp;&nbsp;<?php echo $row[3];?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold">Current Balance</td>
                    <td>:&nbsp;&nbsp;<?php echo $row[4];?></td>
                </tr>
                </table>
            <center><a href="moneyTransfer.php"><input type="button" class="btn btn-success" 
                                                       value="Transfer Money"></a> </center>                    
            
        </div>
    </div>
</div>


<?php
    include 'Footer.php';
?>
