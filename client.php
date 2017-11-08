<?php
$servername = "localhost";
$username = "id2967876_hotel_db";
$password = "12345678";
$dbname = "id2967876_hotel_db";


$conn = mysqli_connect($servername, $username, $password, $dbname);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "fdsxgf";
/*
if($_POST)
{
$name = $_POST['fname'];
$last = $_POST['lname'];
$date = $_POST['date'];
$contact = $_POST['contact'];
$rdate = $_POST['rdate'];
$city = $_POST['city'];
$state = $_POST['state'];
$adress = $_POST['adress'];
$gender = $_POST['gender'];
$pincode = $_POST['pincode'];
$email = $_POST['email'];
$status =1;


$sql = "INSERT INTO client VALUES($name,$last,$gender,$adress,$city,$state,$pincode,$date,$email,$contact,$rdate,$status";
$result = mysqli_query($conn,$sql);


}*/
