<?php

$uname = $_POST['uname'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$text1 = $_POST['text1'];

if(!empty($uname) || !empty($mobile) || !empty($email) || !empty($text))
{
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "portfolio";

//crate the connection for index file

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else{
    $SELECT = "SELECT mobile From contact Where mobile = ? Limit 1";
    $SELECT = "SELECT email From contact Where email = ? Limit 1";
    $INSERT = "INSERT Into contact(uname,mobile,email,text1) values(?,?,?,?)";

//Prepare Statement

$stmt = $conn->prepare($SELECT);
$stmt->bind_param("i", $mobile);
$stmt->execute();
$stmt->bind_result($mobile);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($email);
$stmt->store_result();
$rnum = $stmt->num_rows;

//Checking Username

if($rnum==0){
    $stmt->close();
    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("siss", $uname,$mobile,$email,$text1);
    $stmt->execute();
    echo "New record inserted sucessfully";
}
else{
    echo "SomeOne Already Register using this email or number";
}
$stmt->close();
}
}
else{
    echo "All field are reqired";
    die();
}
?>