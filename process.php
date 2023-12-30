<?php

$cname = $_POST['cname'];
$email  = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];




if (!empty($cname) || !empty($email) || !empty($subject) || !empty($msg) )
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
  $SELECT = "SELECT email From feedback Where email = ? Limit 1";
  $INSERT = "INSERT Into feedback (cname , email , subject , msg )values(?,?,?,?)";

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
      $stmt->bind_param("ssss", $cname,$email,$subject,$msg);
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