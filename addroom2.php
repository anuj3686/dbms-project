<?php
$servername = "localhost";
$username = "id2967876_hotel_db";
$password = "12345678";
$dbname = "id2967876_hotel_db";


$conn = mysqli_connect($servername, $username, $password, $dbname);

$room =$_POST['room'];
$price=$_POST['price'];
$cat=$_POST['cat'];



if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
$sql="INSERT INTO `room` VALUES('$room','$price','$cat',1,'2099-09-09')";
$result= mysqli_query($conn, $sql);

echo '<script type="text/javascript">window.location.assign("http://hardback-completion.000webhostapp.com/Admin-Login/")</script>';
exit;
?>