<?php
    include 'Header.php';
    
    
?>
<center>
<!--   <h1 style="font-weight: bold">Search Customer</h1><br><br>
    <h4>Enter Customer ID for search:<input type="text" name="id">
        <a href="searchCust.php?s=id"> <span class="glyphicon glyphicon-search">
            </span></a></h4>
    -->
   <div class="container">
       <h1 style="font-weight: bold">Search Customer</h1><br><br>
    
       <form action="searchCustomer.php" method="post">
            <div row="row">
                <div class="col-auto">
            <div class="form-group">
                <label for="id1">Enter Customer Id : </label>
                <input type="text" class=" form-inline" name="id1" required>
                <button type="submit" name="submit"><span class="glyphicon glyphicon-search">
                    
                        </span>
                    </button>
            </div>
            
                </div>
        </div>
           <?php
           if(isset($_REQUEST['error']))
                        {
                        echo "<br><br><h4><b class='red'>" . $_GET['error'] . "</b></h4>";
                        }
                        ?>
            </form>
    </div>
</center>

<?php
if(isset($_REQUEST['submit'])){
    $id=$_POST["id1"];
$q="select * from customers where customerID='$id'";
$r= mysqli_query($con, $q);
$row= mysqli_fetch_array($r);
$value1=$row[0];
if($value1==false){
             $error = "<span style='color:red'>Customer ID is not found.</span>";
    header('location: searchCustomer.php?error=' . $error);
    
}else{
     //$row= mysqli_fetch_array($r);    
    ?>
    <div class="container">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <h1 style="text-decoration: underline">Details</h1>
            <br>
            <div class="table-responsive">
            <table class="table table-condensed ">
                <tr>
                    <td style="font-weight: bold">Customer ID</td>
                    <td>:&nbsp;&nbsp;<?php echo $row[0];?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold">Full Name</td>
                    <td>:&nbsp;&nbsp;<?php echo $row[1];?></td>
                </tr>
                
                <tr>
                    <td style="font-weight: bold">Account No</td>
                    <td>:&nbsp;&nbsp;<?php echo $row[2];?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold">Email</td>
                    <td>:&nbsp;&nbsp;<?php echo $row[3];?></td>
                </tr>
               </table>
            <center><a href="moneyTransfer.php"><input type="button" class="btn btn-success" 
                                                       value="Transfer Money"></a> </center>                    
            </div>
        </div>
    </div>
</div>

<?php
}
}
include 'Footer.php';

?>
