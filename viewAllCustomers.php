        <style>
            td{
                text-align: center;
            }
        </style>
 <?php
    include 'Header.php';
    $sql="select * from customers";
    $r= mysqli_query($con, $sql);
?>
<div class="container">
    <center> <h1>All Customers</h1> </center>
<table class="table  table-hover table-bordered">
    <tr style="font-weight:bold;"><td>Customer ID</td><td>Full Name</td><td>Email</td><td>View Balance</td></tr>
    <?php 
           
            while($row=mysqli_fetch_array($r)){
                $id=$row[0];
                echo "<tr><td>$row[0]</td><td><a href='viewOneCustomer?id=$id'>$row[1]</a></td><td>$row[3]</td><td><a href='balance.php?id=$id'>
                <button type='button' class='btn btn-primary'>Click here</button></a></td></tr>";
            }
    ?>
    
</table>
</div>
<?php
    include 'footer2.php';
?>
</body>
</html>