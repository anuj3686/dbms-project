<?php
$servername = "localhost";
$username = "id2967876_hotel_db";
$password = "12345678";
$dbname = "id2967876_hotel_db";

//echo "Hello world";
$conn = mysqli_connect($servername, $username, $password, $dbname);


if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

$q = $_REQUEST["q"];
//echo $q;
$sql="SELECT * FROM room WHERE CATEGORY_ID = '$q' ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
echo $row['TERRIF'];

?>

