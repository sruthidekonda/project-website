<?php

$cname = $_POST['pname'];
$email  = $_POST['email'];
$productname = $_POST['productname'];
$clothtp = $_POST['clothtp'];
$color = $_POST['color'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$shlderwidth = $_POST['shlderwidth'];
$bustgrth = $_POST['bustgrth'];
$bustmesmt = $_POST['bustmesmt'];
$waists = $_POST['waists'];
$hipmesmt = $_POST['hipmesmt'];
$handcrl = $_POST['handcrl'];
$armlgth = $_POST['armlgth'];
$leglgth = $_POST['leglgth'];
$bodyhght = $_POST['bodyhght'];
$phoneno = $_POST['phoneno'];
$address = $_POST['address'];
$msg = $_POST['msg']

if (!empty($pname) || !empty($email) || !empty($productname) || !empty($clothtp) || !empty($color) || ($sex) || !($age) || !empty($shlderwidth) || 
!empty($bustgrth) || !empty($bustmesmt) || !empty($waists) || !empty($hipmesmt) || !empty($handcrl) || !empty($armlgth) || !empty($leglgth) || !empty($bodyhght) || !($phoneno) || !empty($address) || !empty($msg))
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
  $SELECT = "SELECT phoneno From customizedetails Where phoneno = ? Limit 1";
  $INSERT = "INSERT Into customizedetails (pname , email , productname , clothtp , color , sex , age , shlderwidth , bustgrth , bustmesmt , waists , hipmesmt , handcrl , armlgth , leglgth , bodyhght , phoneno , address ,msg)
                            values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $phoneno);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssssiiiiiiiiiiiss", $pname,$email,$productname,$clothtp,$color,$sex,$age,$shlderwidth,$bustgrth,$bustmesmt,$waists,$hipmesmt,$handcrl,$armlgth,$leglgth,$bodyhght,$phoneno,$address,$msg);
      $stmt->execute();
      echo "We got your CUSTOMIZE PRODUCT DETAILS sucessfully";
     } else {
      echo "You already used this PHONE No to customize a product";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "Required fields you must have to fill";
 die();
}
?>

