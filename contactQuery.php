<?php
    include 'Header.php';
$name=$_POST['name'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];
echo '<script Type="javascript">alert("You will be contacted soon")</script>';
if($_REQUEST['submit'])
{
    $q="INSERT INTO contactquery(name,email,feedback) VALUES ('$name','$email','$feedback');";
    mysqli_query($con, $q);
     $error = "<span style='color:green'>Thank you for contacting us we will get back to you soon</span>";
    header('location: ContactUs.php?error=' . $error);
    
}

?>