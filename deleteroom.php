<?php
$servername = "localhost";
$username = "id2967876_hotel_db";
$password = "12345678";
$dbname = "id2967876_hotel_db";


$conn = mysqli_connect($servername, $username, $password, $dbname);



$room =$_POST['room'];

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
$sql="DELETE FROM `room` WHERE ROOM_NO='$room'";
$result= mysqli_query($conn, $sql);
echo '<script type="text/javascript">window.location.assign("http://hardback-completion.000webhostapp.com/Admin-Login/")</script>';
exit;
?>