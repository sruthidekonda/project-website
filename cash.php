<?php

$cname = $_POST['cname'];
$email  = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];




if (!empty($cname) || !empty($email) || !empty($phone) || !empty($address) )
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT email From cashondelivery Where email = ? Limit 1";
  $INSERT = "INSERT Into cashondelivery (cname , email , phone , address )values(?,?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssis", $cname,$email,$phone,$address);
      $stmt->execute();
      echo "We got your Feedback sucessfully";
     } else {
      echo "You already used this email for feedback";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>