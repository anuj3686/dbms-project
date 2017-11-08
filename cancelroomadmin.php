<?php
$servername = "localhost";
$username = "id2967876_hotel_db";
$password = "12345678";
$dbname = "id2967876_hotel_db";


$conn = mysqli_connect($servername, $username, $password, $dbname);



$room =$_POST['room'];
$userid=$_POST['userid'];

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
$sql2="DELETE FROM `Date1` WHERE ROOM_NO='$room' AND USER_ID='$userid' ";
 if(mysqli_query($conn, $sql2))
     {}
     else{
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
$sql="DELETE FROM `Date` WHERE ROOM_NO='$userid' AND USER_ID='$userid' ";
$result= mysqli_query($conn, $sql);
echo '<script type="text/javascript">alert("booking cancelled");</script>';
echo '<script type="text/javascript">window.location.assign("https://hardback-completion.000webhostapp.com/Admin-Login/")</script>';
exit;
?>