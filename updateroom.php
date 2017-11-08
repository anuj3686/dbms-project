<?php
$servername = "localhost";
$username = "id2967876_hotel_db";
$password = "12345678";
$dbname = "id2967876_hotel_db";


$conn = mysqli_connect($servername, $username, $password, $dbname);



$room =$_POST['room'];
$price=$_POST['price'];
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
//echo $room;
//echo $price;
$sql="UPDATE `room` SET TERRIF='$price' WHERE CATEGORY_ID='$room'";
mysqli_query($conn, $sql);
echo '<script type="text/javascript">window.location.assign("https://hardback-completion.000webhostapp.com/Admin-Login/")</script>';
exit;
?>