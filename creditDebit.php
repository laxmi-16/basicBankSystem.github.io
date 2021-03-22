<?php
    include 'Header.php';
    $sid=$_POST["sid"];
    $sname=$_POST["sname"];
    $rid=$_POST["rid"];
    $rname=$_POST["rname"];
    $amt=$_POST["amt"];
    $val_sender="select full_name,balance from customers where customerID='$sid';";
    $v1= mysqli_query($con,$val_sender);
    $row= mysqli_fetch_array($v1);
    $value1=$row[0];
    $bal1=$row[1];
    if("$value1"!="$sname"){
	echo "ho";
        //echo "<script>alert('Sender\'s customerID or Full name is wrong!');window.location='moneyTransfer.php';</script>";
        $error = "Sender's customer ID or Full name is wrong!";
         echo "<script>window.location='moneyTransfer.php?error= '.$error';</script>";
	header('location: moneyTransfer.php?error=' . $error);
        	//echo "<script>window.location='moneyTransfer.php?error=$error';</script>";
	return;
    }
    
    if($bal1<=$amt){
        $error = "<span style='color:red'>Insufficient Balance.</span>";
         header('location: moneyTransfer.php?error=' . $error);
         return; 
    }
    $val_receiver="select full_name,balance from customers where customerID=$rid";
    $v2= mysqli_query($con,$val_receiver);
    $row= mysqli_fetch_array($v2);
    $value2=$row[0];
    $bal2=$row[1];
    if("$value2"!="$rname"){
        //echo "<script>alert('Receiver\'s customerID or Full name is wrong!');window.location='moneyTransfer.php';</script>";
         $error = "<span style='color:red'>Receiver's customer ID or Full name is wrong!</span>";
         header('location: moneyTransfer.php?error=' . $error);
         return;
    }
    
    if($bal1<=$amt){
        $error = "<span style='color:red'>Insufficient Balance.</span>";
         header('location: moneyTransfer.php?error=' . $error);
         return; 
    }
    
    
    $q="INSERT INTO moneytransfer (sid, sname,rid, rname, amount) VALUES ('$sid', '$sname', '$rid', '$rname', '$amt');";
    $r=mysqli_query($con, $q);
    
    if($r)
    {
        $debit="UPDATE customers SET balance=balance-'$amt' WHERE customerID='$sid'";
        mysqli_query($con, $debit);
        $credit="UPDATE customers SET balance=balance+'$amt' WHERE customerID='$rid'";
        mysqli_query($con, $credit);
        //echo "<script>alert('Transaction Successful!');window.location='home.php';</script>";
         $error = "Transaction Successful!";
        header('location: moneyTransfer.php?t=' . $error);
        return;
    }else{
        //echo "<script>alert('Something Wrong!Please, Try again.');window.location='moneyTransfer.php';</script>";
        $error = "<span style='color:red'>Something Wrong!Please, Try again.</span>";
        header('location: moneyTransfer.php?error=' . $error);
        
    }
        
?>  


<?php
    include 'Footer.php';
?>